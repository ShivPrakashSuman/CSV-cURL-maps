
<html lang="en">
 
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
  <title>Import CSV File into MySQL using PHP</title>
 
</head>
 
<body>
 
  <div class="container">
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-12 p-4">
              <a href="dataList.php" class="btn btn-info"> <i class="fa fa-forward"></i> Data List</a>
            <div class="float-right mb-3">
                <a href="googleMap.php" class="btn btn-warning"><i class="fa fa-map-pin"></i> Google Maps </a>
            </div>
          </div>      
        </div>
        <div class="input-group mb-5">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
                <label class="custom-file-label" for="customFileInput">Select file</label>
            </div>
            <div class="input-group-append">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary">
            </div>
        </div> 
          <center style="font-family: Times New Roman;">
            <h1><b>Image Finder Tool</b></h1> 
            <div class="input-group mt-4" style="width:50%;">
              <input type="text" id="word" class="form-control rounded" placeholder="Search.." aria-label="Search" aria-describedby="search-addon" />
              <button type="button" onclick="searchClick()" class="btn btn-outline-primary">SEARCH</button>

            </div>
            <div id='result' class="row mt-5"></div>      
          </center>       
    </form>
        <center style="font-family: Times New Roman;">
            <h1><b>Image Finder Tool</b></h1> 
              <form action="cURL_data.php" method="GET">
                <div class="input-group mt-4" style="width:50%;">
                  <input  type="search"name="search"  class="form-control rounded" placeholder="Search.." value="<?php //echo $_GET['search']; ?>"/>
                  <button type="submit"class="btn btn-outline-primary">SEARCH</button>
                </div>.
              </form>  
          </center> 
  </div>
  <script>
    function searchClick(){
      $('#result').empty();
      var word = document.getElementById('word').value;
       
      fetch('https://pixabay.com/api/?key=33513386-f32dd1c80790a5c0fb879c517&q='+word+'&image_type=photo&pretty=true').then(function(response){
          response.json()
          .then((data) => {
           
            let img ='';

            data.hits.forEach((val, key)=>{
               img += '<div class="col-sm-4">'+
                        '<img src="'+ val.largeImageURL+'" width="100%">'+
                      '</div>';
            });
             //console.log(img);
            $('#result').append(img);

          });
      });
    }
  </script>

</body>
 
</html>