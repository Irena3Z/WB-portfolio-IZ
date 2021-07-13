<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="\comments">

<div id="root">
    <div class="app">
        <header class="navbar">
        <div class="container" style="transform: none;">
                <h1 class="initials">IZ</h1>
                <ul>
                    <nav class="nav-options">
                        <a aria-current="page" class="navbar-text" href="/xampp/Portfolio_IZ/">About me</a>
                        <a class="navbar-text active" href="/xampp/Portfolio_IZ/Par_mani">Gallery</a>
                        <a class="navbar-text" href="/xampp/Portfolio_IZ/CV">Resume</a>
                        <a class="navbar-text" href="/xampp/Portfolio_IZ//Kontakti">Contacts</a>
                    </nav>
                </ul>
            </div>
        </header>
        <div class="intro">
            <h1 class="intro-text">My hobby is taking pictures. I want to share my gallery with you.</h1>
           
        </div>
    </div>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}
.row > .column {
    display: flex;
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Create four equal columns that floats next to eachother */
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
  /*max-width: 1200px;*/
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

/* Hide the slides by default */
.mySlides {
  display: none;
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

/* Caption text */
.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

img.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
</body>

<h2 style="text-align:center"></h2>

<div class="row">
  <div class="column">
    <img src="img/1.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/3.JPG" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/4.JPG" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/7.JPG" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/8.JPG" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/11.JPG" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
  
  <div class="column">
    <img src="img/13.jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/14.jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/15.JPG" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/16.JPG" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/17.jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/18.jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/19.JPG" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/20.JPG" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/21.jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/22.jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/23.JPG" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/24.JPG" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/25.jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/26.jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/27.JPG" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/28.JPG" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/29.jpg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/30.jpg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/31.JPG" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/32.JPG" style="width:100%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
  </div>
  <div class="column">
  <img src="img/33.jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/34.jpg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/35.JPG" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="img/36.JPG" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 36</div>
      <img src="img/1.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 36</div>
      <img src="img/2.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 36</div>
      <img src="img/3.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 36</div>
      <img src="img/4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 / 36</div>
      <img src="img/5.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">6 / 36</div>
      <img src="img/6.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">7 / 36</div>
      <img src="img/7.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">8 / 36</div>
      <img src="img/8.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">9 / 36</div>
      <img src="img/9.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">10 / 36</div>
      <img src="img/10.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">11 / 36</div>
      <img src="img/11.jpg" style="width:100%">
    </div>

    

    <div class="mySlides">
      <div class="numbertext">13 / 36</div>
      <img src="img/13.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">14 / 36</div>
      <img src="img/14.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">15 / 36</div>
      <img src="img/15.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">16 / 36</div>
      <img src="img/16.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">17 / 36</div>
      <img src="img/17.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">18 / 36</div>
      <img src="img/18.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">19 / 36</div>
      <img src="img/19.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">20 / 36</div>
      <img src="img/20.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">21 / 36</div>
      <img src="img/21.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">22 / 36</div>
      <img src="img/22.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">23 / 36</div>
      <img src="img/23.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">24 / 36</div>
      <img src="img/24.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">25 / 36</div>
      <img src="img/25.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">26 / 36</div>
      <img src="img/26.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">27 / 36</div>
      <img src="img/27.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">28 / 36</div>
      <img src="img/28.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">29 / 36</div>
      <img src="img/29.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">30 / 36</div>
      <img src="img/30.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">31 / 36</div>
      <img src="img/31.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">32 / 36</div>
      <img src="img/32.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">33 / 36</div>
      <img src="img/33.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">34 / 36</div>
      <img src="img/34.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">35 / 36</div>
      <img src="img/35.jpg" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">36 / 36</div>
      <img src="img/36.jpg" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>


    <div class="column">
      <img class="demo cursor" src="img/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/3.JPG" style="width:100%" onclick="currentSlide(3)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/4.JPG" style="width:100%" onclick="currentSlide(4)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/6.jpg" style="width:100%" onclick="currentSlide(6)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/7.JPG" style="width:100%" onclick="currentSlide(7)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/8.JPG" style="width:100%" onclick="currentSlide(8)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/9.jpg" style="width:100%" onclick="currentSlide(9)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/10.jpg" style="width:100%" onclick="currentSlide(10)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/11.JPG" style="width:100%" onclick="currentSlide(11)" alt="">
    </div>
    
    <div class="column">
      <img class="demo cursor" src="img/13.jpg" style="width:100%" onclick="currentSlide(13)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/14.jpg" style="width:100%" onclick="currentSlide(14)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/15.JPG" style="width:100%" onclick="currentSlide(15)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/16.JPG" style="width:100%" onclick="currentSlide(16)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/17.jpg" style="width:100%" onclick="currentSlide(17)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/18.jpg" style="width:100%" onclick="currentSlide(18)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/19.JPG" style="width:100%" onclick="currentSlide(19)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/20.JPG" style="width:100%" onclick="currentSlide(20)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/21.jpg" style="width:100%" onclick="currentSlide(21)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/22.jpg" style="width:100%" onclick="currentSlide(22)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/23.JPG" style="width:100%" onclick="currentSlide(23)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/24.JPG" style="width:100%" onclick="currentSlide(24)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/25.jpg" style="width:100%" onclick="currentSlide(25)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/26.jpg" style="width:100%" onclick="currentSlide(26)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/27.JPG" style="width:100%" onclick="currentSlide(27)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/28.JPG" style="width:100%" onclick="currentSlide(28)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/29.jpg" style="width:100%" onclick="currentSlide(29)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/30.jpg" style="width:100%" onclick="currentSlide(30)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/31.JPG" style="width:100%" onclick="currentSlide(31)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/32.JPG" style="width:100%" onclick="currentSlide(32)" alt="">
    </div>
    </div>
    <div class="column">
      <img class="demo cursor" src="img/33.jpg" style="width:100%" onclick="currentSlide(33)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/34.JPG" style="width:100%" onclick="currentSlide(34)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/35.JPG" style="width:100%" onclick="currentSlide(35)" alt="">
    </div>
    <div class="column">
      <img class="demo cursor" src="img/36.JPG" style="width:100%" onclick="currentSlide(36)" alt="">
    </div>
  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
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
</div>

<?php
include __DIR__. '\comments\index.php' ?>
 
 