<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/Styles/main_style.css">
    <link rel="stylesheet" href="/Styles/gallery_style.css">
</head>
<body>
    <?php include ('../Gala projekts/PHP/navbar.php'); ?>

    <div class="maincontent">
        <!-- Create table of photos -->
        <table>
            <!-- Create row of photos -->
            <tr>
                <!-- Create table cell, place photo in it, text to output if photo unavailable-->
                <!-- onclick function opens gallery view -->
                <td><img src="/Images/blurry.jpg" alt="Skats" onclick="openModal()"></td>
                <td><img src="/Images/glezna.jpg" alt="Glezna" onclick="openModal()"></td>
                <td><img src="/Images/lauks.jpg" alt="Lauks" onclick="openModal()"></td>
            </tr>

            <tr>
                <td><img src="/Images/grafiti.jpg" alt="Grafiti" onclick="openModal()"></td>
                <td><img src="/Images/rudens.jpg" alt="Rudens" onclick="openModal()"></td>
                <td> <img src="/Images/pils.jpg" alt="Pils" onclick="openModal()"></td>
            </tr>

            <tr>
                <td><img src="/Images/skats.jpg" alt="Skats" onclick="openModal()"></td>
                <td><img src="/Images/spirale.jpg" alt="Kaktuss" onclick="openModal()"></td>
                <td><img src="/Images/sunas.jpg" alt="Sūnas" onclick="openModal()"></td>
            </tr>
        </table>

        <!-- Create gallery view -->
        <div id="myModal" class="modal">
            <!-- Add exit button -->
            <span class="close cursor" onclick="closeModal()">&times;</span>

            <!-- Add slides with photos -->
            <div class="modal-content">
                <div class="slides">
                    <img src="/Images/blurry.jpg" width="150%">
                </div>

                <div class="slides">
                    <img src="/Images/glezna.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/lauks.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/grafiti.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/rudens.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/pils.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/skats.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/spirale.jpg" width="100%">
                </div>

                <div class="slides">
                    <img src="/Images/sunas.jpg" width="100%">
                </div>

                <!-- Arrows to change the slide -->
                <a class="prev" onclick="changeSlides(-1)">&#10094;</a>
                <a class="next" onclick="changeSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>

    <?php include ('../Gala projekts/PHP/footer.php'); ?>

    <script src="/Scripts/gallery.js"></script>
</body>
</html>