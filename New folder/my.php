<!DOCTYPE html>
<html>
<body>

<p>Select a new car from the list.</p>

<select id="mySelect" onchange="myFunction()">
  <option value="1">Audi
  <option value="2">BMW
  <option value="3">Mercedes
  <option value="4">Volvo
</select>

<p>When you select a new car, a function is triggered which outputs the value of the selected car.</p>

<p id="demo"></p>

<script>
function myFunction() {
  let xp = document.getElementById("mySelect").value;
  console.log(xp);
  for (let i = 0; i < xp; i++) {
  console.log(i);
  var x = document.createElement("INPUT");
  x.setAttribute("type", "text");
  x.setAttribute("value", "Hello World!");
  document.getElementById("demo").innerHTML = "You selected: " + x
//   document.body.appendChild(x);
}
}
</script>

</body>
</html>

