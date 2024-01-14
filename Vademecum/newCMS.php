<?php
$newCMS = $_POST['newCMS'];



if(!empty($_POST['newCMS'])){
    if(isset($_POST['newCMS'])){
        $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum");
        if(!$connect)
        {
            echo "Brak takiej bazy danych.";
            exit;
        }
        
        else{
            $query = "INSERT INTO cms_tab (newCMS) VALUES ('$newCMS')";
            $result = mysqli_query($connect, $query);
            //$fetch = mysqli_fetch_array($result);
            include 'check.php';
        }
    }
    else
        include 'uncheck.php';
}
else
     include 'uncheck.php';

?>

<script>
    setTimeout("location.href = './addCMS.php';",2000);
</script>


