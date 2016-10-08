// send forms
function send_form(id, file, message) {
  $('#'+id).submit(function() {
    var str = $(this).serialize();
    $.ajax({
      type: 'POST',
      url: '/mail/'+file+'.php',
      data: str,
      success: function(msg){
        if(msg == 'OK'){
          result = '<div class="form-sended">'+message+'</div>';
          $('#'+id).html(result);
        }else{
          result = msg;
          $('#'+id).html(result);
        }
      }
    });
    return false;
  });
}

send_form('formid', 'phpform', 'Спасибо, скоро мы с Вами свяжемся.');
send_form('formcontacts', 'phpform', 'Спасибо, скоро мы с Вами свяжемся.');

// change form title
function fform(title, value, mail, mes) {
  $('.modal-form-title').html(title);
  $('.modal-form-value').val(value);
  if(mail){
    $('.formmail').show();
  }else{
    $('.formmail').hide();
  };
  if(mes){
    $('.formmes').show();
  }else{
    $('.formmes').hide();
  };
};

// fancybox
jQuery.fn.getTitle = function() { // Copy the title of every IMG tag and add it to its parent A so that fancybox can show titles
  var arr = jQuery("a.fancybox");
  jQuery.each(arr, function() {
    var title = jQuery(this).children("img").attr("title");
    jQuery(this).attr('title',title);
  })
}
var thumbnails = jQuery("a:has(img)").not(".nolightbox").filter( function() { return /\.(jpe?g|png|gif|bmp)$/i.test(jQuery(this).attr('href')) }); // Find .post>a>img and create fancybox image gallery
var posts = jQuery(".item-images"); //find post
posts.each(function() {
  jQuery(this).find(thumbnails).addClass("fancybox").attr("rel","fancybox"+posts.index(this)).getTitle()
});
jQuery("a.fancybox").fancybox({ // fancybox on
  helpers : {
    overlay : {
      locked : false // try changing to true and scrolling around the page
    }
  }
});

// mobile menu
$('.burger-menu').click(function () {
  $(this).toggleClass('active');
  $('.pro-menu').slideToggle();
});

// slow scroll menu
$(document).ready(function(){
  $(".pro-menu li").on("click","a.scroll", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 500);
  });
});

// slow scroll menu
$(document).ready(function(){
  $(".head-top").on("click","a.next", function (event) {
    event.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top}, 500);
  });
});

$(document).ready(function(){
  if($(window).width() < 767){
    var vh = $(window).height();
    $('.head-top.main-top').height(vh);
  };
});

$(document).ready(function() {
  // Initialize navgoco with default options
  $(".pro-vmenu").navgoco({
    caretHtml: ' ',
    accordion: false,
    openClass: 'open',
    slide: {
      duration: 400,
      easing: 'swing'
    }
  });
});