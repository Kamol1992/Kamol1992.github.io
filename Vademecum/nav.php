
<!-- SECTION NAVIGATION - START -->
<nav class="navigation">
    <div class="nav-content">
        <div class="nav-top">
            <div class="search-box">
                <input type="search" id="site-search" name="q"
                placeholder="Przeszukaj">
            </div>  
        </div>
        <div class="nav-list">

<!-- ===================SCRIPT PHP Generate list of CMS============= --->

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
                   echo '
                        <li class="navigation__item" id=cms__'.$row["newCMS"].'><div id=cms__'.$row["newCMS"].' class="check-circle"><i class="far fa-check-circle"></i></div>'.$row["newCMS"].'</li>
                   ';
               }
                mysqli_close($connect);
            }
            /*END! Script PHP Generate list of CMS* END!*/
         ?>
<!-- ===================END SCRIPT PHP Generate list of CMS============= --->

        </div>
    </div>
</nav>
<!-- SECTION NAVIGATION - END -->