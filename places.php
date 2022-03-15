<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Styles/main_style.css">

</head>
<body>
    <?php include ('../Gala projekts/PHP/navbar.php'); ?>

    <div class="container" style="width:50%">
        <h2 style="text-align:center; font-weight:bold">Apskatītās vietas</h2>
        <!-- Create photo slideshow -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!--Indicators that show which slide is active-->
            <div>
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>
            </div>

            <!-- Create slides -->
            <div class="carousel-inner">
                <!-- Create specific slide-->
                <div class="item active">
                    <!-- Insert photo in slide -->
                    <img src="/Images/kaktuss_salaspils.jpg" alt="Kaktuss" style="width:100%">
                    <!-- Add photo caption -->
                    <div class="carousel-caption">
                        <h3>Salaspils Botāniskais dārzs</h3>
                    </div>
                </div>
                
                <div class="item">
                    <img src="/Images/annecy.jpg" alt="Ansī" style="width:100%">
                    <div class="carousel-caption">
                            <h3>Ansī, Francija</h3>
                        </div>
                </div>

                <div class="item">
                    <img src="/Images/florence.jpg" alt="Il Duomo katedrāle" style="width:100%">
                    <div class="carousel-caption">
                            <h3>Il Duomo katedrāle</h3>
                        </div>
                </div>

                <div class="item">
                    <img src="/Images/sarema.jpg" alt="Sāremā" style="width:100%">
                    <div class="carousel-caption">
                            <h3>Sāremā</h3>
                        </div>
                </div>
            </div>

            <!--Arrows to view previous or next slide-->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <!-- Specifies the design of the arrow -->
                <span class="glyphicon glyphicon-chevron-left"></span>
                <!-- Text meant for screen-reader technology -->
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right "></span>
                <span class="sr-only">Next</span>
            </a> 
        </div>
    </div>

    <!-- Embed Google Map in webpage -->
    <div class="row text-center" style="width:100vw">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4415.484541940146!2d24.173002528938234!3d56.40326662292923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e8c87fed9471ff%3A0xa3c79b59269ffac3!2sBauskas%20pils%20muzejs!5e0!3m2!1slv!2slv!4v1572020395383!5m2!1slv!2slv" 
        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="container">
        <!--Button to open pop-up window-->
        <div class="row text-center">
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Gribu zināt vairāk!</button> 
        </div>
        <!--Pop-up window-->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!--Content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ievadi informāciju:</h4>
                    </div>

                    <!-- Input windows -->
                    <div class="modal-body">
                        <form action="/PHP/submit_form.php" method="POST">
                        <div class="row text-center">
                            <input type="text" name="firstName" placeholder="Vārds" required>
                        </div>
                        <div class="row text-center">
                            <input type="text" name="surname" placeholder="Uzvārds" required>
                        </div>
                        <div class="row text-center">
                            <input type="email" name="email" placeholder="Epasts" required>
                        </div>
                        <div class="row text-center">
                            <input type="text" name="message" placeholder="Ziņa" required>
                        </div>
                        <div class="row text-center">
                            <button class="btn btn-success">Submit</button>
                        </div>     
                        </form>  
                    </div>

                    <!-- Button to close pop-up -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include ('../Gala projekts/PHP/footer.php'); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</body>
</html>