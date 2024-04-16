<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aircraft page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
class Plane {
    public $model;
    public $speed;
    public $year;
    public $wiki_link;
    public $image;

    public function __construct($speed, $model, $year, $wiki_link, $image) 
    {
        $this->model = $model;
        $this->speed = $speed;
        $this->year = $year;
        $this->wiki_link = $wiki_link;
        $this->image = $image;
    }

    public function displayInfo(){
        echo "<div class='plane-info'>
                <h2>{$this->model}</h2>
                <p><strong>Speed:</strong> {$this->speed}</p>
                <p><strong>Year:</strong> {$this->year}</p>
              </div>";
    }

    public function displayVoteForm(){
        echo "<form action='submit_plane.php' method='post'>
                <input type='hidden' name='model' value='{$this->model}'>
                <input type='hidden' name='speed' value='{$this->speed}'>
                <input type='hidden' name='year' value='{$this->year}'>
                <button type='submit'>Vote {$this->model}</button>
              </form>";
    }
}

$planes = [
    new Plane('780 km/h', 'BelugaXL', '2020', 'https://en.wikipedia.org/wiki/Airbus_BelugaXL', 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/%22Beluga_XL%22_A330-743L_%28cropped%29.jpg/450px-%22Beluga_XL%22_A330-743L_%28cropped%29.jpg'),
    new Plane('903 km/h', 'A320neo', '2016', 'https://en.wikipedia.org/wiki/Airbus_A320neo_family', 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4d/IndiGo_Airbus_A320neo_F-WWDG_%28to_VT-ITI%29_%2828915135713%29.jpg/450px-IndiGo_Airbus_A320neo_F-WWDG_%28to_VT-ITI%29_%2828915135713%29.jpg'),
    new Plane('2,130 km/h', 'Su-57', '2020', 'https://en.wikipedia.org/wiki/Sukhoi_Su-57', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Sukhoi_Design_Bureau%2C_054%2C_Sukhoi_Su-57_%2849581303977%29.jpg/450px-Sukhoi_Design_Bureau%2C_054%2C_Sukhoi_Su-57_%2849581303977%29.jpg'),
    new Plane('1,931 km/h', 'F-35 Lightning II', '2020', 'https://en.wikipedia.org/wiki/Lockheed_Martin_F-35_Lightning_II', 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/F-35A_flight_%28cropped%29.jpg/450px-F-35A_flight_%28cropped%29.jpg'),
    new Plane('2,336 km/h', 'Tornado IDS', '1979', 'https://en.wikipedia.org/wiki/Panavia_Tornado', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/25/RAF_Tornado_GR4_MOD_45155233.jpg/450px-RAF_Tornado_GR4_MOD_45155233.jpg'),
    new Plane('2,469 km/h', 'Su-75 Checkmate', 'TBD', 'https://en.wikipedia.org/wiki/Sukhoi_Su-75_Checkmate', 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/Vladimir_Putin_in_MAKS_Airshow_2021_12.jpg/330px-Vladimir_Putin_in_MAKS_Airshow_2021_12.jpg')
];

$current_index = isset($_GET['index']) ? intval($_GET['index']) : 0;

if (isset($_GET['prev'])) {
    $current_index = max(0, $current_index - 1);
} elseif (isset($_GET['next'])) {
    $current_index = min(count($planes) - 1, $current_index + 1);
}

$current_plane = $planes[$current_index];
?>

<div class="container">
    <div class="plane">
        <?php
        $current_plane->displayInfo();
        ?>
        <a href='<?php echo $current_plane->wiki_link; ?>'>
            <img src="<?php echo $current_plane->image; ?>" alt="<?php echo $current_plane->model; ?> Image" />
        </a>
        <?php $current_plane->displayVoteForm(); ?>
    </div>

    <div class="navigation">
        <?php if ($current_index > 0): ?>
            <a href="?index=<?php echo $current_index - 1; ?>&prev=true">Previous</a>
        <?php endif; ?>
        <?php if ($current_index < count($planes) - 1): ?>
            <a href="?index=<?php echo $current_index + 1; ?>&next=true">Next</a>
        <?php endif; ?>
    </div>
</div>

</body>
</html>
