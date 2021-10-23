<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieval</title>
    <h1><strong>For admin only</strong></h1>
    <h2><i>Go away Mr. Hacker!</i></h2>
</head>
<body>
    <table>
        <thead>
            <th class ="w3-blue">User Name</th>
            <th class ="w3-blue">Password</th>
            <th class ="w3-blue">Action</th>
        </thead>
        <tbody>
            <?php      
                include "nghiapham_project4_connect.php";                      
                $sql = "select * from login";
                      
                $result=mysqli_query($conn,$sql);
                while ($row=mysqli_fetch_array($result)) {
                    echo "<tr>
                        <td align= 'center'>".$row['username']."</td>
                        <td align= 'center'>".$row['pass']."</td>
                        <td>
                        <button ><a href='nghiapham_project4_update.php?id=".$row['username']."'>Update</a></button>
                        <button ><a href='nghiapham_project4_delete.php?id=".$row['username']."'>Delete</button>
                        </td>
                        </tr>";
                }
                $conn-> close();
            ?>
        </tbody>
    </table>
    </table>
    <form>
        <input formaction="register.php" type="submit" value="Back to safe zone!">
    </form>
</body>
</html>