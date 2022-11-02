<?php require 'config.php'?>

<?php if(isset($_GET['nama'])){
    
    if(hapus_data($_GET['nama'])){
        header('Location: index.php');

    }
    else echo " gagal menghapus data";
}

?>