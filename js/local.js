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

$(function()
{
//add the validation plug-in to the form
    $('#contactUs').validate(
    {
        rules:
        {
            name: 'required',
            email: {required:true, email:true},
            comments: {required:true}
            
        },//end rules
        
        messages:
        {
            name:
            {
                required: "Enter your name"
            },//end name messages
            
            email:
            {
                required: "Enter your email",
                email: "Enter your email"
            },//end email messages
            
            comments:
            {
                required: "Enter your message"
            }//end comments messages
        }//end messages
    }); //end validate

//change the border style of the field when focus
    $(':input').focus(function() 
    {
        $(this).addClass('inputFocus');                    
    });
    
    //change the border style of the field when blur
    $(':input').blur(function() 
    {
        $(this).removeClass('inputFocus');                    
    });

//set the focus to the first name when the page loads   
    $('#name').focus();
    
//hide other field when the page is loaded
    $('#referOtherOpt').hide();
    //use change to hide and show other field based on refer selection
    $('#refer').change(function() 
    {
        if($(this).val() == 'Other'){
            $('#referOtherOpt').show();
        } else {
            $('#referOtherOpt').hide();
        }
    });//end change hide show other
    
//apply ajax to the form
    $('#contactUs').submit(function() 
    {
        if($('#contactUs').valid()) 
        {
        var queryString = $('#contactUs').serialize();
        $.post('email.php', queryString, processResults);
        return false; //do not submit
        }
    });
        
    function processResults(data, textStatus, xhr) 
    {
        if(textStatus == 'success')
        {
            $('#success').text(data); //display success message
            $('#contactUs').hide(); //hide form
        }
    }
    
});//end document ready

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

/* Lightbox */
$(function()
{
   $('a.lightbox').lightBox();
});

/* Carousel */
$(function()
{
    $('.owl-carousel').owlCarousel({
        items : 3,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        autoPlay : 9999,
        stopOnHover : true,
    });
});

/* Form Validation */


