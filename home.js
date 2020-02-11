var button = document.getElementById('upPr');
var div=document.getElementById('apdejt');
div.style.visibility='hidden';
var proveri=true;
function show()
{
    

    if(proveri==true)
    {
    div.style.visibility='visible';
    proveri=false;
    }
    else{
        div.style.visibility='hidden';
        proveri=true;
    }
}