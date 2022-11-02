<?php 
   
    require 'config.php';
 
    ?>

<?php 
$error = "";
    $data = $_GET[''];

    if(isset($_GET[''])){
        $Wisata = tampilkan($Home);
        while($row= mysqli_fetch_assoc($Wisata)){
            
        $nama = $row['nama'];
        $telepon   = $row['telepon'];
        $username    = $row['username'];
        $tmpt_wsta    = $row['Tempat Wisata'];
        $pwd = $row['Password'];
        }
    }
    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $telepon   = $_POST['Telepon'];
        $username  = $_POST['Username'];
        $tmpt_wsta = $_POST['Tempat Wisata'];
        $pwd = $_POST['password'];
        
        if(!empty(trim($nama)) && !empty(trim($username))){
            if(edit_data($nama, $telepon, $username, $Tempat_Wisata, $password)){
                header('Location: index.php');
            }else{
                $error = "ada masalah saat edit data";
            }
        }else{
            $error = "data harus diisi";
        }
    }

?>

<div class="wrapper">
<div class="form_tambah">
<form action="" method="post">

<label for="nama">Nama</label><br>
     <input type="text" name="nama" class="input" placeholder="Masukkan nama"><br>

      <label for="telepon">Telepon</label><br>
      <input type="telepon" name="telepon" class="input" placeholder="Masukkan No_Telepon"><br>

     <label for="username">Username</label><br>
     <input type="text" name="username" class="input" placeholder="Masukkan username"><br>

     <label for="tmpt_wsta">Tempat Wisata</label><br>
     <input type="tempat wisata" name="tempat wisata" class="input" placeholder="Masukkan Tempat Wisata"><br>

     <label for="konfirmasi">Konfirmasi Password</label><br>
     <input type="password" name="konfirmasi" class="input" placeholder="Konfirmasi password"><br>

     <input type="submit" name="regis" class="submit" value="Registrasi"><br><br>
</form>

    <div class="error"><br>
        <?= $error;?>
    </div>
    <br>
    <input class="submit" type="submit" name="submit" value="Update data"><br>
    

    </form>
    </div>

 