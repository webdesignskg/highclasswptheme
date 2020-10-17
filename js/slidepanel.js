(function($) {
$('#toggle').toggle( 
    function() {
        $('#popout').animate({ left: 0 }, 'slow', function() {
            $('#toggle').html('<img src="/wp-content/themes/newbstheme/images/menu.png" alt="close" />');
        });
    }, 
    function() {
        $('#popout').animate({ left: -526 }, 'slow', function() {
            $('#toggle').html('<img src="/wp-content/themes/newbstheme/images/menu.png" alt="close" />');
        });
    }
);
})(jQuery);