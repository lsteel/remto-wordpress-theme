(function($) {
  $(document).ready(function() {

    $('.site-content').css({
      'padding-bottom': ($('.site-footer').innerHeight() - 1) + 'px'
    })

    $('.site').css({
      'min-height': $(window).innerHeight() + 'px'
    })

    $(window).resize(function(event) {
      $('.site-content').css({
        'padding-bottom': ($('.site-footer').innerHeight() - 1) + 'px'
      })
      $('.site').css({
        'min-height': $(window).innerHeight() + 'px'
      })
    });
    
  })
})(jQuery)
