<?php 
echo phpinfo();
//connect to the database
$connection = mysqli_connect("localhost", "root", "","classicmodels");
if($connection != NULL){
    echo "The database has been connected";
}
else{
    echo "There is some issue with the database";
}
?>