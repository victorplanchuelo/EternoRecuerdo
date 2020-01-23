<!--<div id="carousel-homenaje" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel" style="width:790px; max-height: 660px; margin:10px auto; padding:5px; ">
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/images/homenajes/esquela-camilo-sesto.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/homenajes/camilo-sesto-1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/images/homenajes/camilo-sesto-2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <video class="d-block video-fluid w-100" autoplay loop muted>
                <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
            </video>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-homenaje" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-homenaje" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>-->

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
      <img src="/images/homenajes/esquela-camilo-sesto.png" alt="Chania" class=" img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
      <img src="/images/homenajes/camilo-sesto-1.jpg" alt="Chania" class="img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
      <img src="/images/homenajes/camilo-sesto-2.jpg" alt="Flower" class="img-fluid mx-auto d-block">
    </div>

    <div class="carousel-item img-homenaje">
    <video class="d-block mx-auto video-fluid w-100" autoplay loop muted>
        <source src="https://mdbootstrap.com/img/video/forest.mp4" type="video/mp4" />
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