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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <title>BashaBhara.com</title>

      <style type="text/css">
        #b{
          padding: 10px 15px 10px 15px;
        }
      </style>

      <script type="text/javascript">

          function togglemenu(){

          document.getElementById('sidebar').classList.toggle('active');
          }
      </script>

    </head>
    <body>
      <form action="home.php" method="post">
        <div class="profile" >
            <a href="Login.php"><img src="images/profile.png" style="width:60px;"></a>
        </div>
        <center><h1>BashaBhara.Com</h1></center>
        <div class="table-box">
        <div class="table-row">
        <div class="table-cell">
          <button id="b" type="button" class="btn btn-primary" onclick="document.location='feature/feature.php'">Landlord</button>
        </div>
        <div class="table-cell">
          <button id="b" type="button" class="btn btn-success" onclick="document.location='Tenant/tenant.php'">Tenant</button>
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
        <!--<li>Newest</li>
        <li>Oldest</li>-->
        <li>Price(High-Low)</li>
        <li>Rating(Highest)</li>
        <li>Rating(Lowest)</li>
        </ul>
        </div>

        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat1.png" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat2.jpg" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat3.png" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat1.png" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
          </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat2.jpg" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat3.png" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat1.png" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>
        <div class="part_1">
          <table>
            <td><a href="index.html"><img src="images/flat2.jpg" style="width:400px;"></a></td>
            <td>
              <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Chadgaon abashik area,A-block...</h2>
              <h1>&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/taka.png" width="17"/> 40,000</h1>
              <h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/bedlogo.png" width="15"/>4 &nbsp; <img src="images/bathtub.png" width="15"/> 5 &nbsp;&nbsp; 3000 sqft.</h4>
            </td>
        </table>
        </div>


      </form>
    </body>
    </html>
    <?php

  }
?>
