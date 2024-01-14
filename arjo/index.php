<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="/fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
</head>
<body>
    <!--Main Container App -->
    <div class="container-app">

        <!--Container left -->
        <section class="container--left-screen">
            <!--Container left header-->
            <div class="container--left-screen--header">
                <h2>Kliknij i zamów</h2>
            </div>
            <!--END Container left header-->

                <!--Container block code number -->
                <div class="container--left-screen--grid-products">

                    <!-- Getting From Data Base -->
                    <?php
                        $connect = mysqli_connect("localhost", "serwer119060_arjo", "arjo123", "serwer119060_arjo") or die('bład zapytania');
                        if(!$connect)
                        {
                            echo "Brak takiej bazy danych.";
                            exit;
                        }
                        else{
                            $query = "SELECT numer FROM `arjo_tab`";
                            $result = mysqli_query($connect, $query);
                    
                        while($row = mysqli_fetch_assoc($result)){
                            echo '<div class="block-container--number-product block-container">
                                    <div class="number-product">
                                        <span>'.$row["numer"].'</span>
                                    </div>
                                </div>
                            ';
                        }
                            mysqli_close($connect);
                        }
                    ?>
                    <!-- END Getting From Data Base -->

                </div>
                <!--END Container block code number -->
        </section>
        <!--END Container left -->

        <section class="container--right-screen">
            <div class="container--right-screen--header">
                <h2>Lista zamówień</h2>
            </div>
                <div class="container--right-screen--content-list-order">
                    <table id="table" class="table-list-order">
                        <thead class="table--section-head">
                            <tr><th id="LP">Lp</th><th>Indeks</th><th id="time">Czas</th><th>Status</th></tr>
                        </thead>
                        <tbody class="table-body">
                        </tbody>
                    </table>
                </div>
        </section>
    </div>
    <!-- END Main Container App -->

    <section class="pop-up">
        <div class="pop-up--container">
            <div class="pop-up--container--content">
                <div class="pop-up--container-number-product">
                    <div class="pop-up--number-product"></div>
                    <div class="pop-up--input-product-quantity">
                            <label>Ilość produktów:</label>
                            <input type="number" id="product-quantity" name="product-quantity" value="1" min="1">
                    </div>
                </div>
                <div class="button--acepted-of-the-order">
                    <button class="button--acepted">Dodaj zamówienie</button>
                </div>
                
            </div>
        </div>

    </section>

    <script>
    </script>

    
    <script src="js/script.js">
    </script>
</body>
</html>
