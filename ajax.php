 <html>
 <body>
 <form name="form1" action="<?php $_SERVER["PHP_SELF"] ?>" method="GET">
 <div id="disp_data"></div>
 
 <input type="text" id="txtnameins" placeholder="name">
 <input type="text" id="txtageins" placeholder="age">
 <input type="button" id="but1" value="insert" onclick="ins();">
 </form>
 <script>
 disp_data();
function disp_data()
{
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","conn.php?status=disp",false);
  xmlhttp.send(null);
  document.getElementById("disp_data").innerHTML=xmlhttp.responseText;

}
 function aa(a)
 {
	nameid="name"+a;
	txtnameid="txtname"+a;
	var name=document.getElementById(nameid).innerHTML;
	document.getElementById(nameid).innerHTML="<input type='text' value='"+name+"' id='"+txtnameid+"'>";
    
	ageid="age"+a;
	txtageid="txtage"+a;
	var age=document.getElementById(ageid).innerHTML;
	document.getElementById(ageid).innerHTML="<input type='text' value='"+age+"' id='"+txtageid+"'>";
  
  updateid="update"+a;
  document.getElementById(a).style.visibility="hidden";
  document.getElementById(updateid).style.visibility="visible";
 }
 function bb(b)
 {
	 var nameid="txtname"+b;
	 var name=document.getElementById(nameid).value;
	 
	 var ageid="txtage"+b;
	 var age=document.getElementById(ageid).value;
	 
	 update_value(b,name,age);
	 document.getElementById(b).style.visibility="visible";
	 document.getElementById("update"+b).style.visibility="visible";
	 document.getElementById("name"+b).innerHTML=name;
	 document.getElementById("age"+b).innerHTML=age;
 }
 function update_value(id,name,age)
 {
	 var xmlhttp=new XMLHttpRequest();
	 xmlhttp.open("GET","conn.php?id="+id+"&name="+name+"&age="+age+"&status=update",false);
	 xmlhttp.send(null);
 }
 function delete1(id)
 {
	 var xmlhttp=new XMLHttpRequest();
	 xmlhttp.open("GET","conn.php?id="+id+"&status=delete",false);
	 xmlhttp.send(null);
	 disp_data();
 }
function ins()
{

var nm=document.getElementById("txtnameins").value;
var ct=document.getElementById("txtageins").value;

var xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET","conn.php?nm="+nm+"&ct="+ct+"&status=ins",false);
  xmlhttp.send(null);


disp_data();

document.getElementById("txtnameins").value="";
document.getElementById("txtageins").value="";

}
 </script>
 </body>
 </html>