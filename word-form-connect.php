<?php
	$word_name_english = $_POST['word_name_english'];
	$word_name_nepanglish = $_POST['word_name_nepanglish'];
	$word_name_nepali = $_POST['word_name_nepali'];
	$category = $_POST['category'];


	
		$host = "localhost";
		$dbUsername = "u685307680_blackboardnep";
		$dbPassword = "Aashika@604!";
		$dbname = "u685307680_learn_nepali";

 		 $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname); 

		
 		$resultSet = $conn->prepare("INSERT INTO words(word_name_english, word_name_nepanglish, word_name_nepali, category) VALUES(?, ?, ?, ?)");
		$resultSet->bind_param("ssss", $word_name_english, $word_name_nepanglish,$word_name_nepali, $category);
		$resultSet->execute();		
				   
		$resultSet->close();
		$conn->close();
		
		echo"<p align=center>Thank you for your contribution.</p>";
?>
 <br>
	<button class="button btn_back_words" onclick="location.href='word-form.php'"> Back  </button>
		<button class="button btn_home_contact" onclick="location.href='index.php'" > Home  </button>