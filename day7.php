<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<script type="text/javascript">
function myf()
{
	var x=document.forms['resume']['no'].value.length;
	
	if(x!=10)
	{
		alert("enter a 10 digit phone no");
	}
	
	var y=document.forms['resume']['password'].value;
	z=y.length;
  var pattern =/^(?=.*[A-Za-z])(?=.*\d)(?=.*[$@$!%*#?&])[A-Za-z\d$@$!%*#?&]{8,}$/ 
  
		if (z<8)
	{
		alert("password should not be less than 8 characters");
	}
	else if(y!=y.match(pattern))
	{
		alert("it should have a numeric and one special character also");
		
	}
}
</script>
</head>
<style>
body
{
	background-image:url(images/Health06.jpg);
	background-size:cover;
	background-repeat:no-repeat;
}
.box
{
	height:1300px;
	width: 650px;
	margin:0 auto;
	border-width:1px;
	border-color:#CCCCCC;
	border-style:solid;
	border-radius:4px;
	background-color:#FFFBE0;
}
header
{
	height:270px;
	font-family:'Roboto',sans-serif;
	text-align:center;
	background-image:url(images/Health17.jpg);
	padding:1px;
	background-size:100% 100%;
	
}
input
{
	text-align:center;
	font-size:24px;
	font-family:'Roboto',sans-serif;
	margin:10px;
	padding:3px;
}
form
{
	text-align:center;
	font-family:"Arial Black", "Comic Sans MS";	
}
</style>
<body>
<a href="view.php">view all records</a>
<br/>

<div class ="box">
	<header>
    <img src="images/8.jpg" height="95" width="100" style="float:left"/>
    <h1 style="color:#F8FF01">Kayakalp <br>Registration Form</h1>
    </header>
	<form name="resume" onsubmit="return myf()" action="show.php" method="post" enctype="multipart/form-data"> 
    <h3 style="text-align:left; border:1px solid #BDC7D8; border-radius:5px; padding:10px; background-color:#F1D8A3;">Member's Information</h3>
	<br />
    <label>NAME :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:4px; margin:4px" type="text" name=" name" placeholder=" Name"/>
	<br />
    <br />
    <label>CONTACT NO : &nbsp </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:4px; margin:4px" type="number" name="no" placeholder="Number" />
	<br />
	<br />
    <label>EMAIL :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:4px; margin:4px" type="email" name="email" placeholder="abc@pns.com" />
	<br />
	<br />
    <label>T-SHIRT SIZE :&nbsp &nbsp  </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:4px; margin:4px" type="text" name="size" placeholder=" T-Shirt Size"/>
	<br />
    <br />
    <label>&nbsp &nbsp ADDRESS : &nbsp &nbsp   </label>
    <textarea style="border:1px solid #BDC7D8; border-radius:5px; padding:5px; margin:5px" name="add" rows="2" cols="38" > </textarea>
    <br />
    <br />
	<label>STATE :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
	<select style="border:1px solid #BDC7D8; border-radius:5px; padding:5px; margin:5px" name="state"><option>STATE</option>
		<option>Haryana</option>
		<option>Goa</option>
		<option>Himachal Pradesh</option>
		<option>Gujrat</option>
		<option>Punjab</option>
		<option>Rajasthan</option>
		<option>Jammu & Kashmir</option> 
	</select>
    <br />
    <br />
    <label>CITY :&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </label>
	<select style="border:1px solid #BDC7D8; border-radius:5px; padding:5px; margin:5px" name="city"><option>CITY</option>
		<option>Noida</option>
		<option>Chandigarh</option>
		<option>Delhi</option>
		<option>Bangalore</option>
		<option>Kolkata</option>
		<option>Ludhina</option>
		<option>Jagadhri</option> 
	</select>
    <br />
    <br />
    <label>DATE OF BIRTH :&nbsp &nbsp &nbsp &nbsp </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:3px; margin:3px" type="date" name="dob" />
	<br />
	<br />
    <table>
    	<tr>
    		<td>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Gender: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    			Male<input type="radio" name="gender" value="Male">&nbsp &nbsp &nbsp
    			Female<input type="radio" name="gender" value="Female">
    		</td>
    	</tr>
    </table>
    <br />
    <label>PASSWORD :&nbsp &nbsp </label>
	<input style="border:1px solid #BDC7D8; border-radius:5px; padding:4px; margin:4px" type="password" name="password" placeholder="Password" />
	<h5>"Password Should Be Min Of 8 Letters"</h5>
    <br />
    <label>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp PHOTO : </label>
    <input type="file" name="image" />
    <br />
    <input type="submit" value="submit" name="submit" />
   </form>
</div>
</body>
</html>
