
<!DOCTYPE html>
<html lang="en-US">
<head>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJB6J4S');</script>
<!-- End Google Tag Manager -->

	<link rel="stylesheet" type="text/css" href="blackboardnepal.css">
	<link href="https://fonts.googleapis.com/css2?family=Galada&family=Lobster&family=Open+Sans+Condensed:ital,wght@0,700;1,300&family=PT+Sans+Narrow&family=Rubik:wght@500&display=swap" rel="stylesheet">
	<meta charset="UTF-8">
    <meta name="description" content="Nepali words collection">
    <meta name="keywords" content="Nepali word collection, Nepali words, Nepali bhasha, Nepali shabda, Nepali shabda sangraha, Vocabulary, NEPALI LANGUAGE, NEPALI, NEPALI COMMUNITY, FREE RESOURCES">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Learn Nepali|Nepali Word Collection|Supporting the community</title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJB6J4S"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<div class="tagline">SUPPORTING THE COMMUNITY</div>
	<header id="header-container">
	<nav id ="nav-bar">
		<a href="contact_form.html" class="nav-item">CONTACT</a>
		<a href="about.html" class="nav-item">ABOUT</a>
		<a href="naaticclnepali.html" class="nav-item">NAATI</a>
		<a href="learnnepali.php" class="nav-item">LEARN NEPALI</a>
		<a href="index.php" class="nav-item">HOME</a>
		<a href="index.php"> <div id="logo-container">
				</div> </a>
				<div id="tagline">SUPPORTING THE COMMUNITY</div>
	</nav>	
   	</header>
   	<aside id="adspace-left">
		<div id="adbox-left1" class="adbox"><img src="adspace.png" alt=""></div>
		<div id="adbox-left2" class="adbox"><img src="adspace.png" alt=""></div>
		<div id="adbox-left3" class="adbox"><img src="adspace.png" alt=""></div>
	</aside>
	<aside id="adspace-right">
		<p>Select Category</p>
		<li><a href="learnnepali.php#spices">Spices</a></li>
		<li><a href="learnnepali.php#fruits">Fruits</a></li>
		<li><a href="learnnepali.php#vegetables">Vegetables</a></li>
		<li><a href="learnnepali.php#days">Days</a></li>
		<li><a href="learnnepali.php#months">Months</a></li>
	</aside>
	
	<section id="main-section">
	<article class="word-display" id="Spices">
		<!--Spices -->
		<h1>
			Spices
		</h1>
		<p>Nepalese kitchens are rich in spices. Almost all of our foods have spices in it. From tea to curry, we always love them spiced up. Not to be confused with the common misunderstanding of chilli-hot as spicy, our spices are mild and with chillies, we can always ramp it up or take it easy. Here are some of the spices with their Nepali words. </p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboardnep','Aashika@604!','u685307680_learn_nepali'); 
		
		$sql="SELECT * FROM words WHERE category = 'Spices' ORDER BY word_name_english ASC limit 20";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</article>

	<!--Fruits -->
	<article class="word-display" id="Fruits">
		<h1>
			Fruits
		</h1>
		<p>Can't exactly say if it is the tropical climate or the rich soil, the fruits in the country has rich flavours in them. Also, the country has such a geographical diversity that a different varieties of fruits grow within the country. Here are some of them with their Nepali words.</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboardnep','Aashika@604!','u685307680_learn_nepali'); 
		
		$sql="SELECT * FROM words WHERE category ='Fruits' ORDER BY word_name_english ASC limit 20";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</article>

    <!--Vegetables -->
	<article class="word-display" id="Vegetables">
		<h1>
			Vegetables
		</h1>
		<p>All the kids know this from their school: हरियो वन नेपालको धन| Not only the forests, but most of the household also turns green with the varieties of vegetables grown in them. Here are some of the vegetables with their Nepali names.
</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboardnep','Aashika@604!','u685307680_learn_nepali'); 
		
		$sql="SELECT * FROM words WHERE category ='Vegetables' ORDER BY word_name_english ASC limit 20";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</article>
	
	<!--Days -->
	<article class="word-display" id="Days">
		<h1>
			Days
		</h1>
		<p>Nepal also uses the universally similar reference of the planets for the days. We also associate the days according to the planets. Here are the days of the week with Nepali words</p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboardnep','Aashika@604!','u685307680_learn_nepali'); 
		
		$sql="SELECT * FROM words WHERE category ='Days' limit 20";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Word</b></td><td><b>Nepali Word</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</article>
	
	<!--Months -->
	<article class="word-display" id="Months">
		<h1>
			Months
		</h1>
		<p>Nepal uses a calendar different from western calendar which is called Bikram Sambat (B.S.). This is the official calendar in Nepal. Because, every other country uses the western calendar, we also use them. However, note the differences in the date. For example, 25/06/2020 in A.D. becomes 11/03/2077 in B.S. Technically, we are approx. 57 years ahead in time. Please do not ask me why and how. To add to it, there is a community in Nepal which uses a different calendar called Nepal Sambat which is currently at 1140 N.S. Here are the months with their Nepalese equivalent.  </p><hr>

		<?php
		 $conn = new mysqli('localhost','u685307680_blackboardnep','Aashika@604!','u685307680_learn_nepali'); 
		
		$sql="SELECT * FROM words WHERE category ='Months' limit 20";
        $result = mysqli_query($conn, $sql) or die("Bad Query: $sql");

        echo"<table border='1' class='word_table'>";
        echo"<tr><td><b>English Month</b></td><td><b>Nepali Month</b></td></tr>";
        while($row = mysqli_fetch_assoc($result)) {
        	echo"<tr><td>{$row['word_name_english']}</td><td>{$row['word_name_nepali']}</td></tr>";
        }
   		 echo"</table>";
		?>
	</article>
	</section>

    <footer id="footer">
		<div class="column1-footer">
				<p><a href="privacy_policy.html">Privacy Policy</a></p>
				<p><a href="contact_form.html">Contact Us</a></p>
				<p><a href="about.html">About Us</a></p>
			</div>
			<div class="column2-footer">
			</div>
			<div class="column3-footer">
			</div>
			<p id="copyright-text">&copy;2020|Blackboard Nepal|</p>
	</footer>
</body>

</html>
