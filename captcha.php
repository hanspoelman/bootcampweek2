<html>
    <head> </head>
    <body> 
        <?php
        header('content-type: image/jpeg');
        ?>
        <?php
                $image = imagecreatie($img_width, $img_height);
                imagecoloralLocate($image, 255, 255, 255);
        
                $text_color = imagecoloralLocatie($image, 0, 0, 0);
                
                imagettftext($image, $font_size, 0, 15, 30, $text_color, 'font.ttf', $captcha_num);
                imagejpeg($image);
        
        ?>   
        <?php
        
            session_start()
                $captcha_num = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890abcdefghijklmnopqrstuvwxyz';
                $captcha_num = substr(str_shuffle($captcha_num),0,6);
                $_SESSION["code"] = $captcha_num;

                $fontsize = 30;
                $img_width = 70;
                $img_height = 40;

        ?> 
        <?php 
            <?php
                    session_start();
                    print_r($_POST);
                    if(isset($_Post) & !empty($_Post)) {
                        if($_POST['capthca'] == $_SESSION['code']){
                            echo "correct captcha";
                        }else{
                            echo "Invalid captcha";
                        }
                    } 
            ?>
    </body>
</html>
