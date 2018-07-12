$(function(){
  'use strict';
  var $page = $('#main'),
      options = {
        debug: true,
        prefetch: true,
        cacheLength: 4,
        onStart: {
          duration: 950, // Duration of our animation
          render: function ($container) {
            // Add your CSS animation reversing class
            $("#li4").fadeOut();
            $("#li3").fadeOut();
            $("#li2").fadeOut();
            $("#li1").fadeOut();
            $('#page-header').removeClass('active');
            $container.addClass('is-exiting');
            // Restart your animation
            smoothState.restartCSSAnimations();
          }
        },
        onReady: {
          duration: 100,
          render: function ($container, $newContent) {
            // Remove your CSS animation reversing class
            $("#li4").fadeOut();
            $("#li3").fadeOut();
            $("#li2").fadeOut();
            $("#li1").fadeOut();
            $('#page-header').removeClass('active');
            $container.removeClass('is-exiting');
            // Inject the new content
            $container.html($newContent);
          }
        }
      },
      smoothState = $page.smoothState(options).data('smoothState');
});
