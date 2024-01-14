<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 

session_start();
$name = $_POST['title'];
$contentText = $_POST['textContent'];
$CMS = $_POST['type-of-cms'];
$codeContent = $_POST['code'];

if((!empty($name) && !empty($CMS) && !empty($contentText)) || (!empty($name) && !empty($CMS) && !empty($contentText) && !empty($codeContent))){
    if(isset($_POST['title'])){
        $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
        $sqlquery = "SELECT nazwa FROM vademecum_tab WHERE nazwa ='$name'";
            $result2 = mysqli_query($connect, $sqlquery);
            $records = mysqli_num_rows($result2);
        if(!$connect)
        {
            echo "Brak takiej bazy danych.";
            exit;
        }
        else{
            if($records < 1 && !empty($name) && !empty($contentText)){
                $query = "INSERT INTO vademecum_tab (nazwa, text, typeOfCMS) VALUES ('$name', '$contentText', '$CMS')";
                $result = mysqli_query($connect, $query);
                //$fetch = mysqli_fetch_array($result);

                if(isset($codeContent)){
                    if(!empty($codeContent)){
                        $newfile = fopen("solutions/$name.txt", "w");
                        fwrite($newfile, $codeContent);
                    }
                    
                }
                include 'checksolution.php';
            }
            else
            echo '<script>alert("Taka nazwa już istnieje");</script>';   
        }
        
    }
    else
        include 'uncheck-solution.php';
}
else
        include 'uncheck-solution.php';


               

?>

<script>
    setTimeout("location.href = './admin.php';",2000);
</script>


</body>
</html>