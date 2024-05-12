function darkOn(event)
{
    event.preventDefault();
    document.querySelector('body').style.backgroundColor = "#121212";
    document.querySelector('.header').style.backgroundColor = "#1A1A1A";
    document.querySelector('.header').style.color = "white";
    document.querySelector('nav').style.backgroundColor = "#1A1A1A";
    var nav_anch = document.querySelectorAll(' nav .sidebar2 a');

    nav_anch.forEach(function(anchor)
    {
    anchor.style.filter = 'invert(100%)';
    });

    document.querySelector('.sidebar').style.backgroundColor= '#1A1A1A';

    var sidebar_anch = document.querySelectorAll('.sidebar li a');

    sidebar_anch.forEach(function(anchor)
    {
    anchor.style.filter = 'invert(100%)';
    });

    document.querySelector('.dark_mode').style.filter = 'invert(100%)'
}