var active_popup=true;
function close_popup(name_popup)
{
    document.getElementById(name_popup).style.visibility='hidden';
    setTimeout(function() { active_popup=false; }, 500);
}
function open_popup(name_popup)
{
    document.getElementById(name_popup).style.visibility='visible';
    setTimeout(function() { active_popup=true; }, 500);
}
