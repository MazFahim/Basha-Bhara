<?php  ?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="feature.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Input</title>
    <style type="text/css">
      #inp{
        margin-left: 80px;
      }
      #b{
        background-color: #0FBD04;
        border-radius: 5px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        letter-spacing: 1px;
        padding: 8px 10px;
      }
      #b:visited{
        color: red;
      }
      #b:hover {
        background-color: hotpink;
      }
      #b:active{
        background-color: hotpink;
      }
    </style>
</head>
<body>
    <header>
        <center>
          <h1>House Rent</h1>
        </center>
    </header>
    <br>
    <form action="tenant.php" method="post">
      <div id="inp">
            <label>Enter the floor number:</label>
            <input type="number" name="floor" min="1"><br><br>
            <label>Enter the number of bedrooms you want:</label>
            <input type="number" name="room" min="1"><br><br>
            <label>Enter the number of bathrooms you want:</label>
            <input type="number" name="bath" min="1"><br><br>
            <label>Enter the number of balconies you want:</label>
            <input type="number" name="balc" min="0"><br>
            <label>Enter the price range:</label>
            <input type="number" name="range"><br>
            <label>Where do you want the house:</label>:<br>
            City:&nbsp;<input type="text" name="address">&nbsp;&nbsp;
            Area:&nbsp;<input type="text" name="address">&nbsp;&nbsp;
            Block:&nbsp;<input type="text" name="address">&nbsp;&nbsp;
            Road:&nbsp;<input type="text" name="address">
      </div>
      <section id="sec">
          <div class="head"> 
             <br><h2>Feature</h2>
          </div>
         
          <div class="row">
            <div class="items">
                <img src="cctv.png" alt="" ><br>
                CCTV: <input id="b" type="checkbox" name="feature[]" value="CCTV">
            </div>
            <div class="items">
                <img src="m.png" alt=""><br>
                Elevator: <input id="b" type="checkbox" name="feature[]" value="Elevator">
            </div>
            <div class="items">
                <img src="n.png" alt=""><br>
                Electricity Backup: <input id="b" type="checkbox" name="feature[]" value="Electricity Backup">
            </div>
            <div class="items">
                <img src="download.png" alt=""><br>
                Tiles: <input id="b" type="checkbox" name="feature[]" value="Tiles">
            </div>
            <div class="items">
                <img src="terrace.png" alt=""><br>
                Terrace: <input id="b" type="checkbox" name="feature[]" value="Terrace">
            </div>
            <div class="items">
                    <img src="trash.png" alt=""><br>
                    Trash: <input id="b" type="checkbox" name="feature[]" value="Trash">
            </div>
            <div class="items">
                    <img src="t.png" alt=""><br>
                    Parking: <input id="b" type="checkbox" name="feature[]" value="Parking">
            </div>
            <div class="items">
                <img src="water.png" alt=""><br>
                24 hour water: <input id="b" type="checkbox" name="feature[]" value="24 hour water">
            </div>
         </div>
    </section>
    <footer>
        <center>
              <input id="sub" class="btn" type="submit" name="submit" value="Submit">
        </center>
      </footer>
    </form>
</body>
</html>
