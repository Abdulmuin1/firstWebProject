<?php
    $username = $_POST[ "uname" ];
    $password = $_POST[ "password" ];

    $conn = mysqli_connect("localhost", "root", "", "bookstore")or die("Unable to connect to the database server!").mysqli_connect_error();
    $sql= "SELECT username, password FROM employee";

    $result= mysqli_query($conn, $sql);
    
    while($row= mysqli_fetch_assoc($result)){
        if ($row["username"]==$username && $row["password"]==$password){
            header ('Location: home.php');
            echo $row["username"]."<br>";
        }

    }
    mysqli_close($conn);
?>
