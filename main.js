$("#backg").css("height",$(window).height() + "px");
$("#weather_alert").hide();
$("#fail_alert").hide();
$("#weatherbutton").click(function(event){
    if ($('#city_name').val() != "")
    {
    event.preventDefault();
    $.get("scrapper.php?city="+$('#city_name').val(), function(data){
        if(data == "")
        {
            $("#weather_alert").hide();
            $("#fail_alert").fadeIn();
            $("#message").html("Enter a Valid City!");
        }
        else
        {
            $("#fail_alert").hide();
            $("#weather_alert").fadeIn();
            $("#message").html(data);
        }
    });

    }
    else {
        alert("Please Enter a City Name!");
    }


});