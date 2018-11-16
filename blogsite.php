<?php
    ini_set('display_errors',1);
    error_reporting(E_ALL);

    $host='localhost';
    $user='root';
    $pass='mysql';
    $dbase='bootcamp_week2';

    $conn= new mysqli($host,$user,$pass,$dbase);

    if ($conn->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
    }

    $voornaam=$_POST['voornaam'];
    $achternaam=$_POST['achternaam'];
    $bedrijf=$_POST['bedrijf'];
    $email=$_POST['email'];
    $onderwerp=$_POST['onderwerp'];
    $blog=$_POST['blog'];

    $sql="INSERT INTO `bootcamp_week2`.`index1` (`voornaam`, `achternaam`, `bedrijf`, `email`, `onderwerp`, `blog`) VALUES ('$voornaam', '$achternaam', '$bedrijf', '$email', '$onderwerp', '$blog')";

    // Perform a query, check for error
    if (!empty($_POST['voornaam'])&& $_POST['achternaam']&& $_POST['onderwerp']&& $_POST['blog'])
        {
        mysqli_query($conn, $sql);
        header("location:geplaatsteblogs.php");
    }
            else{
                echo "Graag eerst een blog plaatsen!";
                exit;
            }

    $conn->close();

?>
