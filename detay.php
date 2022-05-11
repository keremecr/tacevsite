<?php
include "baglan.php";
$sql="SELECT * FROM ogrenciler WHERE ogrno=?";
$sorgu=$baglan->prepare($sql);
$sorgu->execute([$_GET['ogrno']]);
$satir=$sorgu->fetch(PDO::FETCH_ASSOC);
?>







<!DOCTYPE html>
<html lang="tr">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
          <link rel="stylesheet" type="text/css" href="style.css" />
          <title>TACEV</title>
          
        </head>
        <body>
            <div class="hepsi">
                <div class="menu">
                    <div class="logo">
                        <img src="robot.png">
                    </div>
                    <ul>
                        <li id="tacev"><a href="tacevana.html">Tacev Teknoloji</a></li>
                        <li><a href="index.php">Öğrenci Listesi</a></li>
                        <li><a href="ekle.php">Öğrenci Ekle</a></li>
                        <li><a href="ogretmenler.php">Öğretmenler</a></li>
                        <li><a href="kurslar.html">Kurslar</a></li>
                    </ul>


                </div>
                <div class="bilgiler">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?=$satir["ad"]?></h5>
                            <h6 class="card-subtitle mb-2 text-muted">Aldığı Kurs: <?=$satir["kurs"]?></h6>
                            <p class="card-text">Öğrencinin ödediği para miktarı: <?=$satir["odenen"]?><br />Öğretmeni: <?=$satir["ogretmen"]?></p>
                        </div>
                    </div>
                </div>
            </div>


