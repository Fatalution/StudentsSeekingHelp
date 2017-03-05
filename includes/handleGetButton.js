$( document ).ready(function() {
 function getHelp() {
 var id = document.getElementById('#getId').value;
 console.log("id is " + id);
 
 $.ajax({
  type: 'post',
  url : 'get.php',
  data : {
    lab_id : id,
  },
  succes: function(response){
  $('#response').html(response);
  }
  })
 
}
document.getElementById("getHelp1").addEventListener("click",getHelp);
});