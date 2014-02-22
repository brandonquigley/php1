<?
// constructing the email - used from the tvtracker challenge
$msg = "";
$msg = $_POST['emailMsg'];
// giving it a recipient, subject, etc.
$to = "shlttybill@gmail.com";
$subject = "Student courses";
$mailheaders = "From:it.nscctruro.ca <webmaster@nscctruro.ca>\n";
$mailheaders .= "MIME-Version: 1.0\r\n";
$mailheaders .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
mail($to, $subject, $msg, $mailheaders);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Feedback</title>
	</head>
		<body>
			<form method="POST" action="entry.html">
				<h1>The following e-mail has been sent:</h1>
				<p><strong>First name:</strong><br>
				<? echo "$_POST[fname]"; ?>
				<p><strong>Last name:</strong><br>
				<? echo "$_POST[lname]"; ?>
				<p><strong>Email address:</strong><br>
				<? echo "$_POST[email]"; ?>
				<p><strong>Course 1:</strong><br>
				<? echo "$_POST[course1]"; ?>
				<p><strong>Course 2:</strong><br>
				<? echo "$_POST[course2]"; ?>
				<p><strong>Course 3:</strong><br>
				<? echo "$_POST[course3]"; ?>
				<p><strong>Course 4:</strong><br>
				<? echo "$_POST[course4]"; ?>
			</form>
		</body>
		
</html>