<?php
    $error = "";

    include "nghiapham_project4_connect.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {  
        try {
            $id = $_GET['id'];
            echo $_POST['username'];
            echo $_POST['pass'];
            $sql = "UPDATE `login` SET username='".$_POST['username']."',pass = '".$_POST['pass']."' WHERE `username`= '$id'";
  
            if ($conn->query($sql) === TRUE) {
                header("Location:nghiapham_project4_retrival.php");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
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
    <title>Updating...</title>
    <h1>Please enter your new information.</h1>
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
<?php
   include "nghiapham_project4_connect.php";
   $id = $_GET['id'];

   $sql = "select * from login where username='$id'";
   $result=mysqli_query($conn,$sql);
  
   while ($row=mysqli_fetch_array($result)) {
       $user = $row['username'];
       $pass = $row['pass'];
    }
?>
<body class="container ">
    <form action = "" method = "post" autocomplete="off">
        <div class="container ">
            <input type="hidden" name="id" value="<?php echo $id ?>"/>
            <label for="uname"><b>User Name</b></label>
            <input type="text" value="<?php echo $user;?>" name="username" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" value="<?php echo $pass;?>" name = "pass" required>
            <input class="button" type = "submit" value = " Update " />
            <input formaction="register.php" type="submit" value="Go back">
    </form>
<div style = "font-size:11px; color:#cc0000; margin-top:10px">
    <?php
        echo "<h2>".$error."</h2>";
    ?>
</div>                 
</div>
</body>
</html>