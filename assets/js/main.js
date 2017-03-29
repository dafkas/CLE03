/**
 * Created by marvin_blabla on 20-03-17.
 */
window.addEventListener('load', init);

var play = 1;
var img = document.createElement("img");


function init()
{
    checkPlay();
    getWeather();
}


function getWeather()
{
    reqwest({
        headers: { 'X-Auth-Token': '82affefcf77f4251be61c60bf7ededa6' },
        url: 'http://api.football-data.org/v1/teams/1085',
        contentType: 'json',
        type: 'GET',
        success: setWeather,
        error: errorHandler
    });
}

function errorHandler(e) {
    console.log(e);
}

function setWeather()
{
    alert("success");
}

function checkPlay()
{
    if(play == 1)
    {
       img.src = "https://assets.digital.cabinet-office.gov.uk/media/559fbe3e40f0b6156700004f/traffic-light-green.jpg";
        img.style = "width:14%;";
       var foo = document.getElementById("playing");
       foo.appendChild(img);
    }
    else {
        img.src = "https://assets.digital.cabinet-office.gov.uk/media/559fbe1940f0b6156700004d/traffic-light-red.jpg";
        img.style = "width:14%;";
        var foo = document.getElementById("playing");
        foo.appendChild(img);
    }
}