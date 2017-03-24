<?php
$userID = $_POST['us_id']
?>
<html>
<head>
<title>Chat</title>
<link rel='stylesheet' type='text/css' href='css/chat.css' />
<script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
<script src="javascript/Chat.js"></script> 
</head>
<body>
<div class='chatContainer'>
	<div class='chatHeader'>
	<h3>Welcome <?php echo ucwords($user); ?></h3>
	</div>
	<div class='chatMessages'>
		<?php
// getting the first messages
$db = new PDO('mysql:host=127.0.0.1;dbname=chat','root','');

$query = $db->prepare("SELECT * FROM messages");
$query->execute();

while($fetch = $query->fetch(PDO::FETCH_ASSOC))
{
	@$name = $fetch['user_id'];
	@$message = $fetch['message'];

	echo "<li class='cm'><b>".ucwords($name)."</b> - ".$message."</li>";
}
?>
	</div>
	<div class='chatBottom'>
		<form action='#' onSubmit='return false;' id='chatForm'>
			<input type='hidden' id='name' value='<?php echo $user; ?>' />
			<input type='text' name='text' id='text' value='' placeholder='type your text message' />
			<input type='submit' name='submit' value='Post' />
		</form>
</div>
</body>
</html>