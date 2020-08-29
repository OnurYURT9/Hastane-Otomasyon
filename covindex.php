<?
    require 'config.php'
    if( !isset($_SESSION['login'])){
        header("Location:covidindex.php");
        die();
    }
    $kullanici_id = $_SESSION['login'];
   
    //$kullanici = DB::getRow()
?>
<?php
include "logic.php";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
     
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"> </script>
    
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&display=swap" rel="stylesheet">
    
   
    <script src="https://kit.fontawesome.com/996973c893.js" crossorigin="anonymus"></script>
    
    <link rel="stylesheet" href="style.css">
    <title>Covid 19 </title>
</head>
<body>
    
    <div class="container-fliud bg-light p-5 text-center my-3">
        <h1>Covid 19 Verileri</h1>
        <h5 class="text-muted">Dünyadaki tüm covid-19 verilerini her gün sizlerle paylaşmak için ONUR YURT tarafından geliştirilmiş bir açık kaynak projesidir.</h5>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-4 text-warning">
                <h5>Toplam Vaka</h5>
                <?php echo $total_confirmed; ?>
            </div>
            <div class="col-4 text-success">
                <h5>Toplam İyileşen</h5>
                <?php echo $total_recovered; ?>
            </div>
            <div class="col-4 text-danger">
                <h5>Toplam Vefat</h5>
                <?php echo $total_deaths; ?>
            </div>

        </div>
    </div>
    
    <div class="container-fluid">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Ülkeler</th>
                    <th scope="col">Vaka</th>
                    <th scope="col">İyileşen</th>
                    <th scope="col">Vefat Sayısı</th>
                </tr>
            </thead>
            <tbody>
                <?php
                   foreach($data as $key =>$value) {
                       $increase = $value[$days_count]['confirmed']- $value[$days_count_prev]['confirmed']
                ?>

                    <tr>
                        <th>
                            <?php  echo $key; ?>
                        </th>
                        <td>
                            <?php   echo $value[$days_count]['confirmed']; ?>
                            <?php if($increase!=0){ ?>
                                <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?> </small>
                            <?php } ?>
                        </td>
                        <td>
                            <?php   echo $value[$days_count]['recovered']; ?>
                        </td>
                        <td>
                            <?php   echo $value[$days_count]['deaths']; ?>
                        </td>
                        
                    </tr>


                <?php
                   }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>