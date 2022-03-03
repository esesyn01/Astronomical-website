var x=0;
var t;
var a=0;
var pyt2;
var pyt4;
var pyt7;
function timer()
{
    x=x+1;
    t=setTimeout(timer,10);
}
function disbtn()
{
    document.getElementById("starter").disabled="true";
}
function g()
{
    if(!a)
    {
        a=1;
        timer();

    }
    disbtn();
}
function reset()
{
    document.getElementById("forme").reset();
}
function undisbtn()
{
    document.getElementById("starter").disabled=false;
}
var op1;
var op2; 
var op3;
function checkboxes()
{
    op1=document.getElementById("pyt2_1").checked;
    op2=document.getElementById("pyt2_2").checked;
    op3=document.getElementById("pyt2_3").checked;
    if (op1==1 && op2==1)
    {
        if(op3==0)
        {
            pyt2=1;
        }
        else
        {
            pyt2=0;
        }
    }
    else{
        pyt2=0;
    }
}
function radioa()
{
    if(document.getElementById("false_4").checked)
    {
        pyt4=1;
    }
    else
    {
        pyt4=0;
    }
}
function radiob()
{
    if(document.getElementById("false_7").checked)
    {
        pyt7=1;
    }
    else
    {
        pyt7=0;
    }  
}
function record()
{
    if (localStorage.getItem("grekord")===null)
    {
        localStorage.setItem("grekord","999999")
    }
    if (sessionStorage.getItem("rekord")===null)
    {
        sessionStorage.setItem("rekord", "999999")
    }
    var ses=sessionStorage.getItem("rekord")*1;
    var loc=localStorage.getItem("grekord")*1;
    if (ses>x)
    {
    sessionStorage.setItem("rekord" ,x);
    }
    if (loc>x)
    {
        localStorage.setItem("grekord",x);
    }
    var ses=sessionStorage.getItem("rekord")*1;
    var loc=localStorage.getItem("grekord")*1;
    document.getElementById("xyz").innerHTML="Twój najlepszy czas tej sesji:"+ses/100+"s.";
    document.getElementById("yzx").innerHTML="Twój najlepszy czas kiedykolwiek:"+loc/100+"s.";
}
function result()
{
    clearTimeout(t);
    a=0;
    var seconds=x/100;
    var pyt1=document.getElementById("pyt1").value;
    checkboxes();
    var pyt3=document.getElementById("pyt3").value;
    radioa();
    var pyt5=document.getElementById("pyt5").value;
    var pyt6=document.getElementById("pyt6").value;
    radiob();
    if (pyt1=="Jowisz" && pyt2==1 && pyt3=="Uran" && pyt4==1 && pyt5==2 && pyt6=="Saturn" && pyt7==1)
    {
    document.getElementById("result").innerHTML="Twój czas:"+seconds+"s";
    record();
    }
    else
    {
    document.getElementById("result").innerHTML="Niepoprawne odpowiedzi. Spróbuj jeszcze raz."
    }
    undisbtn();
    reset();
    x=0;
}
function marsbtn()
{
    document.getElementById("marsbtt").disabled=true;
}
function mars()
{
    var ptext=document.createElement("p");
    var text=document.createTextNode("Mars jest jedyną planetą poza Ziemią, na której obserwowano zjawisko zaćmienia Słońca.");
    marsbtn();
    ptext.appendChild(text);
    document.getElementById("mar").appendChild(ptext);
    var zdj=document.createElement("img");
    zdj.src="D:/Wai projekt/dev-wai/src/web/static/img_static/zac.jpg";
    zdj.setAttribute("width","40%");
    document.getElementById("mar").appendChild(zdj);
}

function crtbtn()
{
    var f=document.createElement("button");
    f.setAttribute("onclick","mars()");
    f.setAttribute("id","marsbtt");
    f.innerHTML="Kliknij tutaj, aby wyświetlić ciekawostkę o Marsie";
    document.getElementById("mar").appendChild(f);
}
function satbtn()
{
    document.getElementById("satr").disabled=true;
    document.getElementById("togsat").disabled=false;
    document.getElementById("satr").style.visibility="hidden";
    document.getElementById("togsat").style.visibility="visible";
}
function togsatbtn()
{
    document.getElementById("sat").style.color="#ffffff";
    document.getElementById("satr").disabled=false;
    document.getElementById("togsat").disabled=true;
    document.getElementById("togsat").style.visibility="hidden";
    document.getElementById("satr").style.visibility="visible";
}
function saturn()
{
    document.getElementById("sat").style.color="#ff0000";

    satbtn();
}
function crtsat()
{
    var k=document.createElement("button");
    document.getElementById("togsat").style.visibility="hidden";
    k.setAttribute("onclick","saturn()");
    k.setAttribute("id","satr");
    k.innerHTML="Kliknij tutaj, aby wyróżnić tekst o Saturnie.";
    document.getElementById("sat").appendChild(k);
}
function reveal()
{
   document.getElementById("starter").style.visibility=("visible");
}
