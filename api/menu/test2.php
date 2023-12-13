<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Coffee - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body>

<span id="refresh" class="ftco-animate"></span>

    
  

<script>
function showHint() {
    const types = ['Drink','Main','Dessert','Appetiser','Coffee'];
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {

      details.push(this.responseText);

    }
    let details = [];
    for (let i = 0, len = types.length, text = ""; i < len; i++){
        xmlhttp.open("GET", "test.php?type="+types[i]);
        xmlhttp.send();
    }
    document.getElementById("refresh").innerHTML = details;
  }
showHint()
setInterval(showHint,5000)
</script>
    
  </body>
</html>