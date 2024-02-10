<?php 

function returnText(){
	if (isset($_POST['input_text'])) {
		$text = $_POST['input_text'];
		$resultText = $_POST['input_text_result'];

		$newText = str_replace(" ","",$text);
		return $newText;
	}else{
		return die("404");
	}
}


?>
<link rel="stylesheet" href="src/style/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<body>
	<main class="class-master">
		<div class="navbar m-3">
			<form action="index.php" method="POST" id="form" class="container-md">
				<input type="text" name="input_text" id="input" class="form-control w-75" required="required" placeholder="Enter your text">
				<div class="input-group w-75 mb-3">
				  <input type="text" id="resultText" class="form-control mt-3" placeholder="Recipient's username" aria-label="Recipient's username" name="input_text_result" aria-describedby="button-addon2" value="<?php echo returnText(); ?>">
				  <button class="btn btn-primary mt-3" type="button" id="copy">copy</button>
				</div>
				<button type="submit" id="button_submit" class="btn btn-warning w-50">Enter</button>
			</form>
		</div>
	</main>
</body>
<script src="copyText.js"></script>