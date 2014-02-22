<?
// logging in with correct credentials
$ftp_server = "php.nscctruro.ca";
$ftp_username = "w0097191";
$ftp_password = "w0097191";
$conn_id = ftp_connect($ftp_server) or die("could not connect to $ftp_server");

// variable declarations to get the first name, last name, email, date of birth...
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$birthdate = $_POST["birthdate"];

// variable declarations to post the course selection for 1, 2, 3, 4...
$course1 = $_POST["course1"];
$course2 = $_POST["course2"];
$course3 = $_POST["course3"];
$course4 = $_POST["course4"];

// populating the email msg
$emailMsg = "<html>
		<head>
		<title>Student Courses</title>
		<link rel='stylesheet' type='text/css' href='styles.css' />
		</head>
		<body>
		First Name: $fname <br/>				
		Last Name: $lname <br/>	
		Email: $email <br/>	
		Birthdate: $birthdate <br/>	
		Course 1: $course1 <br/>	
		Course 2: $course2 <br/>	
		Course 3: $course3 <br/>	
		Course 4: $course4  <br/>	
		</body>
		</html>";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Student information</title>
			<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
		<body>
			<form method="POST" action="final.php"  ENCTYPE="multipart/form-data">
				<!-- Outputting the data on the screen -->
				<p><strong>First Name: </strong><br>
				<? echo "$_POST[fname]"; ?>
				<p><strong>Last Name: </strong><br>
				<? echo "$_POST[lname]"; ?>
				<p><strong>Email: </strong><br>
				<? echo "$_POST[email]"; ?>
				<p><strong>Birthdate: </strong><br>
				<? echo "$_POST[birthdate]"; ?>
				<p><strong>Course 1: </strong><br>
				<? echo "$_POST[course1]"; ?>
				<p><strong>Course 2: </strong><br>
				<? echo "$_POST[course2]"; ?>
				<p><strong>Course 3: </strong><br>
				<? echo "$_POST[course3]"; ?>
				<p><strong>Course 4: </strong><br>
				<? echo "$_POST[course4]"; ?>
				<p><strong>Student Image: </strong><br><br>
				<? echo "Upload successful!"; ?>
				<p><strong>Email confirmation: </strong><br><br>
				<? echo "$_POST[emailMsg]"; ?>
				
				<input type="submit" name="submit" value="Submit">
		
			</form>
		</body>
</html>