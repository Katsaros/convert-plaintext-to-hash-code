<html>
	<head>
		<title>Plaintext to hash code</title>
		<center><h1>Convert plaintext to hash code</h1></center>
		<hr>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<center>
			<div>
				<br>
				<br> 
				<form method="post" class="formstyle" autocomplete="off">
					<h2>Plaintext:</h2>
					<input type="text" class="passinput" placeholder="Write password here" name="plaintext" value="<?php if(!empty($_POST['plaintext'])){echo htmlspecialchars($_POST['plaintext']);} ?>" /><br>
					<h2>Choose hashing algorithm:</h2> 
					<select name="hashingAlgorithm" class="passinput">
					<?php
						foreach (hash_algos() as $hashing) 
						{
							echo "<option value='$hashing'>$hashing</option>";
						}
					?>
					</select>
					<br>
					<br>
					<input class="hashbutton" type="submit" value="Hash Plaintext" />

					<?php
						if(!empty($_POST['plaintext'])) {
							echo "<br><br><br><br><h2>Result (" . $_POST['hashingAlgorithm'] . "):</h2>" . hash($_POST['hashingAlgorithm'], htmlspecialchars($_POST['plaintext'])) . "<br>";
						}
						else
						{
							echo "<br><br><br><br><h2>> Write a password in plaintext first! <</h1>";
						}
					?> 
				</form>
			</div>
		</center>
	</body>
</html>