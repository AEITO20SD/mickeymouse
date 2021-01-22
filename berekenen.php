<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" type="image/png" href="Photo/Logo.png">
    </head>
    <header>
        <a href="index.html">
            <img id="logo" src="Photo/Logo.png">
        </a>
        <h3>Rederij Bestevaer</h3>
        <a href="berekenen.php">Berekenen</a>
        <a href="contact.php">Contact</a>
        <a href="geschiedenis.html">Geschiedenis van het bedrijf</a>
        <a href="boot.html">Boot tracking</a>
    </header>
    <body>
        
        <div class="Box">
            <div class="BoxInsideBox">
                <p>

                </p>
            </div>
            <div class="BoxInsideBox">
                <h2>Boot tracking<br></h2>
                
                <form action="" method="post">
Hoeveel ton aan lading heeft u? <input type="number" name="ton"><br><br>

Hoeveel lading in m3 heeft u? <input type="number" name="m3"><br>

  <p>Welk seizoen is het?</p>
  <input type="radio" id="zomer" name="seizoen" value="0,8">
  <label for="zomer"> Zomer</label><br>
  <input type="radio" id="herfst" name="seizoen" value="0,9">
  <label for="herfst"> herfst</label><br>  
  <input type="radio" id="lente" name="seizoen" value="1">
  <label for="lente"> lente</label><br>
  <input type="radio" id="winter" name="seizoen" value="1,2">
  <label for="winter"> winter</label><br>
  

  <p>Wat voor soort water is het?</p>
  <input type="radio" id="zoet" name="water" value="1">
  <label for="zoet"> zoet water</label><br>
  <input type="radio" id="zout" name="water" value="1,2">
  <label for="zout"> zout water</label><br><br> 

  <input type="submit" name="submit" value="Berekenen">
</form> 

<?php 



if( isset( $_POST['submit'] ) ){ 
  $ton = $_POST["ton"];
  $m3 = $_POST["m3"];
  $water = $_POST["water"];
  $seizoen =  $_POST["seizoen"];
  $tonberekening = (715000 * $water * $seizoen) - $ton;
  $m3berekening = (120000 * $water * $seizoen) - $m3;
  
  if (empty($_POST['ton']) or empty($_POST["m3"]) or empty($_POST["water"]) or empty($_POST["seizoen"])) {
    echo "Vul alles in";

    
  }
else if ($ton < 715001 and $m3 < 120001) {
echo "U kunt op weg, goede reis.<br>";
echo "Het resterend aantal ton die u nog kan toevoegen is: $tonberekening<br>";
echo "Het resterend aantal m3 die u nog kan toevoegen is: $m3berekening<br>";
}

else if ($ton > 715001 and $m3 < 120001) {
echo "U kunt op weg, goede reis.<br>";
echo "Het resterend aantal ton die u nog kan toevoegen is: $tonberekening<br>";
echo "Het resterend aantal m3 die u nog kan toevoegen is: $m3berekening<br>";
}

else if ($ton < 715000 and $m3 > 120000 ) {
echo "U kunt op weg, goede reis.<br>";
echo "Het resterend aantal ton die u nog kan toevoegen is: $tonberekening<br>";
echo "Het resterend aantal m3 die u nog kan toevoegen is: $m3berekening<br>";
}

else {
echo "U heeft te veel aan boord, haal wat vracht van uw boot af. <br>";
echo "U moet zoveel ton van uw boot afhalen:<br>";
echo (abs($tonberekening));
echo "<br>";
echo "U moet zoveel m3 aan ruimte van uw boot halen:<br>";
echo (abs($m3berekening));
}
    
  }
 
    ?> 
            </div>
    </body>
</html>