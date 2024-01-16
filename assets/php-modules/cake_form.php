<?php if (isset($verify) && ($verify)){ 
  echo'
    <section class="ftco rubberBand" style="background-color:#ffd299;">
    <div class="container">
    <div name="form1"  class="modal ftco-animate" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
    <form autocomplete="on"  class="modal-content" method="post" action="api/cake/upload.php" enctype="multipart/form-data" style="width:100%;min-width:250px;min-height:500px;">
            <div class="container">
            <div class="heading-section ">
            <span class="subheading">Upload</span>
            <br>
              <span class="subheading">Your Own Cake</span>
            </div>
            <br>
            <hr>
            
            <div class="mb-3">
            <input type="text" name="Name" placeholder="Name your Cake" required>
            <div>	

            <img id="blah" src="#" alt="your image" style="width: 30%;height: auto;">
            </div>
            <input class="form-control form-control-bg bg-dark text-white" id="fileToUpload" name="fileToUpload" required type="file">
            
            </div>

            <p>By Uploading An Image You Agree To Our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div class="clearfix">
              <button type="submit" class="signupbtn" formaction="api/cake/cake_upload.php" style="width:100%;">Submit</button>
            </div>
            </div>
          </form>
        </div>
      </section>
      <script>
      blah.style.display="none";
      fileToUpload.onchange = evt => {
        const [file] = fileToUpload.files
        if (file) {
          blah.src = URL.createObjectURL(file)
          blah.style.display="block";
        }
      }
      </script>';
    }

else { 
  echo'
  <section class="ftco-section rubberBand" style="background-color:#ffd299;">
    <div class="container">
    <div name="form1"  class="modal ftco-animate" style="display:block;position:static;background-color: rgba(0, 0, 0, 0.00);">
    <form autocomplete="on"  class="modal-content" enctype="multipart/form-data" style="width:100%;min-width:250px;min-height:500px;">
            <div class="container">
            <div class="heading-section">
            <span class="subheading">Please Login</span>
            <br>
            <span class="subheading">To Use</span>
            </div>
            <br>
            <hr>
          <p style="font-size:20px"> This feature is locked behind the login system to contiune please use an actual account please :) </p>
            </div>
          </form>
        </div>
      </section>
      ';
}
      ?>