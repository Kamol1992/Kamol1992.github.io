<?php 
include 'head.php';
include 'nav.php';
include 'header.php';

$connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
                        
    

?>
<div class="container">
    <div class="container-form-admin">
        <div class="form-admin">
            <form action="program.php" method="POST">
                <div id="group-form" class="group-form-name">
                    <input type="text"  name="title" class="input-name"></input>
                    <label>Nazwa:</label>
                    <span class="admin-check">
                        <i class="far fa-check-circle"></i>
                    </span>
                    <span class="admin-red-cross">
                        <i class="far fa-times-circle"></i>
                    </span>
                </div>
                <div id="group-form" class="group-form-select">
                    <select name="type-of-cms">
                        <?php 
                        if(!$connect)
                        {
                            echo "Brak takiej bazy danych.";
                            exit;
                        }
                        else{
                            $query = "SELECT newCMS FROM `cms_tab`";
                            $result = mysqli_query($connect, $query);
                    
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<option value='.$row["newCMS"].'>'.$row["newCMS"].'</option>';
                        }
                                                mysqli_close($connect);
                        }

                        ?>
                    </select></br>
                    <label>Typ CMSa:</label>
                </div>
                <div id="group-form" class="group-form-content">
                    <textarea type="text" name="textContent" value ="content" class="text-content"></textarea>
                    <label>Kontent:</label>
                    <span class="admin-check-content">
                        <i class="far fa-check-circle"></i>
                    </span>
                    <span class="admin-red-cross-content">
                        <i class="far fa-times-circle"></i>
                    </span>
                </div>
                <div id="group-form" class="group-form-code">
                    <textarea type="text" name="code" value ="code-content" ></textarea>
                    <label>Kod:</label>
                </div>
                    <div class="button-form-submit">
                        <input type=submit value="Wyślij"/>
                    </div>
            </form>
            <div class="button-form-addCms">
                <a href="addCMS.php"><button>Dodaj CMS</button></a>
            </div>
            
        </div>
    </div>           

    


    <div class="container-admin">
        <div class="content-solutions">

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
                        //Generate code HTML with dataBase//
                        while($row = mysqli_fetch_assoc($result_content)){
                            $nazwa =  $row["nazwa"];
                            $text = $row["text"];
                            $CMS = $row["typeOfCMS"];
                            echo <<<EOT
                            <div id="cms__$CMS" class="cms_content-admin">
                                <div class="$nazwa name_content-admin">
                                    <h4 id="$nazwa" class="header_name">$nazwa</h4>
                                    <div class="content-button-delete">
                                        <a href="delete.php?id=$nazwa"><button type="submit" name="button-delete" value="delete-solution" class="button-delete">Usuń</button></a>
                                    </div>
                                </div>
                                
                                <div class="content__$text admin-text">
                                    <p>$text</p>
                                </div>
                            
                            EOT;
                            echo '<div class="code-content__'.$nazwa.' code-content-admin">';
                                            if(file_exists('solutions/'.$nazwa.'.txt')){
                                                $myfile = fopen("solutions/$nazwa.txt", "r");
                                            echo  '<pre>
                                            <code class="language-php">'.fread($myfile,filesize('solutions/'.$nazwa.'.txt'));
                                            fclose($myfile);
                                            }
                                            else
                                            echo '';
                                            echo '
                                            </code>
                                        </pre>
                                    </div>
                            </div>';
                            //END Generate code HTML with dataBase//
                            
                            
                            
                        }
                    }
                    mysqli_close($connect);
                }
                /*END! Script PHP Generate list of CMS* END!*/
            ?>


        </div>
    </div>

    


</div> 

<script src="js/script.js"></script> 
<script src="prismjs/prism.js"></script>  
</body>
</html>