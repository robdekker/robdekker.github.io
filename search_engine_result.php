<!DOCTYPE html>
<html>
<head>
  <title>Search Engine</title>
  <link type="text/css" rel="stylesheet" href="search_engine (Wrong).css">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/css?family=Fascinate+Inline|Quicksand:300|Raleway:200" rel="stylesheet">
  <!-- <link rel="shortcut icon" href="http://www.stickers.be/images/productShots/large/Bloemen/Full-Color/bloemen-078FC3.png" type="image/x-icon">
  #afbeelding toevoegen
  -->


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script> 
    /* Open when someone clicks on the span element */
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }


  </script>
</head>

<body>
  
  <div id="banner">

    <!-- The overlay -->
  <div id="myNav" class="overlay">

    <!-- Button to close the overlay navigation -->
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#">Home</a>
      <a href="#">Homework</a>
      <a href="#">Something</a>
      <a href="#">Contact</a>
    </div>

    </div>

<!-- Use any element to open/show the overlay navigation menu -->
<span class="menu-button" onclick="openNav()"><i class="fa fa-bars" style="font-size:48px;padding:26px;"></i>MENU</span>

  </div>

  <!--<span onclick="openNav()"><i class="fa fa-bars"></i></span>-->

  <div id="section">
    <h2>Typ your search query below:</h2>
      <form action="search_engine.php" method="post">
        <input type="search" name="zoeken" placeholder="Enter query here..." id="zoeken">
        <button type="submit" class="zoeken">Search</button>
      </form>

    <p>U heeft gezocht op de query: "<?php echo $_POST["zoeken"]; ?>"<br>
Dit gaf echter geen resultaten.</p>
  
  </div>

  <!-- 
  <div id="section">
    <p>Type your search query below:</p>
    <a><input type="search" name="zoeken" placeholder="Enter query here..." id="zoeken"></a>
    <button type="submit" class="button">Zoek</button>
  </div>
  -->

<!--
  <div id="balk">
    
      <ul class="pager">
        <li><a href="#"><i class="fa fa-arrow-circle-left" style="font-size:36px"></i></a></li>
        <li><a href="#"><i class="fa fa-arrow-circle-right" style="font-size:36px"></i></a></li>
      </ul>
    
  </div>
-->

  
</body>

</html>