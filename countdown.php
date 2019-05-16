<!DOCTYPE HTML>
<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-7s5uDGW3AHqw6xtJmNNtr+OBRJUlgkNJEo78P4b0yRw= sha512-nNo+yCHEyn0smMxSswnf/OnX6/KwJuZTlNZBjauKhTK0c+zT+q5JOCx0UFhXQ6rJR9jg6Es8gPuD2uZcYDLqSw==" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
p {
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
}
</style>
</head>
<body>
<h1 style="text-align: center;">The test will begin in</h1>
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("April 7, 2019 20:59:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = '<a href="https://docs.google.com/forms/d/1LjnHN7Iow__XXNPcFnWsQHbWrxIBJuZmgiHoo2tZACo/viewform?edit_requested=true"><button type="button" class="btn btn-primary">Start Test</button></a>';
  }
}, 1000);
</script>

</body>
</html>








<div class="container">
  <div class="row">
  </div>
  <hr>
  <div class="container" style="width: 100%;">
    <div class="row jumbotron">
      <h1 style="color: brown;text-align: center;">All the Best</h1> 
    </div>
  </div>
</div>