<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <title>Pizza</title>
</head>
<body>
    <header>
        <div>
            <div class="logo">
                <a href=""><img src="logo.jpg" alt=""></a>
            </div>
            <nav>
                <ul>
                    <li><a href="">POČETNA</a></li>
                    <li><a href="#about">O NAMA</a></li>
                    <li><a href="#services">USLUGE</a></li>
                    <li><a href="#contact">KONTAKT</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <hr style="width: 100%;">
    <div id="home">
        <div class="slider">
            <img src="img/capricciosa.jpg" class="slide">
            <img src="img/margarita.jpg" class="slide">
            <img src="img/vegetariana.jpg" class="slide">
            <img src="img/vesuvio.jpg" class="slide">
        </div>
        
        <div class="dots">
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>

    <div id="about">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At fuga veniam dolor 
        soluta nobis odio corrupti veritatis placeat ipsum ab voluptate, voluptas, natus
         necessitatibus libero et. Eum vero qui exercitationem.</p>

        <div class="about1">
            <div>
                <span id="s1">0</span><br>
                <div>BROJ MESTA</div>
            </div>
            <div>
                <span id="s2">0</span><br>
                <div>VRSTA PICA</div>
            </div>
            <div>
                <span id="s3">0</span><br>
                <div>% ZADOVOLJNIH MUŠTERIJA</div>
            </div>
        </div>
        <hr>
        <div class="about2">
            <div class="ttt">
                <i class="far fa-clock"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque tempore dignissimos autem molestiae labore quibusdam.</p>
            </div>
            <div class="ttt">
                <i class="fas fa-pizza-slice"></i>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta, ullam ab maxime aliquam voluptate neque ipsa fuga!</p>
            </div>
            <div class="ttt">
                <i class="fas fa-glass-cheers"></i>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas officiis tenetur hic dolorem, nobis obcaecati totam.</p>
            </div>
            <div class="ttt">
                <i class="fas fa-home"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, enim modi et quam praesentium aliquid similique?</p>
            </div>
        </div>

    </div>

    <div id="services">
        <div class="tab">
            <button id="clicked" class="tabs left" onclick="services(event, 'res')">Rezervacije</button>
            <button class="tabs right" onclick="services(event, 'ord')">Porudžbine</button>
        </div>

        <div id="res" class="tabCon">
            <h1>Rezervacije</h1><br><br><br>
            <form action="reservation.php" method="post">
                <input type="text" name="fName" required placeholder="Ime*" pattern="[A-Za-z]{0,7}" title="Koristite samo slova, najviše 7 karaktera"><br>
                <input type="text" name="lName" required placeholder="Prezime*" pattern="[A-Za-z]{0,10}" title="Koristite samo slova, najviše 10 karaktera"><br>
                <input type="tel" name="tel" required placeholder="Broj telefona*"><br>
                <input type="email" name="email" placeholder="Mejl"><br>
                <input type="date" name="date" required><br><br>
                <button type="submit">Rezervаcija</button>
            </form>
        </div>

        <div id="ord" class="tabCon">
            <h1>Porudžbine</h1><br>
            <form action="" method="post" id="formAsd">
                <select name="pizza" class="pizza">
                    <option value="none" selected disabled hidden>Pizza</option>
                    <option value="capricciosa">Capricciosa</option>
                    <option value="margarita">Margarita</option>
                    <option value="vegetariana">Vegetariana</option>
                    <option value="vesuvio">Vesuvio</option>
                </select><br>


                
                <!--<input type="radio" value="24" name="velicina" class="velicina" data-cena="50"> 24cm
			    <input type="radio" value="32" name="velicina" class="velicina" data-cena="210"> 32cm
                <input type="radio" value="50" name="velicina" class="velicina" data-cena="500"> 50cm <br><br>
                -->

                <select name="pizza" class="pizza">
                    <option value="none" selected disabled hidden>Veličina</option>
                    <option value="24" name="velicina" class="velicina" data-cena="50">24cm</option>
                    <option value="32" name="velicina" class="velicina" data-cena="210">32cm</option>
                    <option value="50" name="velicina" class="velicina" data-cena="500">50cm</option>
                </select><br>
                
                <div>
                    <div><input type="checkbox" class="dodaci" value="Kečap" data-dodatak="30">Kečap (30din)</div>
            	    <div><input type="checkbox" class="dodaci" value="Majonez" data-dodatak="25">Majonez (25din) </div>
                    <div><input type="checkbox" class="dodaci" value="Sir" data-dodatak="50">Sir (50din)   </div> 
                </div> <br>

               
			    <textarea id="napomena" name="napomena" placeholder="Napomena"></textarea><br><br><br>

                <span>Vaš račun: <span id="racun">0</span> din</span>
                <br><br>
                <button id="btn">Pošalji</button>
            </form>
        </div>
    </div>

    <div id="contact">

        <h1>Kontakt</h1>
        <form action="mail.php" method="post" class="formContact">
            <input type="text" name="name" required placeholder="Ime" pattern="[A-Za-z]{0,5}" title="Koristite samo slova, najviše 5 karaktera"><br>
            <input type="email" name="email" required placeholder="Mejl"><br>
            <textarea name="message" cols="30" rows="10" required placeholder="Poruka"></textarea><br>
            <button type="submit">Pošalji</button>
        </form>

    </div>

    <footer id="footer">
        <nav>
            <ul>
                <li><a href="">POČETNA</a></li>
                <li><a href="#about">O NAMA</a></li>
                <li><a href="#services">USLUGE</a></li>
                <li><a href="#contact">KONTAKT</a></li>
            </ul>
        </nav>
		<h5>Copyright © 2019. Igor Lakić</h5>
	</footer>

    <div id="toTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="script.js"></script>

</body>
</html>