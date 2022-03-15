<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/Styles/main_style.css">
    <link rel="stylesheet" href="/Styles/project_style.css">
</head>
<!-- Ensure script gets run when opening page -->
<body onLoad="loadGame()">
    <?php include ('../Gala projekts/PHP/navbar.php'); ?>

    <div class="maincontent">
        <div class="header">
            <h1 class="emphasized">Krāsu spēle</h1>
            <h4>Izvēlies pareizo krāsu pēc RGB apzīmējuma:</h4>
            <!-- Outputs color to find -->
            <span id="colorDisplay"></span>
        </div>

        <!-- Color change button and message -->
        <div class="options">
            <button id="reset">Gribu citas krāsas</button>
            <span id="message"></span>
        </div>
        
        <!-- Create color circles -->
        <div class="container">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>  
    </div>
    
    <?php include ('../Gala projekts/PHP/footer.php'); ?>
    <script src="/Scripts/project.js"></script>
</body>
</html>