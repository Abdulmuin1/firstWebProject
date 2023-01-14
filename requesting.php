<?php
    $conn = mysqli_connect("localhost", "root", "", "bookstore")or die("Unable to connect to the database server!").mysqli_connect_error();
    if(isset ($_POST['submit'])){
        $bookname = $_POST[ "bname" ];
        $auth = $_POST[ "author" ];
        $cat = $_POST[ "category" ];
        $cname = $_POST[ "cname" ];
        $cnum = $_POST[ "cnum" ];
        
        $query= "insert into request(name, author, genre, cname, cnum) values('$bookname' , '$auth', '$cat' , '$cname', '$cnum')";
        $run= mysqli_query($conn, $query);


    }
    echo '<h1 align= center>Submitted!</h1>';

  

    mysqli_close($conn);
?>
