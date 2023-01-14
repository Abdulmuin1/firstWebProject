<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Yeabsira Tsegaye(ugr/1820/12), Munir Mohammed(ugr/1950/12) Abdulmuin Nesru(ugr/4284/12)">
    <meta name="description" content="bookstore catalogue">
    <title>bookstore</title>
    <link rel="stylesheet" href="main.css">7
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
        <section >
            <h3>Featured Books</h3>
            <table >
                <tr>
                    <td>
                        <figure id="book1"><a href="book1.php"><img src="b1.jpg" alt="The man burned by winter, By Pete Zacharias" ></a>
                            <figcaption align="center">
                                <a href="book1.php">The man burned by winter<br>Pete Zacharias </a><br>$5.00<br>  
                                <button class="button-style" onclick="document.location='buy.php'">BUY</button>

                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <figure id="book2"><a href="book2.php"><img src="b2.jpg" alt="Reminders of him, By Colleen Hoover" ></a>
                            <figcaption align="center">
                                <a href="book2.php">Reminders of him<br>Colleen Hoover </a><br>$10.00
                                <br>  
                                <button class="button-style" onclick="document.location='buy.php'">BUY</button>
                            </figcaption>
                        </figure>
                    </td>
                    <td>
                        <figure id="book3"><a href="book3.php"><img src="b3.jpg" alt="The locked door, By Freida Mcfadden" ></a>
                            <figcaption align="center">
                                <a href="book3.php">The locked door<br>Freida Mcfadden </a><br>$12.00
                                <br>  
                                <button class="button-style" onclick="document.location='buy.php'">BUY</button>
                            </figcaption>
                        </figure>
                    </td>
                    
                </tr>
            </table>
        </section> 
    </main>
    <footer >
        <hr>
        <h2 align="center">THANK YOU FOR BROWSING OUR CATALOGUE!!!</h2>
        <address align="justify">
            MYA bookstore, 
            8833 Djibuti St,Addis Ababa. 
            +251-912-345-678 <br>
        </address>
    </footer>
</body>
</html>
