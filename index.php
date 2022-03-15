<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="/Styles/main_style.css">
</head>
<body>
    <!-- Places navigation bar at the top of the page -->
    <?php include ('../Gala projekts/PHP/navbar.php'); ?>
    
    <div class="maincontent">
        <!-- Insert author's photo -->
        <div>
            <img src="/Images/foto.jpg" alt="Autores foto" width="250vw" height="290vh" style="float:right; padding:5vh">
        </div>

        <div>
            <h1>Mana pieredze</h1>
            
            <!-- Insert divider -->
            <hr>
            <!-- New paragraph -->
            <p class="emphasized">Šajos kursos esmu iemācījusies strādāt patstāvīgi un paļauties uz savām spējām...un Google.</p>

            <p>Kad es pirmoreiz iepazinos ar programmēšanu vidusskolā, liela daļa darba tika paveikta, sastrādājoties ar klasesbiedreni. 
                Diemžēl ar laiku izveidojās paradums paļauties uz viņu, ja pati ar uzdevumu netiku galā.
                Kursos gūtā pieredze to ir labojusi. 
            </p>
           
            <hr>
            <p class="emphasized">Esmu veikusi pirmos soļus, lai izprastu objektorientēto programmēšanu.</p>

            <p> Līdz šim programmējot biju izmantojusi tikai jau sniegtās funkcijas un nebiju iedziļinājusies to uzbūvē. 
                Klašu un instanču sistēma likās nesaprotama. 
            </p>

            <hr>
            <p class="emphasized">Kursos mācītais un uzklausītais ļāva labāk izprast, ko no manis sagaida darba devējs.</p>

            <p>Kursu laikā apmeklētās vieslekcijas deva nelielu ieskatu vairākos IT uzņēmumos un viņu prasībās.
                Praktiskā nodarbība ļāva saprast, cik daudz zinu un cik vēl jāmācas, lai varētu pretendēt uz prakses vai darba vietu.
            </p>
            <hr>
            
        </div> 
        
        <!-- Embed youtube video -->
        <div>
            <p class="emphasized">Video, kas palīdzēja darba izstrādē:</p>
            <iframe src="https://www.youtube.com/embed/KIC0OK9nKXY" width="400" height="250" controls></iframe>
        </div>

    </div> 
   
    <!-- Insert footer at the bottom of the page -->
    <?php include ('../Gala projekts/PHP/footer.php'); ?>
</body>
</html>