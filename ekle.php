<?php
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql="INSERT INTO 'ogrenciler' ('ogrno', 'ograd', 'kurs', 'ogretmen', 'donem', 'odenen') VALUES (NULL, ?, ?, ?, ?, ?);";
    $dizi=[$_POST["ad"],$_POST["kurs"],$_POST["ogretmen"],$_POST["donem"],$_POST["odenen"]];
    $sth=$baglan->prepare($sql);
    $sonuc=$sth->execute($dizi);

}?>





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
                <div class="container">
                    <form action="" method="post" class="row mt-4 g-3">
                        <div class="col-6">
                            <label for="ad" class="form-label">Ad</label>
                            <input type="text" class="form-control" name="ad">
                        </div>
                        <div class="col-6">
                            <label for="kurs" class="form-label">Kurs</label>
                            <input type="text" class="form-control" name="kurs">
                        </div>
                        <div class="col-6">
                            <label for="ogretmen" class="form-label">Öğretmen</label>
                            <input type="text" class="form-control" name="ogretmen">
                        </div>
                        <div class="col-6">
                            <label for="donem" class="form-label">Dönem</label>
                            <input type="text" class="form-control" name="donem">
                        </div>
                        <div class="col-6">
                            <label for="odenen" class="form-label">Ödenen</label>
                            <input type="text" class="form-control" name="odenen">
                        </div>
                        
                    </form>
                    <br />
                    <button  type="submit" name="kaydet" class="btn btn-primary mt-4">Kaydet</button>
            </div>
        </body>
            