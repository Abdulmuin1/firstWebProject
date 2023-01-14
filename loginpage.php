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
    <hr>
    <main>
        <br>
        <section >
            
            <table width="400px" class="login" align="center">
                <tr>
                    <td   align="center"> 
                        <h1>Login</h1>
                    </td>
                </tr>
                <tr>
                    <td >
                    <form action="login.php" method="POST">
                        <p><label for="uname">Username: <input type="text" name="uname" id="uname" autocomlete="on" required autofocus></label></p>
                        <p><label for="password">Password: <input type="password" name="password" id="password" required></label></p>
                        <div align="center"><input type="submit" value="Login"></div>
                    </form>
                    </td>
                </tr>
            </table>
        </section> 
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