<?php
    $error = "";

    include "nghiapham_project4_connect.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
  
    try {
        $sql = "SELECT * From login Where username='".$_POST['username']."'";
        $result = $conn->query($sql);
           
        if ($result) {
            if($row = mysqli_num_rows($result) > 0)
            $error = "Please use different Username..!";
                else {                   
                    $error = "Username is Acceptable..!";
                    $sql = "INSERT INTO login(username,pass) VALUES('".$_POST['username']."','".$_POST['password']."')";
                    $res = $conn->query($sql);                 
                }
            }
        }
    catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        }
    }
?>
  
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <h1>You must register an account!</h1>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .container {
            padding: 16px;
            padding-left: 20%;
            padding-right: 20%;
        }

    </style>
</head>
<body class="container ">
    <form action = "" method = "post" autocomplete="off">
        <div class="container ">
            <label for="uname"><b>User Name</b></label>
            <input type="text" placeholder="User Name" name="username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name = "password" required>
            <input class="button" type = "submit" value = " Register " />
            <input formaction="nghiapham_project4_retrieval.php" type="submit" value="Do not click!">
    </form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px">
    <?php
        echo "<h2>".$error."</h2>";
    ?>
</div>                 
</div>
</body>
</html>