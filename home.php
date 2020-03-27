<?php
  include('server.php');
?>
<?php
  if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
  }
  if (isset($_SESSION['username'])) {
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <link rel="stylesheet"  type="text/css" href="css/Home.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Bashavara.com</title>

    <script type="text/javascript">

        function togglemenu(){

        document.getElementById('sidebar').classList.toggle('active');
        }
    </script>

    </head>
    <body>
      <form action="Login.php" method="post">
        <div class="navbar">
          <img src ="images/navbar.png"  width="60">
        </div>
        <div class="profile" >
          <input type="image" src="images/profile.png" name="Profile"  width="60">
        </div>
        <center><h1>BashaVara.Com</h1></center>
        <div class="table-box">
        <div class="table-row">
        <div class="table-cell">

            <p> <img src="images/location.png" width="30"/> Chittagong</p>
        </div>
        <div class="table-cell">
        <p> Family</p>
        </div>
        </div>
        </div>
        <div id="sidebar" onclick="togglemenu()">
        <div class="toggle-btn">
        <span></span>
        <span></span>
        <span></span>
        </div>
        <ul>
        <li>Newest</li>
        <li>Oldest</li>
        <li>Price(High-Low)</li>
        <li>Rating(Highest)</li>
        <li>Rating(Lowest)</li>
        </ul>
        </div>

        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/> 4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4> <img src="images/bedlogo.png" width="15"/> 4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/> 4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/> 4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>
        <div class="part_1">
        <p>Chadgaon abashik area,A-block...</p>
        <h1><img src="images/taka.png" width="17"/> 40,000</h1>
        <h4><img src="images/bedlogo.png" width="15"/> 4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
        </div>


      </form>
    </body>
    </html>
    <?php

  }
?>
