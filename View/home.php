<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="/View/Style/home.css">
</head>
<body>

    <header> <?php include './View/navbar.php'; ?> </header>

    <h1>Gallery</h1>

    <label for="input">Enter Image Url :</label>
    <input type="url" id="input">
    <button id="btn">Enter</button> 

    <div id="warningContainer">

    </div>


    <div id="bigImgContainer" align="middle">
        
    </div>

    <div id="smallImgContainer">
        <img class="smallImg" src="https://images.pexels.com/photos/1402787/pexels-photo-1402787.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="#">
        <img class="smallImg" src="https://images.pexels.com/photos/1252869/pexels-photo-1252869.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="#">
        <img class="smallImg" src="https://images.pexels.com/photos/33045/lion-wild-africa-african.jpg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="#">
        <img class="smallImg" src="https://images.pexels.com/photos/1529881/pexels-photo-1529881.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="#">
    </div>

    <script src="../Script/script.js"></script>
</body>
</html>