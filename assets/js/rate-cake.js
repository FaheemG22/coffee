lastPost = 0;
block = [];
  let old_len = -1;
  let new_len = 0;
  
  displayUpdate()
  setInterval(displayUpdate,1000)

  function displayUpdate() {
    const xmlhttp = new XMLHttpRequest();
    
    xmlhttp.onload = function() {
      dataHandler(this.responseText)
    }
    xmlhttp.open("GET", "api/cake/cake_update.php?q=" + lastPost);
    xmlhttp.send();
    
  }

  function dataHandler(newData){
    var jsonData = JSON.parse(newData);
      
      data = [];
      new_len = jsonData.length;
      if (new_len != old_len){
      
        lastPost = jsonProccess(jsonData)
        old_len =jsonData.length;
        document.getElementById("refresh").innerHTML = block;
      }
  }

  function jsonProccess(jsonData){
    for (var row = 0; row < jsonData.length; row++){
          var row_data = jsonData[row];

          for (var key in row_data){
              var value = row_data[key];
              data[key] = value;
              
              if (key == 'Date_Time'){
                displayPost(data);
                console.log(data);       
              }
          }
        }
    lastPost = data['Cake_ID'];
  }

  function displayPost(data){
    block.push(
    `<div class="container">
      <div class="modal modals">
        <div class="modal-content border rounded-3 modalcontents">
          <div class="container">
              <div class="heading-section">
                <div class="flex">
                <span class="subheading text-center"><p style="font-size:128px">` + data['Cake_Name'] + `</p></span>
                </div>
                <div>
                <span class="subheading text-center time" style="font-size:30px;">` + data['Date_Time'] + `</span>
                </div>
              </div>
              <hr>
              <img src="assets/images/cakerate/` + data['Img_Link'] + `" class="img-thumbnail rounded mx-auto d-block usercontent">
              <hr>
              <br>
              <div class="d-flex justify-content-center" style="margin-top:-40px;">
              <span class="subheading text-center"><p style="font-size:32px"> Posted by: ` + data['User_ID'] + `</p></span>
              </div>
              <div class="d-flex justify-content-center" style="margin-top:-40px;">
                <div class="heart"></div>
              </div>
              <div class="d-flex justify-content-center">
                <p class="text-center likes"> 0 Likes</p>
              </div>
            </div>            
          </div>
        </div>
      </div>
      <br>`);
  }