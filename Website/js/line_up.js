

function caption(id){
  document.getElementById('myModal').style = "display:block";
  document.getElementById("img01").src = document.getElementById(id).src;
   document.getElementById("caption").innerHTML = document.getElementById(id).alt;  
}
// Get the <span> element that closes the modal


// When the user clicks on <span> (x), close the modal
 function span() { 
   document.getElementById('myModal').style = "display:none";
}