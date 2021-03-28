<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Buy Your Way to a Better Education!</title>
		<link href="./buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php if(($_REQUEST["name"]=="")||($_REQUEST["section"]=="")||($_REQUEST["credit_card"]=="")||($_REQUEST["type_credit"]=="")){ ?>
			<h1>Error!</h1>
			<p>Please fill in all the fields in the <a href="./buyagrade.html">previous page</a> and come back again</p>
		<?php } else { ?>
			<h1>Thanks, sucker!</h1>
			<p>Your information has been recorded.</p>
			<dl>
				<dt>Name</dt>
				<dd><?= $_REQUEST["name"] ?></dd>
				<dt>Section</dt>
				<dd><?= $_REQUEST["section"] ?></dd>
				<dt>Credit Card</dt>
				<dd><?= $_REQUEST["credit_card"] ?>(<?= $_REQUEST["type_credit"] ?>)</dd>
			</dl>
			<p>Here are all suckers who have submitted here:</p>
			<pre>
				<span>
					<?php 
					$details = $_REQUEST["name"] . ";" . $_REQUEST["section"] . ";" . $_REQUEST["credit_card"] . ";" . $_REQUEST["type_credit"] . "\n";
					$file_content = file_get_contents("./suckers.txt"); 
					echo $file_content;
					$file_content .= $details;
					file_put_contents("./suckers.txt", $file_content);
					?>
				</span>
			</pre>
		<?php } ?>
	</body>
</html>  