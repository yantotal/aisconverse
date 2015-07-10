/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */
( function( $ ) {
    //Comment validation
    $("#commentform #submit").click(function() {
        var text = $(this).find("#comment").val();
        if(text.length() == 0)
            alert("No validate");
        return false;
    });
});