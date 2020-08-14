function formvalidation()
{
    alert("form submit?")
    var name=document.getElementById("name");
    if(name.value == "")
    {
        alert('oe fuchey nam khali rakhchas');
        return false
    }
    var address=document.getElementById(address);
    if(address.value="")
    {
        alert('address lekh na bhai kina dimakh chatya')
    }
}
function changetoblue()
{
var x=document.getElementById("heading")
x.style.color="blue";
}
function changemia()
{
    var image=document.getElementById("mia")
    image.src="miaopen.jpg"
    image.width=500
    image.height=350
}
function backtonormal()
{
    var image=document.getElementById("mia")
    image.src="miaclose.jpg"
    image.width=500
    image.height=350   
}
function createobject()
{
    var element=document.createElement("h3")
    var main=document.getElementById("main")
    main.appendChild(element)
    var heading=document.createTextNode("mia khalifa body measurement")
    element.appendChild(heading)
    var p=document.createElement("p")
    element.appendChild(p)
    var text=document.createTextNode("chest: 40 waist:27 ass: 50")
    p.appendChild(text)
}
