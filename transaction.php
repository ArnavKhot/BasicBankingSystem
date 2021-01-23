<?php
session_start();
$con=mysqli_connect('localhost','root','','banking_system');
$q="select *from mini_statement";
$result=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 <!-- Bootstrap Link -->
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
		}
		body{
			background-image:url("images/scenary.jpg");
			background-size:cover;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			background-color: rgba(0, 0, 0, 0.7);
			}
		th{
			color:#fff;
			font-size:26px;
			padding:16px;
		}
		
		td{
			font-size:23px;
			color:#ddd ;
			padding: 10px 20px 10px 22px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:50px;
			color:#fff;
			text-shadow: 1px 1px black;
			text-align:center;
		}
	
		.buttons{
			
			right:42%;
			text-align:center;
		}
	

		
	</style>
	</head>
	<body>
		<ul class="nav-ul">
	<a href="index.php">
		<li class="nav-li"><button class="btn btn-primary btn-lg"><i class="fa fa-home"></i></button></li>
	</a>
	</ul><br><br><br><br><br><br>
	<div class="container">
		<h2>Transactions</h2>
	</div>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<form action="index.php" method="post">
			<div class="buttons">
				<button class="btn btn-primary" type="submit" name="name" style="width:150px; margin-bottom:20px;">BACK</button>
			</div>
		</form>
		
	</body>
</html>