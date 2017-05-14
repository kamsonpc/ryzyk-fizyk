var search_click=false;
$("#s-input" ).hide();
$("#s-button").click(function()
{
    if(search_click==false)
    {
        $("#s-input" ).fadeIn( );
        search_click=true;
    }
    else
    {
        search_click=false;
        $( "#s-input" ).fadeOut( );
    }

    });


