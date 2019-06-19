function get_middle_pos(element_name)
{
    coord=[];
    viewportOffset = document.getElementById(element_name).getBoundingClientRect();
    width=document.getElementById(element_name).offsetWidth;
    height=document.getElementById(element_name).offsetHeight;
    coord=[viewportOffset.left+height/2,viewportOffset.top+width/2];
    return coord;
}
