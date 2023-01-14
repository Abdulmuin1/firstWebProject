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
        <br>
        <section >
        <h1 align="center">WELCOME</h1> 

            <!--form😳😳😳-->
            <table width="800px" class="login" align="center">
                <tr>
                    <th align="center"> 
                        <h1>Inventory managment</h1>
                    </th>
                    <th align="center"> 
                        <h1>Sales managment</h1>
                    </th>

                </tr>
                <tr>
                    <td >
                    <form name="form" action="/home.php" method="POST">
                        <ol>
                            
                            <p><li><label for="bid">Book ID: <input type="text" name="bid" id="bid" required autofocus></label></li></p>
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
                            
                            <input type="submit" value="check">
                            
                            <!-- <button onclick="incrementClick()">Submit</button>
                            <button onclick="resetCounter()">Reset</button> -->
                        </ol>
                    </form>
                    
                            
                    <?php
                        $bid= 0;
                        if(isset($_POST[ "bid" ])){
                            
                            $bid = $_POST[ "bid" ];  
                            $bookname = $_POST[ "bname" ];
                            $auth = $_POST[ "author" ];
                            $cat = $_POST[ "category" ];
                        }
                        $conn = mysqli_connect("localhost", "root", "", "bookstore")or die("Unable to connect to the database server!").mysqli_connect_error();
                        $sql= "SELECT bookid, price, number FROM books";

                        $result= mysqli_query($conn, $sql);
                        
                        while($row= mysqli_fetch_assoc($result)){
                            if ($row["bookid"]==$bid){
                                echo "Price: ".$row["price"]."<br>"."<br>";
                                echo "# of book left: ".$row["number"]."<br>"."<br>";
                                
                                break;
                            }

                        }
                        $var= $row["price"];
                    
                        mysqli_close($conn);
                    ?>
                    <script type="text/javascript"> 
                        var clicks = 0;
                        var price = parseInt('<?php echo $var;?>');
                        var sum=0;
                        function fun() {
                            clicks += 1;
                            sum += price 
                            document.getElementById("sum").innerHTML = sum; 
                            document.getElementById("clicks").innerHTML = clicks; 
                            }; 
                        
                        
                    </script>
                   
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="fun()">Submit</button> 
                    
                </td>
                    <td valign="top">
                        <b>Date:</b>
                        <div id="date"> 
                            <script>
                                const d= new Date();
                                document.getElementById("date").innerHTML=d;
                            </script> </div>
                        <p>Total number of items:<a id="clicks">0</a></p>
                        <p>Total price: <a id="sum">0</a></p>

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