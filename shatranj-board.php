<html>
<head>

 <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
</head>
<body>
    <div class="container">
        <!-- Export link -->
        <div class="col-md-12 my-4 ">
            <div class="float-left">
                <a href="index.php" class="btn btn-info"><i class="fa fa-backward"></i> Back </a>
            </div>
        </div>

        <!-- Data list table --> 
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
            </thead>
            <tbody>
        <?php 
            include('db.php');
            // Fetch records from database 
            $sql = "SELECT * FROM users ORDER BY id ASC"; 
            
            $result = $conn->query($sql);
            if($result->num_rows > 0){ 
                while($row = $result->fetch_assoc()){ 
            ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <a href="pdfData.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">PDF</a>
                    </td>
                </tr>
            <?php 
                } 
            } else { ?>
                <tr><td colspan="7">No member(s) found...</td></tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>