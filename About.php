<?php 
    require 'config.php';
   
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <title>POSTEST 7</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>About</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="1">
        <input type="checkbox" onclick="ubahMode()">

    <div class="About"><br>
        <h2 class="about-title">PROFIL</h2>
        <div class="foto">
            <img src="foto.jpg" width="250px" height="285px">
    </div>
    <div class="biodata">
        <p>Nama             : Kristina</p><br>
        <p>NIM              : 2009106108</p><br>
        <p>Angkatan         : 2020</p><br>
        <p>Program Studi    : Informatika</p><br>
        <p>Hobi             : Travelling</p><br>
    </div>    
    </div>

    <div class="footer">
        <div class="footer-logo">@Copyright 2022 - Kristina</div>
        <div class="footer-list">
        </div>
    </div>

    <script>
        function ubahMode(){
            const ubah = document.body;
            ubah.classList.toggle("dark");
        }
    </script>
    </table>
</body>
</html>