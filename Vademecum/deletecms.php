<?php 

include 'head.php';
include 'nav.php';
include 'header.php';

$delete = $_GET['id'];

if(isset($delete)){
    $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
    $query_delete_record = "delete from cms_tab where newCMS = '$delete'";
    $query_delete_record_vademecum_tab = "DELETE FROM vademecum_tab WHERE typeOfCMS = '$delete'";
    $result_delete_record = mysqli_query($connect, $query_delete_record);
    $result_delete_record_vademecum = mysqli_query($connect, $query_delete_record_vademecum_tab);
    include 'delete-cms.php';
    echo 'Usunięto rozwiązanie o nazwie '.$delete;

}
else
    echo 'nie udało się usunąć <br>';

?>

<script>
    setTimeout("location.href = './addCMS.php';",2000);
</script>
