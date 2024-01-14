<?php 
include 'head.php';
include 'nav.php';
include 'header.php';
?>

<div class="container">



    <div class="card-container">

<!-- ===================SCRIPT PHP Generate CARD-list of CMS============= --->
    <?php /*Script PHP Generate list of CMS*/
            $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
            if(!$connect)
            {
                echo "Brak takiej bazy danych.";
                exit;
            }
            else{
                $query = "SELECT newCMS FROM `cms_tab`";
                $result = mysqli_query($connect, $query);
        
               while($row = mysqli_fetch_assoc($result)){
                   echo '<div id=cms__'.$row["newCMS"].' class="card">
                   <div class="front-card">
                        <div class="svg-card">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="header-cms" >
                            <h3>'.$row["newCMS"].'</h3>
                        </div>
                   </div>
                   <div class="card-button-container">
                    <button class="button-card">Znajdź odpowiedź</button>
                    </div>
               </div>
               ';
               }
                mysqli_close($connect);
            }
            /*END! Script PHP Generate list of CMS* END!*/
         ?>

         <!-- ===================SCRIPT PHP Generate CARD-list of CMS============= --->
    </div>




</div>
<!-- ===================END SCRIPT PHP Generate CMS============= --->

<!-- ===================CONTENT OF CMS============================== -->

<div class="content-of-cms">


    <?php /*Script PHP Generate list of CMS*/
                $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
                if(!$connect)
                {
                    echo "Brak takiej bazy danych.";
                    exit;
                }
                else{
                    $query = "SELECT newCMS FROM `cms_tab`";
                    $result = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_assoc($result)){
                        $typeOfCms = $row["newCMS"];
                        $query_content = "SELECT * FROM `vademecum_tab` WHERE `typeOfCMS` = '$typeOfCms'";
                        $result_content = mysqli_query($connect, $query_content);
                        while($row = mysqli_fetch_assoc($result_content)){
                            $nazwa =  $row["nazwa"];
                            $text = $row["text"];
                            $CMS = $row["typeOfCMS"];
                            echo <<<EOT
                            <div id="cms__$CMS" class="cms_content">
                            <div id='.$nazwa.' class="$nazwa name_content">
                                <h4 class="header_name">$nazwa</h4>
                            </div>
                                <div id='.$nazwa.' class="content__$text name_content_text">
                                    <div class="text">
                                        <p>$text</p>
                                    </div>
                                
                            
                            EOT;
                            echo '<div id='.$nazwa.'  class="code-content__'.$nazwa.' code-content">';
                           
                                if(file_exists('solutions/'.$nazwa.'.txt')){
                                    $myfile = fopen("solutions/$nazwa.txt", "r");
                                $codehtmlphp = htmlspecialchars(fread($myfile,filesize('solutions/'.$nazwa.'.txt')));
                                echo  '<pre>
                                <code class="language-php">'.$codehtmlphp;
                                fclose($myfile);
                                }
                                else
                                echo '';
                                echo '
                                </code>
                            </pre>
                            </div>
                        </div>
                        </div>';
                            
                            
                            
                            
                        }
                    }
                    mysqli_close($connect);
                }
                /*END! Script PHP Generate list of CMS* END!*/
            ?>


</div>
<!-- ===================END CONTENT OF CMS============================== -->




</div>
    


<script src="js/script.js"></script> 
<script src="prismjs/prism.js"></script>   
</body>
</html>