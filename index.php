
<html lang="en">
 
<head>
 
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
          </div>
        </div>
        <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFileInput" aria-describedby="customFileInput" name="file">
                <label class="custom-file-label" for="customFileInput">Select file</label>
            </div>
            <div class="input-group-append">
                <input type="submit" name="submit" value="Upload" class="btn btn-primary">
            </div> 
        </div>
        
  </form>
  </div>
 
</body>
 
</html>