<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$name1=$_SESSION['name'];
$q="select name from users where not name='$name1'";
$result=mysqli_query($con,$q);
?>


<html>
<head>
   <title>Transfer</title>
 	<!-- Bootstrap Link -->
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body{
			background-image: url("images/view-background.jpg");
			background-size: cover;
		}
			
	    .navul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.navli {
		  float:left;
		}

		.navli a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 5px 5px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		
		}
		.form{
			text-align:center;
			
		}
		.transfer-btn{
			margin-left:120px;
		}
	
		table{
			background-color: rgba(0, 0, 0, 0.5);
			padding:100px;
			border:2px ridge black;
		}
		tr{
			padding:30px;
		}
		.border-{
			margin:100px;
		}
		label{
			padding:20px;
		}
	
		
	</style>
</head>
<body>
	<ul class="navul">
	<a href="index.php">
		<li class="navli"><button class="btn btn-primary btn-md"><i class="fa fa-home"></i></button></li>
	</a>
	</ul>
	<center>
		<div class="view">
			<br><br><h2 style=" font-size:45px;color: #ddd;;text-shadow: 1px 1px black;">Transfer Amount</h2>
			<form action="checkcredit.php" method="post" >
				<div class="border-">
				<table>
					<tr>
						<td style="font-size:12pt;color:#ddd;">
							<label for="sender" align="left"><h5>Receiver Name:</h5></label>
							&nbsp; <select name="receiver" style="font-size: 12pt; height: 28px; width:290px;margin-right:30px;">
           <?php while($row = $result->fetch_assoc()) { ?>
			<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>
			<?php } ?>
			</td>
		</tr><br>
		<tr>
			<td  style="font-size:12pt;color:#ddd;">
			<br><label for="transfer"><h5>Amount:</h5></label> 
			 &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<input type="number" name="transfer" style="font-size: 12pt; height: 28px; width:290px; margin-left:13px;" required></td>
		</tr>
       <tr>
			<td>
				<div class="button">
				<br> &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<button type="submit" class="btn btn-primary  transfer-btn"  value="Credit" ><h5>Transfer</h5></button>
				</div>
		   </td>
        </tr>
       </table>
	   </div>
      </form>
    </div><br>
	<form action="user.php" method="post">
			<div class="buttons">
				<button class="btn btn-primary" style="width:150px;" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button>
			</div>
	</form>
</center>
</body>
</html>