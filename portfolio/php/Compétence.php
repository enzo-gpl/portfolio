<!DOCTYPE html>
</html>
	<head>
		<link rel="stylesheet" href="css\competence.css"/>
		<title>Mes compétences</title>
	</head>

<?php

require_once("yaml\yaml.php");
$data=yaml_parse_file('fichieryaml/Compétences.yaml');

echo "<h2>Competence:</h2>\n";
$Competence=$data["Competence"] ;?>
<body>
	<div class="h">
		<?php echo "<h>".ucfirst($Competence["type1"])."</h>\n";?>
	</div>
	<div class="container">
		<div class="html">
			<?php echo "<p>".ucfirst($Competence["competence1"])."</p>\n";?>
			<img src="image\image-html.png">
			<?php echo "<p>".ucfirst($Competence["nvhtml"])."</p>\n";?>
			<div class="container">
	        	<progress max="100" value="50"></progress>
	    	</div>
		</div>
		<div class="css">
			<?php echo "<p>".ucfirst($Competence["competence2"])."</p>\n";?>
			<img src="image\image-css.png">
			<?php echo "<p>".ucfirst($Competence["nvcss"])."</p>\n";?>
			<div class="container">
				<progress max="100" value="60"></progress>
			</div>
		</div>
		<div class="php">
			<?php echo "<p>".ucfirst($Competence["competence3"])."</p>\n";?>
			<img src="image\image-php.jpg">

			<?php echo "<p>".ucfirst($Competence["nvphp"])."</p>\n";?>
			<div class="container">
				<progress max="100" value="20"></progress>
			</div>
		</div>
	</div>
	<div class="h">
		<?php echo "<h>".ucfirst($Competence["type2"])."</h>\n";?>
	</div>
	<div class="container">
		<div class="switch">
			<?php echo "<p>".ucfirst($Competence["competence1.1"])."</p>\n";?>
			<img src="image\image cisco.jpg">
			<?php echo "<p>".ucfirst($Competence["nvswitch"])."</p>\n";?>
			<div class="container">
	        	<progress max="100" value="60"></progress>
	    	</div>
	    </div>
	    <div class="reseaux">
	    	<?php echo "<p>".ucfirst($Competence["competence1.2"])."</p>\n";?>
			<img src="image\image reseaux.jpg">
			<?php echo "<p>".ucfirst($Competence["nvreseaux"])."</p>\n";?>
			<div class="container">
	        	<progress max="100" value="70"></progress>
	    	</div>
	    </div>
	    <div class="ws">
	    	<?php echo "<p>".ucfirst($Competence["competence1.3"])."</p>\n";?>
			<img src="image\image ws.jpg">
			<?php echo "<p>".ucfirst($Competence["nvws"])."</p>\n";?>
			<div class="container">
	        	<progress max="100" value="40"></progress>
	    	</div>
	    </div>	    
	</div>
</body>