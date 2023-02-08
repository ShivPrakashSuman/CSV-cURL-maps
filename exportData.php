<?php 
 
include('db.php'); 
  
$sql = "SELECT * FROM users ORDER BY id ASC"; 
$result = $conn->query($sql);
 
if($result->num_rows > 0){ 

    $filename = "members-data_" . date('Y-m-d') . ".csv"; 
    

    $f = fopen('php://memory', 'w'); 
    //print_r($f);die;

    $fields = array('ID', 'NAME', 'EMAIL', 'PHONE', 'CREATED', 'UPDATED'); 
    fputcsv($f, $fields); 
      
   
    while($row = $result->fetch_assoc()){  
        $lineData = array($row['id'], $row['name'], $row['email'], $row['phone'], $row['created_at'], $row['updated_at']); 
        fputcsv($f, $lineData); 
    } 
      
    // Move back to beginning of file 
    fseek($f, 0); 

    header('Content-Type: text/csv'); 
    header('Content-Disposition: attachment; filename="' . $filename . '";'); 

    fpassthru($f); 
} 
exit; 
 
?>