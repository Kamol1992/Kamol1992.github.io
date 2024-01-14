<?php 
include 'head.php';
include 'nav.php';
include 'header.php';
?>


    <div class="container">
        <div class="container-form-admin">
            <div class="form-admin">
                <form action="newCMS.php" method="POST">
                    <div id="group-form" class="group-form-add-cms">
                        <input type="text"  name="newCMS" class="input-new-cms"></input>
                        <label>Dodaj nowy CMS:</label>
                        <span class="add-cms-check-content">
                            <i class="far fa-check-circle"></i>
                        </span>
                        <span class="add-cms-red-cross-content">
                            <i class="far fa-times-circle"></i>
                        </span>
                    </div>
                    <div class="button-form-add-cms">
                        <input type=submit value="Dodaj"/>
                    </div>
                </form>
            </div>    
        </div>
    </div>


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
                        $query_content = "SELECT * FROM `cms_tab` WHERE `newCMS` = '$typeOfCms'";
                        $result_content = mysqli_query($connect, $query_content);
                        //Generate code HTML with dataBase//
                        while($row = mysqli_fetch_assoc($result_content)){
                            $CMS = $row["newCMS"];
                            echo <<<EOT
                            <div id="cms__$CMS" class="cms_content-admin">
                                <div class="$CMS name_content-admin">
                                    <h4 id="$CMS" class="header_name">$CMS</h4>
                                    <div class="content-button-delete">
                                        <a href="deletecms.php?id=$CMS"><button type="submit" name="button-delete" value="delete-solution" class="button-delete">Usuń</button></a>
                                    </div>
                                </div>
                            
                            EOT;
                            //END Generate code HTML with dataBase//
                            
                            
                            
                        }
                    }
                    mysqli_close($connect);
                }
                /*END! Script PHP Generate list of CMS* END!*/
            ?>




<script src="js/addcms.js"></script> 
<script src="prismjs/prism.js"></script> 
</body>
</html>