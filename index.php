<!DOCTYPE html>
<html>
<title>Bta Pro</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/opmaak.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="CSS/opmaak1.css">
<style>
body,h1,h2,h3,h4,h5,h6
            {
             font-family: "Lato", sans-serif;
            }
body, html {
             height: 100%;
             color: #777;
             line-height: 1.8;
            }
th
			{
				width: 15em;
			}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3
			{
				background-attachment: fixed;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}

/* First image (Logo. Full height) */
.bgimg-1
{
    background-image: url('Images/BTAAchtergrond.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2
 {
    background-image: url("Images/test.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3
 {
    background-image: url("Images/test.jpg");
    min-height: 400px;
}

.w3-wide
{
    letter-spacing: 10px;
}
.w3-hover-opacity
 {
    cursor: pointer;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}

</style>
<body>
  <?php echo "test"; ?>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">Home</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"></i> About us</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="about"></i> Programma</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="info"></i><!--<img src="Images/logo3.png" width="20" height="">--></i> Contacteren</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">About us</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Programma</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Contacteren</a>
    <a href="#" class="w3-bar-item w3-button">Inloggen</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small"></span><!--<img src="Images/BTA.png"width="300" width="300"</span>--><p>BTA PRO</p>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">BTA PRO</h3>
  <p class="w3-center"><em>Wat zijn wij?</em></p>
  <p>>Wij zijn de bta pro. Wat is de BTA pro nu? Wij zijn een tennisschool dat als doel heeft om tennisleerlingen ombouwen tot top tennissers en om ze zo klaar te stomen voor de competitie
  </p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class=""><img src="Images/logo2.png" width="40" height="30"></i>Ons team</b></p><br>
      <p><b>Ga met de muis over de afbeelding voor de namen te weten van onze trainers.</b></p>
      <table>
          <tr>

        <th>
             <img src="Images/Pieter.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="150" height="300" onmouseover="this.src='Images/Pieter1.jpeg'" onmouseout="this.src='Images/Pieter.jpeg'" >
        </th>
        <th>
           <img src="Images/Demi.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="150" height="300">
        </th>
        <th>  <img src="Images/casper2.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="190" height="350"></th>

            </tr>
            <tr>
                <th>Pieter Vanreeth</th>
                <th>Dimitri d’haese</th>
                <th>Casper Schyvinck</th>
              </tr>
              <tr>
            <th>  <img src="Images/Jelle.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="150" height="300" onmouseover="this.src='Images/Jelle1.jpg'" onmouseout="this.src='Images/Jelle.jpeg'"></th>
              <th>  <img src="Images/Stan.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="150" height="300"></th>
                <th>  <img src="Images/Casper4.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="" width="150" height="300"></th>
        </tr>
        <tr>
          <th>Jelle Vanhee</th>
          <th>Stan Van Praet</th>
          <th>Nick Maes</th>

        </tr>

    </table>
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>






  <p class="w3-wide"><i class="fa fa-photo"></i>
    <h3 class="w3-center">Onze sponsors</h3>
   <img src="Images/partner.jpg">
   <img src="Images/partner2.png">
  </p>
  <div class="w3-light-grey">
  </div>
</div>

<!--<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">14+</span><br>
    Partners
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">55+</span><br>
    Projects Done
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">89+</span><br>
    Happy Clients
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">150+</span><br>
    Meetings
  </div>
</div>-->

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Programma</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Training</h3>
  <p class="w3-center"><em>de trainingen palnningen</p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
   <div class="w3-col m3">
      <object width="400" height="400" data="pdf/CursusAA.pdf"></object>
    </div>

    <div class="w3-col m3">
      <p>lskdfjsqdklmfjmkl</p>
    </div>

    <div class="w3-col m3">
        <p>dskfjslmfj</p>
    </div>

    <div class="w3-col m3">
      <p>lksdjfklmjsdklmjskl</p>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m3">
     <p>lskdjfsklmfjm</p>
    </div>

    <div class="w3-col m3">
      <p>LSKDJFLKSDMFJSDKLMFJSDLMFJKLM</p>
    </div>

    <div class="w3-col m3">
     <P>JSDLKFJDSKLFJSLMJLM</P>
    </div>

    <div class="w3-col m3">
     <P>JSDLKMFJSDKLFJSDKLMFJ</P>
    </div>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"></button>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Gallery</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
  <h3 class="w3-center">Foto's</h3>
  <p class="w3-center"><em></p><br>

  <!-- Responsive Grid. Four columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
   <div class="w3-col m3">
    </div>
    <style>
      body {
        font-family: Verdana, sans-serif;
        margin: 0;
      }

      * {
        box-sizing: border-box;
      }

      .row > .column {
        padding: 0 8px;
      }

      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      .column {
        float: left;
        width: 25%;
      }

      /* The Modal (background) */
      .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 100px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: black;
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        width: 90%;
        max-width: 1200px;
      }

      /* The Close Button */
      .close {
        color: white;
        position: absolute;
        top: 10px;
        right: 25px;
        font-size: 35px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #999;
        text-decoration: none;
        cursor: pointer;
      }

      .mySlides {
        display: none;
      }

      .cursor {
        cursor: pointer
      }

      /* Next & previous buttons */
      .prev,
      .next {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        padding: 16px;
        margin-top: -50px;
        color: white;
        font-weight: bold;
        font-size: 20px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        -webkit-user-select: none;
      }

      /* Position the "next button" to the right */
      .next {
        right: 0;
        border-radius: 3px 0 0 3px;
      }

      /* On hover, add a black background color with a little bit see-through */
      .prev:hover,
      .next:hover {
        background-color: rgba(0, 0, 0, 0.8);
      }

      /* Number text (1/3 etc) */
      .numbertext {
        color: #f2f2f2;
        font-size: 12px;
        padding: 8px 12px;
        position: absolute;
        top: 0;
      }

      img {
        margin-bottom: -4px;
      }

      .caption-container {
        text-align: center;
        background-color: black;
        padding: 2px 16px;
        color: white;
      }

      .demo {
        opacity: 0.6;
      }

      .active,
      .demo:hover {
        opacity: 1;
      }

      img.hover-shadow {
        transition: 0.3s
      }

      .hover-shadow:hover {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
      }
      </style>


      <h2 style="text-align:center">Gallerij</h2>

      <div class="row">
        <div class="column">
          <img src="Images/Gallerij/foto1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="Images/Gallerij/foto2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="Images/Gallerij/foto3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="Images/Gallerij/foto3.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
        </div>
        <div class="column">
          <img src="img_lights.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
        </div>
      </div>

      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">

          <div class="mySlides">
            <div class="numbertext">1 / 4</div>
            <img src="Images/Gallerij/foto1.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">2 / 4</div>
            <img src="Images/Gallerij/foto2.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="Images/Gallerij/foto3.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">3 / 4</div>
            <img src="Images/Gallerij/fot o3.jpg" style="width:100%">
          </div>

          <div class="mySlides">
            <div class="numbertext">4 / 4</div>
            <img src="img_lights_wide.jpg" style="width:100%">
          </div>


          <div class="caption-container">
            <p id="caption"></p>
          </div>


          <div class="column">
            <img class="demo cursor" src="Images/Gallerij/foto1.jpg" style="width:100%" onclick="currentSlide(1)" alt="foto">
          </div>
          <div class="column">
            <img class="demo cursor" src="Images/Gallerij/foto2.jpg" style="width:100%" onclick="currentSlide(2)" alt="dd ">
          </div>
          <div class="column">
            <img class="demo cursor" src="Images/Gallerij/foto2.jpg " style="width:100%" onclick="currentSlide(3)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="img_lights_wide.jpg" style="width:100%" onclick="currentSlide(4)" alt="">
          </div>
          <div class="column">
            <img class="demo cursor" src="Images/Gallerij/foto2.jpg " style="width:100%" onclick="currentSlide(5)" alt="">
          </div>
        </div>
      </div>

      <script>
      function openModal() {
        document.getElementById('myModal').style.display = "block";
      }

      function closeModal() {
        document.getElementById('myModal').style.display = "none";
      }

      var slideIndex = 1;
      showSlides(slideIndex);

      function plusSlides(n) {
        showSlides(slideIndex += n);
      }

      function currentSlide(n) {
        showSlides(slideIndex = n);
      }

      function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
      </script>
    <button class="w3-button w3-padding-large w3-light-grey" style="margin-top:64px"></button>
  </div>
</div>



<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">Ons contacteren</h3>
  <p class="w3-center"><em></em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;">
        <table>
          <tr>
            <th>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9996.631345465286!2d3.248345!3d51.216168!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xde4dcedb47d41ff1!2sTenniscentrum+Brughia!5e0!3m2!1snl!2sbe!4v1515956900938" width="300px;" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
            </th>
            <th style="width:100%;">
            </th>
        </tr>
        </table>
        </div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">

      </div>

      <form action="/action_page.php" target="_blank" style="margin-bottom:500px;">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">

            <p></p>
          </div>
          <div class="w3-half" style="margin-left:10%">
            <input class="w3-input w3-border" type="text" placeholder="Voornaam + achternaam" required name="Name"style="margin-left:-20%;width:153%;"/>
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"style="margin-left:-20%;width:153%;"/>
            <input class="w3-input w3-border" type="text" placeholder="Telefoon/GSM" required name="Name" style="margin-left:-20%;width:153%;"/>
            <input class="w3-input w3-border" type="text" placeholder="Onderwerp" required name="Email"style="margin-left:-20%;width:153%;"/>
          </div>
        </div>
        <textarea style="width:700px;"></textarea></br>
		<input type="submit" name="verzend" value="Verzenden" style="width:77%; height:20%;">

        </button>
      </form>
    </div>
  </div>
</div>



<label style="margin-left:10%;"> Adres: Boogschutterslaan </label> </br>
<label style="margin-left:10%;"> Email: Info@btaPro@gmail.com</label></br>
<label style="margin-left:10%;"> Telefoon/GSM: +32 476 73 80 03 </label></br>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
 <!-- <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>-->

</footer>

<!-- Add Google Maps -->
<script>


// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction()
{
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>


</body>
</html>
