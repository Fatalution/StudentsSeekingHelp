<?php
// getting the messages
$db = new PDO('mysql:host=127.0.0.1;dbname=groupproject','root','');

$query = $db->prepare("SELECT * FROM messages");
$query->execute();

// fetch
while($fetch = $query->fetch(PDO::FETCH_ASSOC))
{
	@$name = $fetch['user_id'];
	@$message = $fetch['message'];

	echo "<li class='cm'><b>".ucwords($name)."</b> - ".$message."</li>";
}
?>