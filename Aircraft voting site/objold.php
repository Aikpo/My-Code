<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aircraft page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="container">
    <div class="plane">
        <?php
           class Plane {
            public $model;
            public $speed;
            public $year;

            public function __construct($speed, $model, $year) 
            {
                $this->model = $model;
                $this->speed = $speed;
                $this->year = $year;
            }

            public function displayInfo(){
                echo "<div class='plane-info'>
                        <h2>$this->model</h2>
                        <p><strong>Speed:</strong> $this->speed</p>
                        <p><strong>Year:</strong> $this->year</p>
                      </div>";
            }
        }    
        ?>
        
        <?php
        $belugaXL = new Plane('780 km/h', 'BelugaXL', '2020');
        $belugaXL->displayInfo();
        ?>
        <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="BelugaXL">
    <input type="hidden" name="speed" value="780 km/h">
    <input type="hidden" name="year" value="2020">
    <button type="submit">Vote BelugaXL</button>
       </form>

        <a href='https://en.wikipedia.org/wiki/Airbus_BelugaXL'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/%22Beluga_XL%22_A330-743L_%28cropped%29.jpg/450px-%22Beluga_XL%22_A330-743L_%28cropped%29.jpg" alt="BelugaXL Image" />
        </a>
    </div>

    <div class="plane">
        <?php
        $airbusA320neo = new Plane('903 km/h', 'A320neo', '2016');
        $airbusA320neo->displayInfo();
        ?>
                <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="A320neo">
    <input type="hidden" name="speed" value="903 km/h">
    <input type="hidden" name="year" value="2016">
    <button type="submit">Vote A320neo</button>
       </form>
         <a href='https://en.wikipedia.org/wiki/Airbus_A320neo_family'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/IndiGo_Airbus_A320neo_F-WWDG_%28to_VT-ITI%29_%2828915135713%29.jpg/450px-IndiGo_Airbus_A320neo_F-WWDG_%28to_VT-ITI%29_%2828915135713%29.jpg" alt="A320neo Image" />
        </a>
    </div>

<div class="plane">
        <?php
        $Su57 = new Plane('2,130 km/h', 'Su-57', '2020');
        $Su57->displayInfo();
        ?>
                <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="Su-57">
    <input type="hidden" name="speed" value="2,130 km/h">
    <input type="hidden" name="year" value="2020">
    <button type="submit">Vote Su-57</button>
       </form>
         <a href='https://en.wikipedia.org/wiki/Sukhoi_Su-57'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Sukhoi_Design_Bureau%2C_054%2C_Sukhoi_Su-57_%2849581303977%29.jpg/450px-Sukhoi_Design_Bureau%2C_054%2C_Sukhoi_Su-57_%2849581303977%29.jpg" alt="A320neo Image" />
        </a>
    </div>


<div class="plane">
        <?php
        $F35LightningII = new Plane('1,931 km/h', 'F-35 Lightning II', '2020');
        $F35LightningII->displayInfo();
        ?>
                <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="F-35 Lightning II">
    <input type="hidden" name="speed" value="1,931 km/h">
    <input type="hidden" name="year" value="2006">
    <button type="submit">Vote F-35 Lightning II</button>
       </form>
         <a href='https://en.wikipedia.org/wiki/Lockheed_Martin_F-35_Lightning_II'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/F-35A_flight_%28cropped%29.jpg/450px-F-35A_flight_%28cropped%29.jpg" alt="A320neo Image" />
        </a>
    </div>

    <div class="plane">
        <?php
        $TornadoIDS = new Plane('2,336 km/h', 'Tornado IDS', '1979');
        $TornadoIDS->displayInfo();
        ?>
                <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="Tornado IDS">
    <input type="hidden" name="speed" value="2,336 km/h">
    <input type="hidden" name="year" value="1979">
    <button type="submit">Vote Tornado IDS</button>
       </form>
         <a href='https://en.wikipedia.org/wiki/Panavia_Tornado'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/RAF_Tornado_GR4_MOD_45155233.jpg/450px-RAF_Tornado_GR4_MOD_45155233.jpg" alt="A320neo Image" />
        </a>
    </div>

    <div class="plane">
        <?php
        $Su75 = new Plane('2,469 km/h', 'Su-75 Checkmate', 'TBD');
        $Su75->displayInfo();
        ?>
                <form action="submit_plane.php" method="post">
    <input type="hidden" name="model" value="Su-75 Checkmate">
    <input type="hidden" name="speed" value="2,469 km/h">
    <input type="hidden" name="year" value="TBD">
    <button type="submit">Vote Su-75 Checkmate</button>
       </form>
         <a href='https://en.wikipedia.org/wiki/Sukhoi_Su-75_Checkmate'>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Vladimir_Putin_in_MAKS_Airshow_2021_12.jpg/330px-Vladimir_Putin_in_MAKS_Airshow_2021_12.jpg" alt="A320neo Image" />
        </a>
    </div>


</body>
</html>