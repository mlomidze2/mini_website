<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User</title>
    <link rel="stylesheet" href="/View/Style/user.css">
</head>
<body>

    <header> <?php include './View/navbar.php'; ?> </header>

    <h1>User Page</h1>

    <div id="reg-container">

        <form action="../DB/register.php" method="post">

            <fieldset><br>

                <legend>Register</legend>

                <label for="username">Username</label><br><br>
                <input type="text" name="username" id="username" placeholder="Username"><br><br>

                <label for="password">Password</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>
                
                <input type="submit" value="Register" name="submit">

            </fieldset>

        </form> 


        <form action="../DB/update.php" method="post">

            <fieldset><br>

                <legend>Update</legend>

                <label for="username">Username</label><br><br>
                <input type="text" name="username" id="username" placeholder="Username"><br><br>

                <label for="password">Password</label><br><br>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>

                <select name="id">
                    <?php
                    include '../DB/connection.php';
                    include '../DB/functions.php';

                    show_data();

                    ?>
                </select>
                
                <input type="submit" value="Update" name="submit">

            </fieldset>

        </form> 


        

    </div>



</body>
</html>