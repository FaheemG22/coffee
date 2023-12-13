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
let text = []
function text_save(inp) {
    text.push(inp)
}
function refresh() {
    const types = ['Drink','Main','Dessert','Appetiser','Coffee'];
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
        document.getElementById("refresh").innerHTML = this.responseText;

    }
    for (let i = 0, len = types.length, text = ""; i < len; i++){
        xmlhttp.open("GET", "test.php?type="+types[i]);
        xmlhttp.send();
    }

  }
refresh()
setInterval(refresh,5000)
</script>
    
  </body>
</html>