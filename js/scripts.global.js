/* Menu*/
$(function(){

    /* prepend menu icon */
    $('#nav-wrap').prepend('<div id="menu-icon"></div>');
    
    /* toggle nav */
    $("#menu-icon").on("click", function(){
        $("#nav-menu").slideToggle();
        $(this).toggleClass("active");
    });

    $.preloadImages = function() {
        for (var i = 0; i < arguments.length; i++) {
        $("<img />").attr("src", arguments[i]);
        }
    }

});

/* Tooltip */
$(function()
{
   $('.tip').tooltip({ 
        position: { 
            my: "center top", 
            at: "center bottom" 
        }
    });
});