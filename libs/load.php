<?php
function load_template($name)
{
            
            //include __DIR__."/../templates/$name.php";
    include $_SERVER['DOCUMENT_ROOT']."/app/templates/$name.php";
}
function signup($usrname, $pssword, $email, $phone)
{
    $servername = "mysql.selfmade.ninja";
    $username = "krvsn";
    $password = "Garuda@11606";
    $dbname = "krvsn_newdb";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        print("Connection Failed mame");
    }
    
    
    $sql = "INSERT INTO auth (`username`, `password`, `email`, `phone`, `blocked`, `active`)
     VALUES ('$usrname', '$pssword', '$email', '$phone', '0', '1');";
    $result = false;
    if ($conn->query($sql) === true) {
        $result = true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        $result = false;
    }
    
    $conn->close();
    return $result;
}
