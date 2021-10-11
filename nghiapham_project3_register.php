    <?php
        $servername = "localhost";
        $username = "root";
        $password = "nghia26102003";
        $database="username_database";
        
        try {
            $conn = new mysqli($servername, $username, $password, $database);
            $sql = "SELECT * From login Where username='".$_POST['username']."'";
            $result = $conn->query($sql);
            if ($result) {
                if($row = mysqli_num_rows($result) > 0)
                    echo "Please use different Username..!";
                else {
                    echo "Username is Acceptable..!";
                    $sql = "INSERT INTO username_database VALUES('".$_POST['username']."')";
                    $res = $conn->query($sql);
                }
            }
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    ?>