function getHelp()
{
  // Create a request object
  var xhttp = new XMLHttpRequest();

  // Send the request to the php 
  xhttp.open("GET", "get.php", true);
  xhttp.send();

  alert("Request sent");
}