
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
        <label for="Read">Read Registrations</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="********" name="password" required/> <br>
        <input type="submit" name="insert" value="Show!" />
    </form> <br>

    <form action="update.php" method="post" class="center">
        <label for="update">update Registrations</label> <br>
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

    <form action="test.php" method="post" class="center">
        <label for="delete">Delete Registrations</label> <br>
        <input type="text" placeholder="Enter Username" name="username" required/> <br>
        <input type="password" placeholder="********" name="password" required/> <br>
        <input type="submit" name="insert" value="Delete!" />
    </form> <br>

    <div>
    <?php echo '<p>Hello World</p>'; ?> 
    </div>
</body>

</html>