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
        <button class="button-style" onclick="document.location='index.php'">Home</button>
        <button class="button-style" onclick="document.location='request.php'">Request</button>
        <button class="button-style" onclick="document.location='about.php'">About Us</button>
        <button class="button-style" onclick="document.location='contact.php'">Contact Us</button>
        <button class="button-style" onclick="document.location='loginpage.php'">Login</button>
    </nav>
    <hr>
    <main>
        <br>
        <section >
            <table >
                <tr>
                    <td>
                        <figure ><img src="b2.jpg" alt="Reminders of him, By Colleen Hoover" width="250">
                            <figcaption align="center">
                                Reminders of him<br>Colleen Hoover<br>$9.99
                                <br>  
                                <button class="button-style" onclick="document.location='buy.php'">BUY</button>
                            
                            </figcaption>
                        </figure>
                    </td>
                    <td valign="top">
                        <strong>Description</strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam vitae dicta iste, veniam iure deleniti est recusandae sunt illum dolorum obcaecati, sint fugiat nostrum similique cum consequatur quasi unde? Vel!</p>
                        

                        <?php
                            $conn = mysqli_connect("localhost", "root", "", "bookstore")or die("Unable to connect to the database server!").mysqli_connect_error();
                            $sql= "SELECT name, number FROM  books";

                            $result= mysqli_query($conn, $sql);
                            echo "<br><strong>Available in stock</strong><br>";
                            while($row= mysqli_fetch_assoc($result)){
                                if ($row["name"]=="Reminders of him"){
                                    echo "<br> ".$row["number"]." books available"."<br>"."<br>";
                                }

                            }
                            mysqli_close($conn);
                        ?>


                        <strong>Book Condition</strong>
                        <p>Excelent</p>
                        
                        <strong>Review</strong>
                        <p>5 stars</p>
                    </td>
                    
                    
                </tr>
            </table>
        </section> 
    </main>
    <footer>
        <hr>
        <h2 align="center">THANK YOU FOR BROWSING OUR CATALOGUE!!!</h2>
        <address>
            MY bookstore, <br>
            8833 Djibuti st,Addis Ababa. <br>
            +251-912-345-678 <br>
        </address>
    </footer>
</body>
</html>