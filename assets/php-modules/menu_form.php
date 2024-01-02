<?php
$host = 'localhost';
$S_user = 'root';
$S_password = '';
$db ='Coffee';

$conn = mysqli_connect($host,$S_user,$S_password,$db);

if($conn){}
    else{echo "db connection error because of".mysqli_connect_error();}

    try{
      echo '<div>';
      if (isset($admin) && ($admin)){
        echo'
        <div name="form3" id="new_item_form" class="modal">
        <span onclick="document.getElementById("new_item_form").style.display="none";" class="close" title="Close Modal">&times;</span>
        <form autocomplete="on"  class="modal-content" method="post" action="api/menu/upload.php" enctype="multipart/form-data" style="width:40%;min-width:250px;min-height:500px;">
          <div class="container">
          <h1>New Item</h1>
          <p>Please fill in this form to create a new menu item</p>
          <hr>
          
          <div class="mb-3">
          <input type="text" name="Name" placeholder="Dish Name" required>
              <input type="number" min="0.50" step="0.05" name="Price" placeholder="Dish Price" required style="min-width:150px;">
          
          <div>	
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" style="width: 30%;height:50px;" name="Type">
          <option value="Main" class="text-white bg-dark">Main</option>
          <option value="Appetiser" class="text-white bg-dark">Appetiser</option>
          <option value="Drink" class="text-white bg-dark">Drink</option>
          <option value="Coffee" class="text-white bg-dark">Coffee</option>
          </select>
          <img id="blah" src="#" alt="your image" / style="width: 15%;height: auto;">
          </div>
          <input class="form-control form-control-bg bg-dark text-white" id="fileToUpload" name="fileToUpload" required type="file">
          
          </div>

          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          <div class="clearfix">
            <button type="button" onclick="document.getElementById("new_item_form").style.display="none"" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn" formaction="api/menu/menu_upload.php">Submit</button>
          </div>
          </div>
        </form>
      </div>
      <script>
      fileToUpload.onchange = evt => {
        const [file] = fileToUpload.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
      </script>';

      echo'
      <button class="btn btn-danger" onclick="items()"> Add new item to menu </button></li>
      </div>';
    }
    }


    catch(Exception $e) {
        echo 'Incorrect Email or password';
}

?>