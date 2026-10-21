<!DOCTYPE html>
<html>
<body>
    
<?php

// $connection=mysqli_connect("localhost","root", "", "1st_code");
$conn = mysqli_connect("localhost", "root", "", "sql_test");

if ($conn){
    echo "successfull";
}
else{
    echo "Fail";
}

$qury="SELECT * FROM `test` WHERE 1";
$result= mysqli_query($conn,$qury);

print_r($result);

?>

</body>
</html>