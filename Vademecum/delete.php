<?php 

include 'head.php';
include 'nav.php';
include 'header.php';

$delete = $_GET['id'];
echo $delete;

if(isset($delete)){
    $connect = mysqli_connect("localhost", "serwer119060", "!5kpE=ft", "serwer119060_vademecum") or die('bład zapytania');
    $query_delete_record = "delete from vademecum_tab where nazwa = '$delete'";
    $result_delete_record = mysqli_query($connect, $query_delete_record);
    if(file_exists('solutions/'.$delete.'.txt')){
        unlink('solutions/'.$delete.'.txt');
    }
    
    include 'delete-solution.php';
}
else
    echo 'nie udało się usunąć <br>';

?>

<script>
    setTimeout("location.href = './admin.php';",2000);
</script>
