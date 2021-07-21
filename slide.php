<style>


.intro {
  height: 100vh;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  letter-spacing: 0.1rem;
}
.intro-slideshow img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%; 
  height:525px;
  object-fit: cover;
  z-index:-1;
  opacity: 0;
  transition: opacity 0.75s ease-in-out;
}
.intro .intro-header {
  border-radius: 0.5rem;
  padding: 2rem 2.5rem;
  background-color: rgba(16, 128, 234, 0.7);
 
}
.intro h1 {
  font-size: 4rem;
  margin-bottom: 0.75rem;
}
.intro p {
  font-size: 1.75rem;
}
.intro-header{
  color:white;
  padding-top: 300px;
}

@media (max-width: 700px) {
  html { font-size: 12px; }
  .intro-header { padding: 1.5rem 2rem; }
  .intro h1 { font-size: 2.5rem; }
  .intro p { font-size: 1.25rem; }
}
</style>
<body>
<header class="intro">
  <div class="intro-slideshow">
    <img src="img/slide11.jpg">
    <img src="img/slide2.jpg">
    <img src="img/slide3.jpg">
  </div>
  <div class="intro-header">
    <h1>GripSpark Bank</h1>
    <p>
      Start the Transactions...
    </p>
  </div>
</header>
<script>
  const slideshowImages = document.querySelectorAll(".intro-slideshow img");

const nextImageDelay = 5000;
let currentImageCounter = 0; // setting a variable to keep track of the current image (slide)

// slideshowImages[currentImageCounter].style.display = "block";
slideshowImages[currentImageCounter].style.opacity = 1;

setInterval(nextImage, nextImageDelay);

function nextImage() {
  // slideshowImages[currentImageCounter].style.display = "none";
  slideshowImages[currentImageCounter].style.opacity = 0;

  currentImageCounter = (currentImageCounter+1) % slideshowImages.length;

  // slideshowImages[currentImageCounter].style.display = "block";
  slideshowImages[currentImageCounter].style.opacity = 1;
}
</script>
</body>