<!DOCTYPE html>
<html lang="en">

<head>
    <title>Project 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <div class="center"> -->
    <form action="create.php" method="post" class="center">
        <label for="register">User Registration</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="********" name="password" required/> <br>
        <input type="submit" name="insert" value="Register!" />
    </form> <br>
    <!-- </div> -->

    <form action="read.php" method="post" class="center">
        <label for="Read">Read Information</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="********" name="password" required/> <br>
        <input type="submit" name="insert" value="Show!" />
    </form> <br>

    <form action="update.php" method="post" class="center">
        <label for="update">Update Registrations</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="Old password" name="password" required/> <br>
        <input type="password" placeholder="new password" name="password1" required/> <br>
        <input type="submit" name="insert" value="Change!" />
    </form> <br>

    <form action="delete.php" method="post" class="center">
        <label for="delete">Delete Registrations</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="********" name="password" required/> <br>
        <input type="submit" name="insert" value="Delete!" />
    </form> <br>

    <div class="succ">
        <?php

$user = $_POST['username'];
$password = $_POST['password'];

if (!empty($user)) {

    //Heroku database
    $host = "us-cdbr-east-06.cleardb.net";
    $dbUsername = "b4b3860ef90b7a";
    $dbPassword = "117519ad";
    $dbname = "heroku_4179949f5f78b65";

    //Local database
    // $host = "localhost";
    // $dbUsername = "root";
    // $dbPassword = "sunsh1ne";
    // $dbname = "cisc4800";

    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    $query = "SELECT * FROM data1 WHERE user='$user' && password=$password;";

    $result = mysqli_query($conn, $query);

    if ($result) {
        $num = mysqli_num_rows($result);
    } else {
        $num = 0;
    }

    if ($num > 0) {
        echo "Sucessful log in! </br> </br>";
        //Change here!
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while ($row = mysqli_fetch_assoc($result)) {
                echo "name: " . $row["user"] . "</br>";
                echo "Welcome Back! </br></br>";
            }

            $query1 = "SELECT * FROM data2 ORDER BY number DESC;";
            $result = mysqli_query($conn, $query1);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "Current Stock data </br>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "Stock: " . $row["message"] . " Price: " . $row["number"];
                    echo " </br>";
                }
            } else {
                echo "0 results";
            }

        } else {
            echo "failed!";
        }

        mysqli_close($conn);
    } else {
        echo "All field are required!";
        die();
    }
}?>
</div>
</body>

</html>