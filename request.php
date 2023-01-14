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
        <section>
            
            <form action="requesting.php" method="POST">
                <table>
                    <tr>
                        <td>
                            <fieldset >
                                <legend>Request Form</legend>
                                <ol>
                                    <p><li><label for="bname">Book Name: <input type="text" name="bname" id="bname" autocomlete="on" ></label></li></p>
                                    <p><li><label for="author">Author: <input type="text" name="author" id="author"></label></li></p>
                                    <p><li><label for="category">Genre: 
                                        <select name="category" id="category">
                                            <option value="other">Other</option>
                                            <option value="romance">Romance</option>
                                            <option value="fantasy">Fantasy</option>
                                            <option value="science-fiction">Science-Fiction</option>
                                            <option value="history">History</option>
                                            <option value="fiction">Fiction</option>
                                            <option value="nonfiction">Nonfiction</option>
                                            <option value="education">Education</option>
                                        </select>
                                    </label></li></p>
                                    <p><li><label for="cname">Customer Name:(optional) <input type="text" name="cname" id="cname"></label></li></p>
                                    <p><li><label for="cnum">Customer phone number: <input type="tel" name="cnum" id="cnum"></label></li></p> 
                                </ol>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        
                    </tr>   
                     
                </table>  
            
            <input type="submit" name="submit" id="submit" value="Submit">
            <input type="reset" value="Reset">
            

            </form>      
        </section> 
    </main>
    <footer>
        <hr>
        <h2 align="center">THANK YOU FOR YOUR FEEDBACK!!!</h2>
        <address>
            MY bookstore, <br>
            8833 Djibuti st,Addis Ababa. <br>
            +251-912-345-678 <br>
        </address>
    </footer>
</body>
</html>