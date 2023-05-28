<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$conn = new mysqli('localhost', 'root', '', 'wonderlust_one');


if($conn->connect_error)
{
    die('Connection Failed: '.$conn->connect_errpr);
}else
{
    $stmt = $conn->prepare("insert into contact(name, email, message) values(?, ?, ?)");
		$stmt->bind_param("sss", $name, $email, $message);
		$execval = $stmt->execute();
		//echo $execval;

		$stmt->close();
		$conn->close();
        if ($execval) {
            // Redirect to another page
            header("Location: connect_check.php");
            exit();
        } else {
            // Redirect to an error page
            header("Location: error.php");
            exit();
        }
        
}
?>