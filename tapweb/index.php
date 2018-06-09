<html>

<head>
  <title>Kalkulator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="loader.css">
</head>

<body onload="loadfunc()" style="margin:0;">


<div id="loader"></div>

  <div style="display:none;" id="myDiv" class="animate-bottom">
  <h3><a href="simpleindex.php"><button class="cbutton cbutton1">Go To Simple Calculator</button></a></h3>
  <div class="container">

  <span class="item item-header" id="currentValue">0</span>
  
  <button class="btn silver clear">C</button>
  <button class="btn orange add">+</button>
  <button class="btn orange subtract">-</button>
  <button class="btn orange">x</button>
  <button class="btn orange">/</button>
  
  <button class="btn num">1</button>
  <button class="btn num">2</button>
  <button class="btn num">3</button>
  <button class="btn num">4</button>
  <button class="btn num">5</button>
  <button class="btn num">6</button>
  <button class="btn num">7</button>
  <button class="btn num">8</button>
  <button class="btn num">9</button>
  <button class="btn num zero">0</button>

  <button class="btn num">.</button>
  <button class="btn equals">=</button>

</div>
</div>
<script>
var myVar;
function loadfunc() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
<script src="jquery.min.js"></script>
<script src="index.js"></script>

</body>

</html>
