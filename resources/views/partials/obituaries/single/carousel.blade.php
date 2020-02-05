<style>
  #myCarousel .carousel-control-prev, .carousel-control-next {
    background-color: #edeff0;
}

  #myCarousel .carousel-control-prev-icon, .carousel-control-next-icon {
    height: 40px;
    width: 40px;
    outline: black;
    background-color: rgba(0, 0, 0, 0.3);
    background-size: 100%, 100%;
    border-radius: 50%;
    border: 1px solid black;
}

.img-homenaje {
  margin-left:176px;
  width: 800px;
  max-width: 800px;
  height: 650px;
  max-height: 650px;
  padding-top: 20px;
}

</style>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active img-homenaje">
      <img src="/images/homenajes/esquela-camilo-sesto.jpg" alt="Esquela" class=" img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
      <img src="/images/homenajes/camilo-sesto-1.jpg" alt="Camilo Sesto" class="img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
      <img src="/images/homenajes/camilo-sesto-2.jpg" alt="Camilo Sesto" class="img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
    <video class="d-block mx-auto video-fluid w-100" autoplay>
        <source src="/videos/camilo-sesto.mp4" type="video/mp4" />
    </video>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>