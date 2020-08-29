<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron" style="background:url('hospital.png');no-repeat;background-size:cover;height:300px;">
    </div>
<div class="container-fluid">
<div class="row">
<div class="col-md-3">
    <div class="list-group">
        <a href="" class="list-group-item active" style="background-color:#3498db;color:#ffffff;border-color:#3498db">Hastalar Menü</a>
        <a href="hasta_detayları.php" class="list-group-item">Hasta Detayları</a>
        <a href="file-index.php" class="list-group-item">Raporlar-Reçeteler</a>
        <a href="covindex.php"class="list-group-item">Koronovirüs Güncel Verileri</a>
        <a href="https://enabiz.gov.tr/"class="list-group-item">e-Nabız Resmi Sitesi</a>
        <a href="hospital-index.php"class="list-group-item">Çıkış Yap</a>
    </div>
    <hr>
   
</div>
<div class="col-md-8">
    <div class="card">   
    <div class="card-body" style="background-color:#3498db;color:#ffffff;">   
    <h3>Randevu Al</h3>
</div>
    <div class="card-body"> 


            <form class="form-group" action ="func.php" method="POST" enctype="multipart/form-data">
                <label> Adı: </label>
                <input type="text" name="fname" class="form-control"><br>
                <label> Soyadı: </label>
                <input type="text" name="lname" class="form-control"><br>
                <label> Email Adresi: </label>
                <input type="text" name="email" class="form-control"><br>
                <label> Telefon: </label>
                <input type="text" name="contact" class="form-control"><br>
                <label>Doktorlarımız:</label>
                
                <select class="form-control">
                    <option value="Dr Mehmet Kaya 08.00-10.00">Dr. Mehmet Kaya 08.00-10.00</option>
                    <option value="Dr Ali Öz  10.00 -12.00">Dr. Ali Öz 10.00-12.00</option>
                    <option value="Dr Kamil Kara  13.00-15.00">Dr. Kamil Kara 13.00-15.00</option>
                    <option value="Dr Hüseyin Arı 15.00-17.00">Dr. Hüseyin Arı 15.00-17.00</option>
                </select>
                <br>
                <input type="submit" class="btn btn-primary" name="gonder" value ="Randevu Al" >
                
                    </form>



    </div>
</div>
</div>
<div class="col-md-1">

</div>

</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>