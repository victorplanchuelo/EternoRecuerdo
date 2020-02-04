<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/camilo-sesto-1.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="{{route('homenajes.show',['id' => 1])}}"><p>Camilo Blanes Cortés</p><p>(Camilo Sesto)</p></a></h3>
                                    <p>Cantante.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/godzilla-mascota.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">Godzilla</a></h3>
                                    <p>Un pequeño paso para la tortuga ....</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/kobe-2.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">Kobe Bryant</a></h3>
                                    <p>Ex-jugador de Baloncesto</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/pilar-borbon.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">Infanta Pilar de Borbón</a></h3>
                                    <p>Infanta de España.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/punset.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">Eduard Punset Casals</a></h3>
                                    <p>Jurista,escritor, economista, político y divulgador científico.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/homenajes/rocky-mascota.jpg');"></a>
                                <div class="text bg-white p-4">
                                    <h3 class="heading"><a href="#">Rocky</a></h3>
                                    <p>Viviendo la vida peligrósamente.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials/services/paginador')
                </div>
            </section>
        </div>
        @include('partials/services/mapa')
    </div>
</div>