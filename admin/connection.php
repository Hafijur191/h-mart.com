<?php
$db = mysqli_connect('localhost', 'root', '', 'hmart');
if($db){
    //echo 'database connection established';
}else{
    die('database connection error'.mysqli_error($db));
}
?>