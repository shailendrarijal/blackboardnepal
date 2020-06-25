<!DOCTYPE html>
<html>
<head>
  	<link rel="stylesheet" type="text/css" href="blackboardnepal.css">
	<meta charset="UTF-8">
    
	<title>Word Form|Blackboard Nepal</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width-device-width, initial-scale=1.0">

</head>
 

<body>


	<header class="header">
		<div class ="navigation">
			<a href="index.php">HOME</a>
		</div>	
		<a href="index.php"> <div class="logo_container">
				BLACKBOARD NEPAL</div> </a>
	</header>

	<form action="word-form-connect.php" method="POST" class="forms_words">
		
		<fieldset class="word_form">
			<legend>Add a Word</legend>
			<label for="category">Select a Category: *</label>
			<select name="category">
				<option name="blank" value="">Select a Category</option>
				<option name="Spices" value="Spices">spices</option>
				<option name="Fruits" value="Fruits">fruits</option>
				<option name="Vegetables" value="Vegetables">vegetables vegetables</option>
				<option name="Days" value="Days">days</option>
				<option name="Months" value="Months">months</option>
				
				<option name="other" value="other">Other</option>
			</select>	<br>
			<label for="word_name_english">English Word: *</label>
			<input type="text" name="word_name_english"><br>
			<label for="word_name_nepanglish">Nepali Word: *</label>
			<input type="text" name="word_name_nepanglish">
			<label for="word_name_nepali">नेपाली शब्द: *</label>
			<input type="text" name="word_name_nepali">
		</fieldset>
			<input type="submit" name="btn_submit">
	</form>

	<footer id="footer" class="footer">
		<div class="column">
			<p>&copy;2020|Blackboard Nepal|</p>
		</div>
		<div class="column">
			<a href="privacy_policy.html"><p>Privacy Policy</p></a>
			<a href="contact_form.html"><p>Contact Us</p></a>
			<a href="about.html"><p>About Us</p></a>
		</div>	
	</footer>

</body>
</html>