
<!-- Slideshow container -->
<div class="slideshow-container">

<!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 15</div>
            <img src="./images/cropped-images/ace1-cropped.jpg" style="width:100%" alt="Competitors run through water">
        <div class="text">Splash and Dash!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 15</div>
            <img src="./images/cropped-images/ace2-cropped.jpg" style="width:100%" alt="all ages run">
        <div class="text">Fun for everyone!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 15</div>
            <img src="./images/cropped-images/ace3-cropped.jpg" style="width:100%" alt="bicyclists celebrating">
        <div class="text">Come and push yourself!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 15</div>
            <img src="./images/cropped-images/ace4-cropped.jpg" style="width:100%" alt="swimmers running into ocean">
        <div class="text">Swimmer's start!</div>
    </div>
    <div class="mySlides fade">
        <div class="numbertext">5 / 15</div>
            <img src="./images/cropped-images/ace5-cropped.jpg" style="width:100%" alt="biking into the sun">
        <div class="text">Bikes bikes bikes!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 15</div>
            <img src="./images/cropped-images/ace6-cropped.jpg" style="width:100%" alt="finish line refreshments">
        <div class="text">Enjoy some refreshments at the finish line!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7 / 15</div>
            <img src="./images/cropped-images/ace8-cropped.jpg" style="width:100%" alt="smiling woman at marathon">
        <div class="text">Come compete in a marathon!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 15</div>
            <img src="./images/cropped-images/ace9-cropped.jpg" style="width:100%" alt="wheelchair race">
        <div class="text">Everyone is welcome!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">9 / 15</div>
            <img src="./images/cropped-images/ace10-cropped.jpg" style="width:100%" alt="finish line">
        <div class="text">See you at the finish line!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">10 / 15</div>
            <img src="./images/cropped-images/ace11-cropped.jpg" style="width:100%" alt="sneakers">
        <div class="text">Come run with us!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">11 / 15</div>
            <img src="./images/cropped-images/ace13-cropped.jpg" style="width:100%" alt="10k race">
        <div class="text">Try our 10k!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">12 / 15</div>
            <img src="./images/cropped-images/ace14-cropped.jpg" style="width:100%" alt="sprinters">
        <div class="text">Sprint your way to victory!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">13 / 15</div>
            <img src="./images/cropped-images/ace16-cropped.jpg" style="width:100%" alt="end of marathon">
        <div class="text">Come cheer everyone on!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">14 / 15</div>
            <img src="./images/cropped-images/ace17-cropped.jpg" style="width:100%" alt="large marathon">
        <div class="text">Big or small, our marathon is always a ton of fun!</div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">15 / 15</div>
            <img src="./images/cropped-images/ace18-cropped.jpg" style="width:100%" alt="explore the city">
        <div class="text">Explore the city while you compete!</div>
    </div>

<!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span>
    <span class="dot" onclick="currentSlide(4)"></span>
    <span class="dot" onclick="currentSlide(5)"></span> 
    <span class="dot" onclick="currentSlide(6)"></span> 
    <span class="dot" onclick="currentSlide(7)"></span>
    <span class="dot" onclick="currentSlide(8)"></span>
    <span class="dot" onclick="currentSlide(9)"></span> 
    <span class="dot" onclick="currentSlide(10)"></span>
    <span class="dot" onclick="currentSlide(11)"></span>
    <span class="dot" onclick="currentSlide(12)"></span> 
    <span class="dot" onclick="currentSlide(13)"></span> 
    <span class="dot" onclick="currentSlide(14)"></span>
    <span class="dot" onclick="currentSlide(15)"></span>   
</div>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");

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
    }
</script>
