<?php 
    require 'config.php';
    if ( $_POST ) {
       $email = $_POST['email'];
       $sifre = $_POST['sifre'];

       $kontrol = DB::getRow("SELECT * FROM uyeler WHERE email=? AND sifre=?",array(
        $email,
        $sifre
    ));
    if($kontrol){
       $_SESSION['login'] = $kontrol->id;
       header("Location:hospital-admin.php?error=1");
       die();
    }
    else
    {
        header("Location:index.php?succes=1");
        die();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    #inputbtn:hover{cursor:pointer;}
  </style>

  <body>
  
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;">
      <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="steteskop.jpg" class="card-img-top" >
            <div class="card-body">
              <center>
              <h5>ADMİN PANELİ</h5><br>
              <form class="form-group" action="func.php" method="post">
                <div class="row">
                  <div class="col-md-4"><label>Kullanıcı Adı: </label></div>
                  <div class="col-md-8"><input type="text" name="username" class="form-control" placeholder="Kullanıcı Adı Giriniz:" required/></div><br><br>
                  <div class="col-md-4"><label>Şifre: </label></div>
                  <div class="col-md-8"><input type="password" class="form-control" name="password" placeholder="Şifre Giriniz:" required/></div><br><br><br>
                </div>
                <center><input type="submit" id="ab1" name="login_submit" value="Giriş Yap" class="btn btn-primary"></center>
              </form>
            </center>
            </div>
          </div>
        </div>
         <div class="col-md-7"></div>
      </div>
    </div>
    <div class="container-fluid" style="margin-top:60px;margin-bottom:60px;color:#34495E;" >
    <div class="row">
    <div class="col-md-1"></div>
        <div class="col-md-4">
          <div class="card">
            <img src="steteskop.jpg" class="card-img-top" >
            <div class="card-body">
              <center>
                <h3>HASTA GİRİŞİ</h3>
               
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="col-md-4"><label>Kullanıcı E Mail: </label></div>
                        <input type="email" name="email" class="form-control" placeholder="Email Giriniz:" required="">
                        
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <div class="col-md-4"><label>Kullanıcı Şifre: </label></div>
                        <input type="password" name="sifre" class="form-control" placeholder="Şifre Giriniz:" required="">
                    </div>
                    
                    <div class="form-group">
                    <center><input type="submit" id="inputbtn" name="gonder2" value="Giriş Yap" class="btn btn-primary"></center>
                    </div>
                </form>
            </div>
            <?php if ( isset($_GET['success']) ): ?>
                <div class="alert alert-success">
                    Başarıyla kayıt oldunuz.
                </div>
            <?php endif ?>

            <?php if ( isset($_GET['error']) ): ?>
                <div class="alert alert-danger">
                    Email veya şifre hatalı.
                </div>
            <?php endif ?>

            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Üye Değilmisin? <a href="kayit-ol.php"> Üye Ol</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>