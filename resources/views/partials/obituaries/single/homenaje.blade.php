<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                @include('partials/obituaries/single/carousel')
            </div>
            <div class="col-lg-6 ftco-animate">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="mb-3">Camilo Blanes Cortés (Camilo Sesto)</h2>
                        <p>Alcoy, 16/09/1946 - Madrid 08/09/2019</p>
                        <br>
                        <p>Camilo Blanes Cortés, más conocido como Camilo Sesto nos dejo la madrugada del domingo 8 de septiembre a los 72 años.</p>
                        <p>Nació en Alcoy, se convirtió en una de las voces más importantes del panorama musical español.</p>
                        <p>Lo conocemos gracias a sus temas más sonoros como “ Vivir así es morir de amor”, “Perdóname” o “ Algo de mi”, “¿Quieres ser mi amante” o “El amor de mi vida”, que le hicieron vender más de 100 millones de discos..</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @include('partials/obituaries/single/velas-ramos')
        </div>
        <div class="row">
            <div class="col-lg-4 services-2 d-flex" data-toggle="modal" data-target="#modal-ramos">
                <div class="icon mr-3 d-flex justify-content-center align-items-center">
                    <img src="/images/icons/bouquet.png">
                </div>
                <div class="text">
                    <h3>Crear Ramo</h3>
                </div>
            </div>
            <div class="col-lg-4 services-2 d-flex" data-toggle="modal" data-target="#form-condolencias">
                <div class="icon mr-3 d-flex justify-content-center align-items-center">
                    <img src="/images/icons/edit.png">
                </div>
                <div class="text">
                    <h3>Añadir condolencia</h3>
                </div>
            </div>
            <div class="col-lg-4 services-2 d-flex" data-toggle="modal" data-target="#modal-velas">
                <div class="icon mr-3 d-flex justify-content-center align-items-center">
                    <img src="/images/icons/candle.png">
                </div>
                <div class="text">
                    <h3>Encender vela</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pt-5 mt-5">
                    <h3 class="mb-5 h4 font-weight-bold">2 condolencias</h3>
                    <ul class="comment-list">
                        <li class="comment">
                            <div class="vcard bio">
                                <img src="{{asset('images/logo.png')}}" alt="Eterno Recuerdo">
                            </div>
                            <div class="comment-body">
                                <h3>Eterno Recuerdo</h3>
                                <div class="meta mb-2">08 de Septiembre de 2019</div>
                                <p>El equipo de Eterno Recuerdo le acompaña en el sentimiento y quiere hacer llegar a su familia y allegados los servicios que ofrece nuestra web para recordar y homenajear a sus seres queridos.</p>
                            </div>
                        </li>

                        <li class="comment">
                            <div class="vcard bio">
                                <img src="/images/teacher-1.jpg" alt="Iván Bonmatí">
                            </div>
                            <div class="comment-body">
                                <h3>Iván Bonmatí</h3>
                                <div class="meta mb-2">21 de Noviembre de 2019</div>
                                <p>Camilo siempre te he escuchado, has sido una inspiración para mi. En todos los momentos de mi vida me has acompañado.</p>
                                <p> Es una pena que nos abandones pero nunca te olvidaremos ya que nos has dejado tu música.</p>
                            </div>
                        </li>
                    </ul>
                    <!-- END comment-list -->
                </div>
            </div> <!-- .col-md-8 -->
        </div>
    </div>
</section>

<!-- AÑADIMOS LOS MODALES -->
<div class="modal fade" id="form-condolencias" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Crear condolencia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
          <div class="form-group">
            <label for="texto-condolencia">Escribe tu condolencia: </label>
            <textarea class="form-control" id="condolencia" rows="5"></textarea>
          </div>
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-ramos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Crear ramo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <!-- Page Content -->
            <div class="container">
                <div class="row text-center text-lg-left">
                    <div class="col-lg-3 col-md-4 col-6 ramo">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/ramos/ramo-basico.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 ramo">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/ramos/ramo-completo.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="modal-velas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <h5 class="modal-title" id="exampleModalLabel">Crear ramo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
        <div class="modal-body">
            <!-- Page Content -->
            <div class="container">
                <div class="row text-center text-lg-left">
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo1/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo1/2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo1/3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo1/4.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo1/5.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo2/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo2/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo2/3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6 vela">
                        <div class="d-block mb-4 h-100">
                            <img class="img-fluid img-thumbnail" src="/images/homenajes/velas/modelo2/4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <div class="modal-footer border-top-0 d-flex justify-content-center">
          <button type="submit" class="btn btn-success">Crear</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-------------------------->