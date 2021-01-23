<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select name from users";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<!-- Bootstrap Link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


	<style>
	body{
		text-align:center;
	}
	body{
		
		background-position: center;
		background-repeat: no-repeat;
		background-size:cover;
		object-fit:cover;
		background-image: url("images/scenary.jpg")
	}
	html,body{
		height:100%;
		width:100%;
	}
	html {
    display: table;
    margin: auto;
	}

	body {
    display: table-cell;
    vertical-align: middle;
	}
	.center{
		display:inline-block;
		background-color: rgba(0, 0, 0, 0.5);
		padding:50px;
		border:2px ridge red;
	}
	.ho{
		padding-top:50px;
	}
	.header{
		color:#fff;
	}
	

	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Arnav"){
				 var arr=["Magnus","Radjabov","Anish","Anand","Vidit","Levon","Shubham","Nathan","Utkarsh"];
				 }
				 else if(a==="Magnus"){
					var arr=["Arnav","Radjabov","Anish","Anand","Vidit","Levon","Shubham","Nathan","Utkarsh"];
				}
				else if(a==="Radjabov"){
					var arr=["Arnav","Magnus","Anish","Anand","Vidit","Levon","Shubham","Nathan","Utkarsh"];
				}
				else if(a==="Anish"){
					var arr=["Arnav","Magnus","Radjabov","Anand","Vidit","Levon","Shubham","Nathan","Utkarsh"];
				 }
				 else if(a==="Anand"){
					var arr=["Arnav","Magnus","Radjabov","Anish","Vidit","Levon","Shubham","Nathan","Utkarsh"];
				 }
				 else if(a==="Vidit"){
					var arr=["Arnav","Magnus","Radjabov","Anish","Anand","Levon","Shubham","Nathan","Utkarsh"];
				 }
				 else if(a==="Levon"){
					var arr=["Arnav","Magnus","Radjabov","Anish","Anand","Vidit","Shubham","Nathan","Utkarsh"];
				 }
				 else if(a==="Shubham"){
					var arr=["Arnav","Magnus","Radjabov","Anish","Anand","Vidit","Levon","Nathan","Utkarsh"];
				 }
				 else if(a==="Nathan"){
					var arr=["Arnav","Magnus","Radjabov","Anish","Anand","Vidit","Levon","Shubham","Utkarsh"];
				 }
				 else if(a==="Utkarsh"){
				 var arr=["Arnav","Magnus","Radjabov","Anish","Anand","Vidit","Levon","Shubham","Nathan"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
</head>
<body>
	<h1 style=" font-size:50px;color:#351f39;text-shadow: 1.5px 1.5px black;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left" class="header"><strong>Senders Name:</strong> &nbsp;</label>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Arnav">Arnav</option>
			<option value="Magnus">Magnus</option>
			<option value="Radjabov">Radjabov</option>
			<option value="Anish">Anish</option>
			<option value="Anand">Anand</option>
			<option value="Vidit">Vidit</option>
			<option value="Levon">Levon</option>
			<option value="Shubham">Shubham</option>
			<option value="Nathan">Nathan</option>
			<option value="Utkarsh">Utkarsh</option>
		</select><br><br>
		<label for="receiver" align="left" class="header"><strong>Receiver Name:</strong>&nbsp;</label>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left" class="header"><strong>Amount:</strong> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; width:285px;" align="middle" required><br><br>
		<div class="button1">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Transfer" style=" width:150px; text-align:center;margin-right:60px;margin-top:20px;">
		</div>
	</form> 
	</div><br><br><br>
	<div class="buttons">
	<a href="index.php">
    <button class="btn btn-primary" style="width:150px;">HOME</button>
	</a>
</div>
</body>
</html>