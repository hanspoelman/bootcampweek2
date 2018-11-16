<!doctype HTML>
    <html>
        <head>
            <title>Blogsite week 2</title>
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
                <h1>Welkom op mijn blogsite!</h1>
                <p>Leuk dat je een blog wilt plaatsen op mijn blogsite. Voordat je een blog gaat plaatsen wil ik wel graag weten wie je bent.<br>
                    Vul je gegevens. Succes met plaatsen en bedankt voor je medewerking.</p>
                <h2> Hieronder kun je een blogplaatsen!</h2>
               
                    <div class="contactformulier">
                    <form action="blogsite.php" method="post">
                    
                        <label for="voornaam">Voornaam</label><br>
                        <input type="text" id="voornaam" name="voornaam" required ><br>
                        
                        <label for="achternaam">Achternaam </label><br>
                        <input type="text" id="achternaam" name="achternaam" required ><br>
                        
                        <label for="bedrijf">Bedrijf</label><br>
                        <input type="text" id="bedrijf" name="bedrijf" required><br>
                        
                        <label for="e-mail">E-mail</label><br>
                        <input type="e-mail" id="e-mail" name="email" required><br>
                        
                        <label for="onderwerp">Onderwerp</label><br>
                        <input type="text" id="onderwerp" name="onderwerp" required><br>
                       
                        <label for="blog">Blog</label><br>
                        <textarea id="blog" name="blog" required> </textarea><br>
                        
                        <label for="captcha">Captcha</label><br>
                        <img src="captcha.php" /><br>
                        <input type="text" id="captcha" name="captcha" required ><br>
                        
                        <label for="verzenden">Verzenden</label><br>
                        <input type="submit" id="verzenden" name="verzenden"><br> 
                        <br>
   
                    </form>
                        </div> 
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