<?php 
session_start();
$con=mysqli_connect('localhost','root','','banking_system');

$q="select * from users ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>viewUser</title>
    <!-- Bootstrap Link -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
   
	<style>
		body{
			text-align:center;
		}
		/* .flat-table-1 {
			background: #bce6eb;
		} */
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		h1{
			font-family: Arial, Times, serif;
			padding:30px;
		}
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			background-color: rgba(0, 0, 0, 0.5);
			}
		th{
			color:#ddd;
			font-size:24px;
			padding:16px;
		}
		
		td{
			text-align:center;
			font-size:22px;
			color: #fff;
			padding: 0px 20px 0px 20px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
			text-shadow: 1px 1px black;
		}
		.css-button{
			margin-left:auto;
			margin-right:auto;
		}
	
		
		
		.view{
			top:50%;
			padding-top:20px;
			text-align:center;
		}
		.ho{
			padding-top:50px;
			padding-bottom:100px;
		}
		body{
		background-image:url("images/view-background.jpg");
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		
	   }
	  
	   
	   
  </style>
	
</head>
	
<body>
<div class="container">
    <div class="overlay">
	<h1 style="color:#fff;text-shadow: 2px 2px black;">User Information</h1>
    <table class="flat-table-1">
		<thead>
			<th>NO</th>
			<th>Name</th>
			<th>Email</th>
			<th>Credit</th>
			<th></th>
		</thead>
		<tbody>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 1</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post"  class="view">
					<button class="btn btn-success" type="submit" name="name" value="Arnav">View</button>
				</form>
			</td>
		</tr>
		<tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 2</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success" type="submit" name="name" value="Magnus">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 3</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success" type="submit" name="name" value="Radjabov">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 4</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success" type="submit" name="name" value="Anish">View</button>
				</form>
			</td>
   

        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 5</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success" type="submit" name="name" value="Anand">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 6</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success" type="submit" name="name" value="Vidit">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
     
				$row=mysqli_fetch_array($result);
			?>
			<td> 7</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success"type="submit" name="name" value="Levon">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php   
				$row=mysqli_fetch_array($result);
			?>
			<td> 8</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success"type="submit" name="name" value="Shubham">View</button>
				</form>
			</td>
		</tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 9</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success"type="submit" name="name" value="Nathan">View</button>
				</form>
			</td>
        </tr>
        <tr>
			<?php  
				$row=mysqli_fetch_array($result);
			?>
			<td> 10</td>
			<td><?php echo  $row["name"]; ?></td>
			<td><?php echo  $row["email"]; ?></td>
			<td><?php echo  $row["amount"]; ?></td>
			<td>
				<form action="user.php" method="post" class="view">
					<button class="btn btn-success"type="submit" name="name" value="Utkarsh">View</button>
				</form>
			</td>
		</tr>
		</tbody>
	</table><br><br>

   <div class="buttons">
	   <a href="index.php">
       <button class="btn btn-primary" style="width:150px; margin-bottom:20px;">HOME</button>
	  </a>
    </div>
   </div>
</div>
</body>
</html>