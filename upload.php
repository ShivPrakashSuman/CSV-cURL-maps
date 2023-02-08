<?php
// include mysql database configuration file
include('db.php');
 
if (isset($_POST['submit'])) { 
  
        $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

        
        fgetcsv($csvFile);

        $result = '' ;

        while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE) { 
            $name = $getData[0];
            $email = $getData[1];
            $phone = $getData[2];

            $query = "SELECT id FROM users WHERE email = '" . $getData[1] . "'";
            //$check = mysqli_query($conn, $query);
            $check = $conn->query($query);

            if ($check->num_rows > 0)
            {
                $sql = "UPDATE users SET name = '$name', phone = '$phone', created_at = NOW() WHERE email = '$email'";
                $result = $conn->query($sql);  

            } else {

                $sql = "INSERT INTO users (name, email, phone, created_at, updated_at) VALUES ('$name', ' $email', '$phone', NOW(), NOW())";
                $result = $conn->query($sql); 

            }
        }

        if($result){
            echo 'CSV File Save';
            //header("Location: index.php");
        } else {
            echo 'Fialed' ;
        }

        fclose($csvFile);   
    
    }
?>