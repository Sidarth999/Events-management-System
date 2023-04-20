<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Welcome to Samrat </title>
    <style>
  .sign {
  padding-left: 45%;
  padding-top: 5%;
  width: 50%;
  height: 50%;
  background-image: radial-gradient(
    ellipse 50% 35% at 50% 50%,
    #6b1839,
    transparent
  );
  transform: translate(-50%, -50%);
  letter-spacing: 2;
  left: 50%;
  top: 50%;
  font-family: "Clip";
  text-transform: uppercase;
  font-size: 6em;
  color: #ffe6ff;
  text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
    -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
    0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  animation: shine 2s forwards, flicker 3s infinite;
}
@media (max-width: 991.98px) {
  .sign{
  font-size: 3em;
  padding-left: 45%;
  padding-top: 10%;
  }
  .background_image img{
    height: 100px;
    width: 100%;
  }
  .thirdcard{
    padding-top: 10%;
  }

}

/*#c0c0c0*/
@keyframes blink {
  0%,
  22%,
  36%,
  75% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
  28%,
  33% {
    color: #ff65bd;
    text-shadow: none;
  }
  82%,
  97% {
    color: #ff2483;
    text-shadow: none;
  }
}

.flicker {
  animation: shine 2s forwards, blink 3s 2s infinite;
}

.fast-flicker {
  animation: shine 2s forwards, blink 10s 1s infinite;
}

@keyframes shine {
  0% {
    color: #6b1839;
    text-shadow: none;
  }
  100% {
    color: #ffe6ff;
    text-shadow: 0 0 0.6rem #ffe6ff, 0 0 1.5rem #ff65bd,
      -0.2rem 0.1rem 1rem #ff65bd, 0.2rem 0.1rem 1rem #ff65bd,
      0 -0.5rem 2rem #ff2483, 0 0.5rem 3rem #ff2483;
  }
}

@keyframes flicker {
  from {
    opacity: 1;
  }

  4% {
    opacity: 0.9;
  }

  6% {
    opacity: 0.85;
  }

  8% {
    opacity: 0.95;
  }

  10% {
    opacity: 0.9;
  }

  11% {
    opacity: 0.922;
  }

  12% {
    opacity: 0.9;
  }

  14% {
    opacity: 0.95;
  }

  16% {
    opacity: 0.98;
  }

  17% {
    opacity: 0.9;
  }

  19% {
    opacity: 0.93;
  }

  20% {
    opacity: 0.99;
  }

  24% {
    opacity: 1;
  }

  26% {
    opacity: 0.94;
  }

  28% {
    opacity: 0.98;
  }

  37% {
    opacity: 0.93;
  }

  38% {
    opacity: 0.5;
  }

  39% {
    opacity: 0.96;
  }

  42% {
    opacity: 1;
  }

  44% {
    opacity: 0.97;
  }

  46% {
    opacity: 0.94;
  }

  56% {
    opacity: 0.9;
  }

  58% {
    opacity: 0.9;
  }

  60% {
    opacity: 0.99;
  }

  68% {
    opacity: 1;
  }

  70% {
    opacity: 0.9;
  }

  72% {
    opacity: 0.95;
  }

  93% {
    opacity: 0.93;
  }

  95% {
    opacity: 0.95;
  }

  97% {
    opacity: 0.93;
  }

  to {
    opacity: 1;
  }

}
</style>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand  ms-lg-0 ms-3  text-uppercase fw-bold"
          href="#"
           style="padding-left: 5%;">Samrat</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            <div class="input-group">
              <input
                class="form-control"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-primary" type="submit">
                <i class="bi bi-search"></i>
              </button>
            <!--  <input class="form-control mx-5"type="date"placeholder="date"aria-label="date"/>-->
            </div>
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end text-center">
                <li><a class="dropdown-item" href="user/register.php">Register</a></li>
                <li><a class="dropdown-item" href="user/login.php">Sign in</a></li>
                <li>
                  <a class="dropdown-item" href="user/logout.php">Sign out</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <br>
          <ul class="navbar-nav">
            <li class="mx-5">
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                              Dashboard
                </div>
            </li>
            <li>
              <div class="mx-5">
               <img src="images/photo-1511367461989-f85a21fda167.jpeg" alt=".."style="width: 140px; height: 140px; border-radius: 1%;">
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active  mx-5">
                <span>Sidarth Prasad</span>
              </a>
            </li>
            <li class="my-2"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Our Services</span>
              </a>
            </li>
            <li>
              <a href="#orders" class="nav-link px-3" >
                <span class="me-2"><i class="bi bi-cart-check-fill"></i></span>
                <span>Orders</span>
              </a>
            </li>
            <li>
              <a href="#custemers" class="nav-link px-3" >
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Custemers</span>
              </a>
            </li>
            <li>
              <a href="#Quiry" class="nav-link px-3" >
                <span class="me-2"><i class="bi bi-people-fill"></i></span>
                <span>Quiry of Custemers</span>
              </a>
            </li>
            
            <li>
              <a href="../index.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-globe2"></i></span>
                <span>visit Us</span>
              </a>
            </li>
      
            <li class="#"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Addons
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-cart-dash-fill"></i></span>
                <span>Cancel Orders</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>rate us</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->

    <main class="mt-5 pt-1">
      <div class="container-fluid">

        <div class="row">
        </div>
        <div class="row">
          <div class="col-md-12 text-center my-1 background_image" style="background: url(images/images4.jpg">
            <div class="sign ">
              <span class="fast-flicker">S</span>A<span class="flicker">mr</span>at
            </div>

          </div>
        </div>
        <div class="row my-5 text-center">
          <div class="col-lg-4 col-6">
            <div class="card bg-primary text-white h-80" style=" background: url(../image/d1.jpg);">
              <div class="card-body py-5">Decoration</div>
              <div class="card-footer">
               <a href="../decoration.html" style="text-decoration:none;color: white;"> View Details</a> 
                <!--<span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>-->
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="card bg-success text-dark h-80" style=" background: url(../image/food.jpg);">
              <div class="card-body py-5" style="color: green;">Food</div>
              <div class="card-footer" style="background: #0064;">
                             <a href="../food.html" style="text-decoration:none;color: white;"> View Details</a> 
                              <!--<span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                              </span>-->
                            </div>
            </div>
          </div>
          <div class="col-lg-4 col-12 thirdcard">
            <div class="card bg-dark text-white h-80" style=" background: url(../image/music.jpg);">
              <div class="card-body py-5">music</div>
              <div class="card-footer">
               <a href="../entertainment.html" style="text-decoration:none;color: white;"> View Details</a> 
                <!--<span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>-->
              </div>
          </div>
        </div>
      </div>
