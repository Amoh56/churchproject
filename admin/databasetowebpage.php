<!-- this is the page that fetches the announcement requested by web user -->
<?php
// PHP code to establish connection
// with the localserver

// Username is root
$user = 'root';
$password = '';

// Database name is loginpage
$database = 'myprojo';

// Server is localhost with
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM sender ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!--HTML code to display data in tabular format-->
<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Admin Make Announcements</title>

	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		/*borderd form*/
        form {
            border: 3px #f1f1f1;
        }
        body{
            background-color: rgb(1, 139, 139);
        }
        /* centering sender form */
        .sender{
            max-width: 960px;
            margin-left: 15%;
        }

        /* full width inputs */
        input[type=text],
        input[type=date],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solis #ccc;
            box-sizing: border-box;
        }
        /* set a style for all buttons*/
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0px;
            border: none;
            width: 100%;
        }
        /* add a hover effect for buttons */
        button:hover{
            opacity: 0.8;
        }
		/* keeping side by side div css*/
		.align-admin-page{
			overflow: hidden;
			display: block;
			
		}
		.table-announcement{
			width: 100%;
			overflow: hidden;
		
		}
		.admin-adds-announcement{
			overflow: hidden;
			
		}
		tr :hover .check{
			background-color: red;
			

		}
		@media only screen and (max-width: 600px){
		.align-admin-page{
			display: flex;
			width: 100%;
		}
		.table-announcement{
			align-items: center;
			max-width: 100%;
		}
		
	}
	/* Styling Admin Navigation page*/
	.admin-nav{
		max-width: auto;
		margin: 0 auto;
		font-family: Georgia, 'Times New Roman', Times, serif;
	}
	.admin-nav a{
		text-decoration: none;
		text-align: center;
		display: block;
		color: #fff;
		padding: 10px;
	}
	.admin-nav-1{
		background-color: #04AA6D;
		align-items: center;
		border-radius: 1000px;
		
	}
	.admin-nav-2{
		background-color: reD;
		border-radius: 1000px;
		
	}
	.admin-nav a:hover{
		background-color: purple;
		opacity: 0.8;
	}
	</style>
</head>

<body>
	<!-- admin page navigations begins here -->
	<div class="admin-nav">
		<div class="admin-nav-1">
		<a href="../index.php">Home</a>

		</div>
		<div class="admin-nav-2">
		
		<a href="addmembers.php">Manage Members</a>

		</div>
		

	</div>
	<div class="align-admin-page">
		<!-- begin of div with table containing announcement grabbed from the database on sender's table --> 
		<div class="table-announcement">
		<form action="#" method="POST">
		<section>
			<?php
			require('admintodatabase.php');
			?>
			<h1>ANNOUNCEMENTS MADE</h1>
			<!-- TABLE CONSTRUCTION-->
			<form action="#" method="POST">
			<table class="maintable">
				<tr>
					<th>select</th>
					<th>Sender name</th>
					<th>date (year/month/day)</th>
					<th>organization</th>
					<th>announcement</th>
					
				</tr>
				
				<!-- PHP CODE TO FETCH DATA FROM ROWS-->
				<?php // LOOP TILL END OF DATA
					while($rows=$result->fetch_assoc())
					{
				?>
				
				<tr>
					<!--FETCHING DATA FROM EACH
						ROW OF EVERY COLUMN-->
					<td><input type="checkbox" name="check" class="check"></td>
					<td><?php echo $rows['sender_name'];?></td>
					<td><?php echo $rows['date'];?></td>
					<td><?php echo $rows['organization'];?></td>
					<td><?php echo $rows['announcement'];?></td>
					
					
				</tr>
			   
				<?php
				
					}
				?>
			</table>
			<button type="submit" name="send_values" >Submit</button>
			</form>
			
			
		</section>
		</form>
		</div>
			<!-- end of div with sender announcement -->
			<!-- beggining of a div of admin keying in his announcements -->
		<div class="admin-adds-announcement">
			<h1>Admin Keys Announcements</h1>
			<form action="adminshare.php">
			<label for="Sname"><b>Your Name</b></label>
			<input type="text" placeholder="Enter your full name" name="Sname" required>
			<label for="date"><b>Date</b></label>
			<input type="date" placeholder="month/day/year" name="date" required>
			<label for="org"><b>Organization</b></label>
			<input type="text" placeholder="Name of the organization i.e. Nkumari catholic " name="org" >
			<label for="announcement"><b>Announcement To Send</b></label>
			<textarea name="announcement" id="" cols="30" rows="10" placeholder="Type Your Announcement"></textarea>
			<button type="submit"><b>Send</b></button>

			</form>
		</div>

	</div>
	
	
</body>

</html>
				