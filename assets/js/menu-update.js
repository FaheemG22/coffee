data = [];
block = [];
oldJsonLength = []

function request_menu(inp) {
  return new Promise((resolve, reject) => {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("GET", "api/menu/menu_update.php?type=" + inp);
    xmlhttp.send();
    xmlhttp.onload = function () {resolve(this.responseText);};
    xmlhttp.onerror = function () {reject(new Error("Request failed"));};
  });
}

function jsonProccess(jsonData,type){
  block = block +(`<div class="col-md-6 mb-5 pb-3 heading-section"> 
  <h3 class="subheading" style="margin-bottom:50px;">` + type + `'s</h3>`);

  for (var row = 0; row < jsonData.length; row++){
    var row_data = jsonData[row];

    for (var key in row_data){
        var value = row_data[key];
        data[key] = value;

        if (key == 'Img_Link'){displayItem(data);}
    }
  }
  block = block + ('</div>')
}

function displayItem(data){
  block= block +(`
  <div class="pricing-entry d-flex ">
              <div class="img" style="background-image: url(images/menu/`+ data['Img_Link'] +`);"></div>
              <div class="desc pl-3">
              <div class="d-flex text align-items-center">
                  <h3><span style="ftco-heading-2">`+ data['Item_Name'] +`</span></h3>
                  <h3 class="price">£` + data['Item_Cost'] + `</h3>
              </div>
              </div>
              </div>
  `)
}    

async function responseHandler(type){
  try {
      const response = await request_menu(type);
      var jsonData = JSON.parse(response);
      
      if (oldJsonLength[type] != jsonData.length){
      jsonProccess(jsonData,type);
      document.getElementById("refresh").innerHTML = block;
      oldJsonLength[type] =jsonData.length;
      }
      else {}

    } 
    catch (error) {console.error("Error:", error.message);}
}

async function refresh() {
  const types = ['Drink', 'Main', 'Dessert', 'Appetiser', 'Coffee'];
  block = '';
  
  block = block + (`<section class="ftco-section"><div class="container"><div class="row">`)
  
  for (let i = 0; i < types.length; i++) {
    await responseHandler(types[i])
    
  }
}

refresh();
setInterval(refresh, 5000);