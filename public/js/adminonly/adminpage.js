// Custom Javascript/JQuery for this view 
 $(document).ready(function()
{

    //This is for the collapse button for mobile display
    $(".button-collapse").sideNav();
    
    //Tooltip
    $('.tooltipped').tooltip({delay: 50});
    
});
$(document).ready(function() {
   // Dropdown Button in Navbar
   $('.dropdown-trigger').dropdown();
  });
//This is for the anchor element of the JOIN US buttons
$(document).on('click', '#a', function(event)
{
    event.preventDefault();

    $('html, body').animate({
                    scrollTop: $( $.attr(this, 'href') ).offset().top
                }, 1000);
});

//This is the script for performing the loading screen 
document.onreadystatechange = function () 
{
    var state = document.readyState
    if (state == 'interactive')
    {
        document.getElementById('contents').style.visibility="hidden";
    } 
    else if (state == 'complete') 
    {
        setTimeout(function(){
            document.getElementById('interactive');
            document.getElementById('load').style.visibility="hidden";
            document.getElementById('contents').style.visibility="visible";
        },1000);
    }
}