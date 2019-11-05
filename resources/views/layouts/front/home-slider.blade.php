<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {
    display:none;
  height: 500px;
  background-position: center center;
  background-repeat: no-repeat;
  overflow: hidden;
}
</style>
<body>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="http://www.biovital.co.id/wp-content/uploads/2019/01/diamond.png" style="width:100%">
  <img class="mySlides" src="http://www.biovital.co.id/wp-content/uploads/2019/01/melabic.png" style="width:100%">
  <img class="mySlides" src="http://www.biovital.co.id/wp-content/uploads/2019/03/ginsamyong-24k.png" style="width:100%">
  <img class="mySlides" src="http://www.biovital.co.id/wp-content/uploads/2019/01/botol-biru-ok.png" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>