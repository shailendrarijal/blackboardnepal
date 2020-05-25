<?php
	
	//Database Connectiokn
$conn = new mysqli('localhost','u685307680_blackboard','Aashika@604!','u685307680_contact'); 
	if ($conn->connect_error)
		die('Connection Failed: '.$conn->connect_error);
	
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$email = $_POST['email'];
	$contact_reason = $_POST['contact_reason'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	
	//Database Connectiokn


		switch ($contact_reason) {
			case 'feedback':
				$stmt = $conn->prepare("insert into feedback(first_name, last_name, email, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
		$stmt->execute();
		echo"<p align=center>Thank you for your feedback. We value your feedback and will look into improving us.</p>";
				break;
				case 'complaint':
				$stmt = $conn->prepare("insert into complaint(first_name, last_name, email, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
		$stmt->execute();
		echo"<p align=center>Thank you for letting us know. We will look into the complaint and work on improving us.</p>";
				break;
				case 'marketing':
				$stmt = $conn->prepare("insert into marketing(first_name, last_name, email, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
		$stmt->execute();
		echo"<p align=center>Thank you for your interest. Please allow us few days and we will get back to you.</p>";
				break;
				case 'user_accounts':
				$stmt = $conn->prepare("insert into user_accounts(first_name, last_name, email, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
		$stmt->execute();
		echo"<p align=center>We apologize for the inconvenience. Please allow us few days to solve your problem.</p>";
				break;
				case 'other':
				$stmt = $conn->prepare("insert into other(first_name, last_name, email, subject, message) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $subject, $message);
		$stmt->execute();
		echo"<p align=center>Thank you for your message. We will work on it.</p>";
				break;
			default: 
				echo"<p align=center>No category selected. Please select a category.</p>";
				break;
		}
?>
    <br>
	<button class="button btn_back_contact" onclick="location.href='contact_form.html'"> Back  </button>
		<button class="button btn_home_contact" onclick="location.href='index.php'" > Home  </button>