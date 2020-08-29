<!DOCTYPE html>
<?php include("func.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasta Detayları</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
    integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" 
    crossorigin="anonymous">
</head>
<body>
    
<div class="jumbotron" style="background:url('hospital.png');no-repeat;background-size:cover;height:300px;"></div>
<div class="container-fluid">
<div class="card">
            <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
            <div class="row">
            <div class="col-md-2"></div>
                <a href="hospital-admin.php" class="btn btn-light">Anasayfaya Dön</a>
                </div>
                <div class="col-md-3"> <h3>Hasta Detayları</h3>
                </div>
               <div class="col-md-8">
                    <form class="form-group" action="func.php" method="post">
                   
                    </form>

               </div>
            </div>
            </div>
<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
</div>
<table class="table">
  <thead>
    <tr>
      <th>Hasta Adı:</th>
      <th>Hasta Soyadı:</th>
      <th>E mail:</th>
      <th>İletişim/Tel:</th>
      <th>Doktor:</th>
      
    </tr>
  </thead>
  <tbody>
    <?php 
        get_patient_details();
    ?>
    
  </tbody>
</table>
</div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>