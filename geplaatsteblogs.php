<!doctype html>
    <html>
        <head>
         <title>blogs</title>
            <link rel="stylesheet" a href="blogsite.css">
        </head>
        <body>
        
        
            <div class="grid-container">
                <div class="item1">
                  <nav>
                    <ul>
                    <li> <a class="active" href="website.php">Blog plaatsen</a></li>
                    <li><a href="geplaatsteblogs.php">Blogs</a></li>
                    </ul>
                </nav>
                </div>
                <div class="item2"></div>
                <div class="item3"></div>
                <div class="item4">

                    <?php
                    ini_set('display_errors',1);
                    error_reporting(E_ALL);

                    $host='localhost';
                    $user='root';
                    $pass='mysql';
                    $dbase='bootcamp_week2';

                    $conn= new mysqli($host,$user,$pass,$dbase);

                    $sql= "SELECT * FROM index1 post ORDER BY id DESC";
                    $result = mysqli_query($conn,$sql);

                    /* fetch associative array */
                    while ($row = mysqli_fetch_row($result)) 
    
                    {
                        echo '<p class="blog">';
                        echo $row[0]. "<br>";
                        echo "<br>";
                        echo $row[6]. "<strong><br> ";
                        echo "<br>";
                        echo $row[1]. " ";
                        echo $row[2]. "</strong><br><i>";
                        echo $row[5]. "</i> ";
                        echo "<br>";
                        echo $row[7]. "<br>"; 
                    }
                    $conn->close();
                    ?>
                </div>
                <div class="item5"></div>
                <div class="item6"></div>
                <div class="item7"></div>
            </div>
             <footer>
                <p align="center">
                    <a href="https://www.facebook.com/CodeGorillaNL/" target="_blank" class="fa fa-facebook"></a>
                    <a href="https://twitter.com/CodeGorillaNL" target="_blank" class="fa fa-twitter"></a>
                    <a href="https://www.instagram.com/codegorilla/" target="_blank" class="fa fa-instagram"></a>
                </p>
                    <br>
                <p align="center"> ©Code Gorilla 2018</p>
            </footer>
        </body>
    </html>