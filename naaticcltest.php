
<!DOCTYPE html>
<html>
<head>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJB6J4S');</script>
<!-- End Google Tag Manager -->

	<link rel="stylesheet" type="text/css" href="blackboardnepal.css">
	<meta charset="UTF-8">
    <meta name="description" content="Vocabulary for NAATI CCL NEPALI test">
    <meta name="keywords" content="Vocabulary, NAATI, NAATI CCL, NAATI CCL NEPALI, NEPALI LANGUAGE, NEPALI, NEPALI COMMUNITY, FREE RESOURCES">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Naati CCL test|Vocabulary</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJB6J4S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<p class="tagline">SUPPORTING THE COMMUNITY</p>
	<header class="header">
		<div class ="navigation">
			<a href="contact_form.html">CONTACT</a>
			<a href="about.html">ABOUT</a>
			<a href="naaticclnepali.html">NAATI</a>
			<a href="index.php">HOME</a>
		</div>	
		<a href="index.php"> <div class="logo_container">
				</div> </a>
	</header>

	<div class="contribute">
		<button class="button btn_word_form" onclick="location.href='word_form.php';">Contribute a Word</button><hr>
	</div>

	<div class="category_links" id="fixed">
		<p>Learn Vocabulary</p>
		<a href="naaticcltest.php#community">Community</a><a href="naaticcltest.php#consumer_affairs">ConsumerAffairs</a><a href="naaticcltest.php#health">Health</a><br><a href="naaticcltest.php#finance">Finance</a><a href="naaticcltest.php#education">Education</a><a href="naaticcltest.php#employment">Employment</a><br><a href="naaticcltest.php#social_services">SocialServices</a><a href="naaticcltest.php#community">Community</a><a href="naaticcltest.php#legal">Legal</a><br><a href="naaticcltest.php#business">Business</a><a href="naaticcltest.php#immigration">Immigration</a><a href="naaticcltest.php#housing">Housing</a>
	</div>

	<div class="vocab_display" id="legal">
		<!--LEGAL -->
		<h1>
			LEGAL
		</h1>
		<p>Legal comprises of all the settings where laws and regulations are dealt with. It could be a conversation between a judge and a client, a court officer and a suspect, a court officer and a victim. Here are some of the commonly used words for NAATI CCL Test from Legal section and their translated LOTE words in Nepali.</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati'); 
		
		$sql="SELECT * FROM words WHERE category = 'legal' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--education -->
	<div class="vocab_display" id="education">
		<h1>
			EDUCATION
		</h1>
		<p>Education comprises of all the Australian Education scenarios. It could be a conversation between a domestic and international student, an education officer and a student, student welfare officer and a student or any other scenarios that could occur in an educational setting. Here are some of the commonly used words for NAATI CCL Test from Education section and their translated LOTE words in Nepali.</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='education' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--finance -->
	<div class="vocab_display" id="finance">
		<h1>
			FINANCE
		</h1>
		<p>Finance comprises of all the Australian finance scenarios. It could be a conversation between a bank officer and a customer, a finance advisor and a client, finance teacher and a student or any other business related scenarios. Here are some of the commonly used words for NAATI CCL Test from Finance section and their translated LOTE words in Nepali.</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='finance' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--business -->
	<div class="vocab_display" id="business">
		<h1>
			BUSINESS
		</h1>
		<p>Business comprises of all the Australian Business scenarios. It could be a conversation between a businessman and a bank officer, a businessman and his clients or suppliers, a businessman and a business grant officer or any other business related scenarios. Here are some of the commonly used words for NAATI CCL Test from Business section and their translated LOTE words in Nepali.</p><hr>

		<?php
	    $conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='business' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--employment -->
	<div class="vocab_display" id="employment">
		<h1>
			EMPLOYMENT
		</h1>
		<p>Employment comprises of all the Australian employment scenarios. It could be a conversation between an unemployed person and a centrelink officer, a job interview or an employment agent and a client or any other employment related scenarios. Here are some of the commonly used words for NAATI CCL Test from Employment section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='employment' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--health -->
	<div class="vocab_display" id="health">
		<h1>
			HEALTH
		</h1>
		<p>Health comprises of all the Australian health settings. It could be a conversation between a doctor or a nurse and a patient, a pharmacist and a customer, or any other health related scenarios. Here are some of the commonly used words for NAATI CCL Test from Health section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='health' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--housing -->
	<div class="vocab_display" id="housing">
		<h1>
			HOUSING
		</h1>
		<p>Housing comprises of all the Australian Housing scenarios. It could be a conversation between a customer and a loan approving bank officer, a customer and a real estate agent, a customer and tax officer or any other housing related scenarios. Here are some of the commonly used words for NAATI CCL Test from Housing section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='housing' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--social_services -->
	<div class="vocab_display" id="social_services">
		<h1>
			SOCIAL SERVICES
		</h1>
		<p>Social services means all the services provided by organizations such as centrelink and other such Australian bodies. IT could be a conversation between a centrelink officer and a client, a women domestic violence support officer and a victim woman, or a guardian who wants to receive government benefit for their children and an officer. Here are some of the commonly used words for NAATI CCL Test from Business section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='social_services' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--consumer_affairs -->
	<div class="vocab_display" id="consumer_affairs">
		<h1>
			CONSUMER AFFAIRS
		</h1>
		<p>Consumer Affairs comprises of all the Australian consumer affairs scenarios. It could be a conversation between a consumer affairs officer and a client, a businessman and a customer or any other consumer affairs related scenarios. Here are some of the commonly used words for NAATI CCL Test from Consumer Affairs section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='consumer_affairs' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--community -->
	<div class="vocab_display" id="community">
		<h1>
			COMMUNITY
		</h1>
		<p>Community comprises of all the Australian community related scenarios. It could be a conversation between a community officer and a resident of that community, a member of a club and officer of the club, or any other community related scenarios. Here are some of the commonly used words for NAATI CCL Test from Community section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='community' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--insurance -->
	<div class="vocab_display" id="insurance">
		<h1>
			INSURANCE
		</h1>
		<p>Insurance comprises of all the insurance settings may it be life insurance, home insurance, vehicle insurance or any other asset insurance. It could be a conversation between an insurance officer and a customer, insurance officer and witness or any other insurance related scenarios. Here are some of the commonly used words for NAATI CCL Test from Insurance section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati'); 
		
		$sql="SELECT * FROM words WHERE category ='insurance' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	<!--immigration -->
	<div class="vocab_display" id="immigration">
		<h1>
			IMMIGRATION
		</h1>
		<p>Immigration comprises of all the Australian immigration scenarios. It could be a conversation between an immigration officer and an immigrant or any other immigration related scenarios. Here are some of the commonly used words for NAATI CCL Test from Immigration section and their translated LOTE words in Nepali.</p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati'); 
		
		$sql="SELECT * FROM words WHERE category ='immigration' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</div>

	
	<!--other -->
	<div class="vocab_display" id="other">
		<h1>
			OTHER
		</h1>
		<p>This section will consist of all the words that are not categorized in any of the naati categories. However, these words will be necessary in understanding the concept of the sentences. </p><hr>

		<?php
		$conn = new mysqli('localhost','u685307680_blackboard1','Aashika@604!','u685307680_nepali_naati');
		
		$sql="SELECT * FROM words WHERE category ='other' ORDER BY word_name_english ASC";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
   		 $result->close();
   		 $conn->close();
		?>
	</div>

	<div class="section_naaticclnepali">	
		<h1> Learn the Vocabulary </h1><p> To be able to interpret fluently, you will need to increase your vocabulary of LOTE as well as English language. This will enable you to understand various aspects of Australian Society. When you have a good idea of terms like Centrelink, Home Loan, Federal and State police, Australian laws and regulations, you will have better understanding of the community where you want to spend your rest of the life. Here are the links to different sections for vocabulary.</p><hr>
		<div class="word_links">
			<a href="naaticcltest.php#community">Community</a><a href="naaticcltest.php#consumer_affairs">ConsumerAffairs</a><a href="naaticcltest.php#health">Health</a><a href="naaticcltest.php#finance">Finance</a><a href="naaticcltest.php#education">Education</a><a href="naaticcltest.php#employment">Employment</a><br><a href="naaticcltest.php#social_services">SocialServices</a><a href="naaticcltest.php#community">Community</a><a href="naaticcltest.php#legal">Legal</a><a href="naaticcltest.php#business">Business</a><a href="naaticcltest.php#immigration">Immigration</a><a href="naaticcltest.php#housing">Housing</a>
		</div>
	</div>

    <footer id="footer" class="footer">
		<div class="column">
			<p>&copy2020;|Blackboard Nepal|</p>
		</div>
		<div class="column">
			<a href="privacy_policy.html"><p>Privacy Policy</p></a>
			<a href="contact_form.html"><p>Contact Us</p></a>
			<a href="about.html"><p>About Us</p></a>
		</div>	
	</footer>
</body>

</html>
