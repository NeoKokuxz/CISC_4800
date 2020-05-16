
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
            $num = mysqli_num_rows($result);

            if ($num > 0) {
                // echo "failed!";
                // echo "Already registered username!";

                $query = "DELETE FROM Data1 WHERE user='$user';";
                $result = mysqli_query($conn, $query);
                echo "user: $user got deleted! </br>";
                echo "Bye!";

            } else {
                echo "failed! </br>";
                echo "Incorrect username/password </br>";
                echo "Or no such user in record";
            }

            mysqli_close($conn);

            // header("location:index.html");

        } else {
            echo "All field are required!";
            die();
        }

        ?>
    </div>
</body>

</html>