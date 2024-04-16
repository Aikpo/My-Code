        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "group_20";
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        // Check the connection 
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Prepare SQL
        $stmt = $conn->prepare("INSERT INTO planes (model, speed, year) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $model, $speed, $year);
        
        // Get data 
        $model = $_POST['model'];
        $speed = $_POST['speed'];
        $year = $_POST['year'];
        
        // exe
        $stmt->execute();
        
        echo "Plane information submitted successfully";
        $stmt->close();
        $conn->close();
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