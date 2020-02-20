<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-md-center">
            @include('partials/services/cuota-suscripcion')
        </div>
        <div class="row mt-5">
            <h1 class="texto-servicios mx-auto font-weight-bold">Album de fotos personalizado</h1>
        </div>
        <div class="row mb-5">
            <div class="card col-md-8 mx-auto">
                <div class="ftco-animate">
                    <div class="embed-responsive embed-responsive-16by9"> 
                        <video width="320" height="240" controls>
                            <source src="/videos/album-papel.mp4" type="video/mp4">
                        </video>
                    </div> 
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 mx-auto">
                                <div class="precio-tachado">
                                    <del>
                                        <span class="amount-del" style="font-size:20px" data-toggle="tooltip" data-placement="top" title="Precio actual">39,99€ + Gastos de envío</span>
                                    </del>
                                    <ins>
                                        <span class="amount" data-toggle="tooltip" data-placement="top" title="Precio con el descuento por mencionarnos y compartirnos en RR.SS.">19,99€ + Gastos de envío</span>
                                    </ins>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="card-text">
                                <span>Características del album "Siempre Juntos":</span>
                                <ul>
                                    <li>Tamaño: 29x21 cm</li>
                                    <li>Totalmente personalizado</li>
                                    <li>12 páginas (24 fotos)</li>
                                    <li>IVA Incluido en el precio</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h1 class="texto-servicios mx-auto font-weight-bold">Velas</h1>
        </div>
        <div class="row">
            @include('partials/services/velas')
        </div>
        <div class="row mt-5">
            <h1  class="texto-servicios mx-auto font-weight-bold">Ramos</h1>
        </div>
        <div class="row">
            @include('partials/services/ramos')
        </div>
        <div class="row mt-5">
            <h1  class="texto-servicios mx-auto font-weight-bold">Consulta nuestro gabinete psicológico</h1>
        </div>
        <div class="row">
            <img src="/images/gabinete_psicologico.jpg" class="img img-fluid mx-auto"> 
        </div>
        <div class="row mt-5">
            <h1  class="texto-servicios mx-auto font-weight-bold">Puede echar un vistazo a nuestro folleto para consultar nuestras tarifas</h1>
        </div>
        <div class="row">
            <object data="/images/catalogo.pdf" type="application/pdf" width="100%" height="500px"> 
                <p>Parece que no tienes instalado el plugin para PDF en tu navegador.
                No te preocupes, puedes <a href="/images/catalogo.pdf">pinchar aquí para descargarte el documento.</a></p>  
            </object>
        </div>
        <div class="row mt-5">
            <h1  class="texto-servicios mx-auto font-weight-bold">Descuentos en la página</h1>
        </div>
        <div class="row">
            <div class="col-6 mx-auto text-center">
                <img src="/images/DESCUENTO.jpg" class="img img-fluid"> 
            </div>
        </div>
    </div>
</section>