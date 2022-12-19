<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ayala');
define('DB_PASSWORD', 'Ayala2004');
define('DB_NAME', 'database1');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $sql = "select * from website where username = '".$uname."' AND password = '".$pass."' limit 1";

    $result = mysqli_query($link, $sql);

    if(mysqli_num_rows($result) == 1){
        echo "Logged IN!";
        exit();
    }
    else{
        echo "Wrong data!";
    }
}
?>