<div class=" row date" style="padding-right:01.5%; padding-left: 40%;">
<div class="col-lg-6 col-12"> 
</div>
<div class="col-lg-3 col-6  text-center bg-primary text-white ms-auto">
<p>Today :</p>
</div>

<div class="col-lg-3 col-6 ml-auto bg-primary text-white">
<p id="date"></p>

<script>
n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
d = n.getDate();
document.getElementById("date").innerHTML = d + "/" + m + "/" + y; 
</script>
</div>
</div>



<div class="row" id="orders">
          <div class="col-md-12 mb-3">
            <div class="card" >
              <div class="card-header text-center">
                <span><i class="bi bi-table me-2 "></i></span>Order of custemers
              </div>
              <a href="insert.php">
                <button type="button" class="btn btn-success float-end  mx-5" data-target="#mymodel" data-toggle="modal">
                  Add new
                </button></a>
              <div class="card-body">
                <div class="table-responsive">
                  <table
                    id="example"
                    class="table table-striped data-table";>
                   
                      <tr class="text-center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Event Name</th>
                        <th>Event Date</th>
                        <th>Payments</th>
                        <th>Delete</th>
                        <th>update</th>
                        <th>url</th>
                        
                      </tr>
<?php
 include 'config.php'; 
 $q = "select * from booking ";
 $query = mysqli_query($con,$q);
 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['EventName'];  ?> </td>
 <td> <?php echo $res['EventDate'];  ?> </td>
 <td> <?php echo $res['Payments'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white"> Update </a> </button> </td>
 <td><button class="btn-danger btn"> <a href="<?php echo $res['url'];?>">Click </button></td>
 </tr>
 <?php 
 }
  ?>
</table>
  </div>
 </div>





 <hr id="custemers">
 <div class="card-header text-center">
   <span><i class="bi bi-table me-2 "></i></span>List of  custemers
 </div>
 <div class="row">
  <div class="col-lg-6 col-12">
 <table class=" mx-5" >
 <tr class="">
 <th class="" style="color: purple;">Name of custerms</th>
 </tr>
              <?php
               include 'config.php'; 
               $q = "select * from booking ";
               $query = mysqli_query($con,$q);
               while($res = mysqli_fetch_array($query)){
               ?>
               <tr class="">
               <td style="color: blue";> <?php echo $res['name'];  ?> </td>
               </tr>
               <?php 
               }
                ?>

 </table>
</div>
<div class="col-lg-6 col-12">
  <div class="card ">
           <img src="images/graph.png" width="300" height="250">   
            </div>
  </div>
 </div>
 <hr>
            </div>
          </div>
        </div>
      </div>
<div class="row" id="Quiry ">
                <div class="col-md-12 mb-3">
                  <div class="card">
                    <div class="card-header text-center">
                      <span><i class="bi bi-table me-2 "></i></span>Quiry of custemers
                    </div>
                    <div class="card-body" id="orders">
                      <div class="table-responsive">
                        <table
                          id="example"
                          class="table table-striped data-table";>
                         
                            <tr class="text-center">
                              <th>Name</th>
                              <th>email id</th>
                              <th>phone no</th>
                              <th>querry</th>
                              <th>Delete</th>  
                            </tr>
      <?php
       include 'config.php'; 
       $q = "select * from contactus ";
       $query = mysqli_query($con,$q);
       while($res = mysqli_fetch_array($query)){
       ?>
       <tr class="text-center">
       <td> <?php echo $res['name'];  ?> </td>
       <td> <?php echo $res['email'];  ?> </td>
       <td> <?php echo $res['phone'];  ?> </td>
      
       <td> <?php echo $res['textme'];  ?> </td>
       <td> <button class="btn-danger btn"> <a href="q_delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
       
       </tr>
       <?php 
       }
        ?>
      </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
    </main>
    <hr>
    <footer>
      <p class="copyright text-center">Sonu Kumar (Nit Sikkim) @Samrat group © cse2019-23</p>
    </footer>
    <hr>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="./js/jquery-3.5.1.js"></script>
    <script src="./js/jquery.dataTables.min.js"></script>
    <script src="./js/dataTables.bootstrap5.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html>
