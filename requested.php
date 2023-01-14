<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yeabsira Tsegaye(ugr/1820/12), Munir Mohammed(ugr/1950/12) Abdulmuin Nesru(ugr/4284/12)">
    <meta name="description" content="bookstore catalogue">
    <title>bookstore</title>
    <link rel="stylesheet" href="main.css">
</head>
<body >
    <a href="index.php"><figure align="center"><img  src="logo.webp" alt="bookstore logo" width="200" ></figure></a>
    <h1 align="center">MYA Bookstore catalogue</h1>
    <hr>
    <nav>
        <button class="button-style" onclick="document.location='home.php'">Home</button>
        <button class="button-style" onclick="document.location='requested.php'">Requesed Books</button>
        <button class="button-style" onclick="document.location='loginpage.php'">Logout</button>

    </nav>
    <hr>
    <main>
    
        <?php
            $conn = mysqli_connect("localhost", "root", "", "bookstore")or die("Unable to connect to the database server!").mysqli_connect_error();
            $sql= "SELECT name, author, genre, cname, cnum FROM  request";

            $result= mysqli_query($conn, $sql);
            echo "<h2>Requested books</h2>";
            while($row= mysqli_fetch_assoc($result)){
                

                echo "* Bookname: " . $row["name"]. " - Author: " . $row["author"]. " " . " - genre: " . $row["genre"]. " - customer num.: " . $row["cnum"]. "<br>";
            }
            mysqli_close($conn);
        ?>
    </main>
    <footer >
        <hr>
        <h2 align="center">THANK YOU FOR BROWSING OUR CATALOGUE!!!</h2>
        <address align="justify">
            MY bookstore, 
            8833 Djibuti St,Addis Ababa. 
            +251-912-345-678 <br>
        </address>
    </footer>
</body>
</html>
