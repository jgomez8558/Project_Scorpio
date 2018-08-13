<?php
include('connection.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Settings</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="setting.css" />
    </head>
    <body>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col">
            <img src="https://dz2cdn4.dzone.com/storage/rc-covers/8757499-recardheader90.png" id="background">
            <i class="far fa-edit edit"></i>
            <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
            <h3 class="name">UserName
              <i class="far fa-edit"></i>
            </h3>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-8 col-md-8 col-sm-12 p-0">
            <div class="card classes">
              <div class="card-body">
                <h5 class="card-title">Classes</h5>
              </div>
              <div class="card m-3">
                <div class="card-body">
                  <h5 class="card-title">Class Name
                    <i class="far fa-edit mr-2"></i>
                    <i class="far fa-trash-alt"></i>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">MM/DD/YYYY</h6>
                  <p class="card-text">Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it.</p>
                  <a href="#" class="card-link">Register</a>
                </div>
              </div>
              <div class="card m-3">
                <div class="card-body">
                  <h5 class="card-title">Class Name
                    <i class="far fa-edit mr-2"></i>
                    <i class="far fa-trash-alt"></i>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">MM/DD/YYYY</h6>
                  <p class="card-text">Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it.</p>
                  <a href="#" class="card-link">Register</a>
                </div>
              </div>
              <div class="card m-3">
                <div class="card-body">
                  <h5 class="card-title">Class Name
                    <i class="far fa-edit mr-2"></i>
                    <i class="far fa-trash-alt"></i>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">MM/DD/YYYY</h6>
                  <p class="card-text">Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it.</p>
                  <a href="#" class="card-link">Register</a>
                </div>
              </div>
              <div class="card m-3">
                <div class="card-body">
                  <h5 class="card-title">Class Name
                    <i class="far fa-edit mr-2"></i>
                    <i class="far fa-trash-alt"></i>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-muted">MM/DD/YYYY</h6>
                  <p class="card-text">Wrote water woman of heart it total other. By in entirely securing suitable graceful at families improved. Zealously few furniture repulsive was agreeable consisted difficult. Collected breakfast estimable questions in to favourite it.</p>
                  <a href="#" class="card-link">Register</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 p-0">
            <div class="card about">
              <div class="card-body">
                <h5 class="card-title">About UserName</h5>
                <form>
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="FirstName">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" placeholder="LastName">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Address">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <input type="text" class="form-control" placeholder="Teacher at some school/place located somewhere">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <input type="password" class="form-control" placeholder="(123)456-7890">
                    </div>
                  </div>
                  <div class="row mt-2">
                    <div class="col">
                      <input type="password" class="form-control" placeholder="someone@somewhere.com">
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <a href="profile.php"> <button type="button" class="btn btn-primary mt-3 cancel">Cancel</button> </a>
            <button type="button" class="btn btn-primary mt-3 save">Save</button>
          </div>
        </div>
      </div>
    </body>
</html>


