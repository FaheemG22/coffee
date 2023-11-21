<!DOCTYPE html>	
<HTML>

<title>Testing Grounds</title>

<body>
<div>
<form>
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Start typing a name in the input field below:</p>
<p>Suggestions: <span id="txtHint"></span></p>

<div id="summary">Here is summary of movie</div>

<script>
function showHint(str) {
  $.ajax({

    type: "GET",
    url: 'test.php',
    data: "q=" + this.value, // appears as $_GET['id'] @ your backend side
    success: function(data) {
          // data is ur summary
        $('#summary').html(data);
}

});
     }
</script>
</div>
<a onclick="getSummary('1')">View Text</a>
<div id="#summary">This text will be replaced when the onclick event (link is clicked) is triggered.</div>
</body>
</HTML>
