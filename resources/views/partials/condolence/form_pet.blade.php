<div class="container py-3">
    <div class="row">
        <div class="mx-auto col-sm-8">
            <!-- form user info -->
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Condolencia para mascotas</h4>
                </div>
                <div class="card-body">
                    <form class="form" role="form" autocomplete="off">
                        <div class="form-group row">
                            <div class="text-center col align-self-center">
                                <img width="192" height="192" src="https://www.petinsurancereview.com/sites/default/files/styles/large/public/default_images/default_pet.jpg?itok=xSpT8Z_k" class="avatar rounded-circle" alt="avatar">
                                <h6>Imagen principal</h6>
                                <input type="file" class="text-center center-block file-upload">
                            </div>
                        </div>
                        <br>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nombre completo:</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Lugar de nacimiento:</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="lugar_nacimiento">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fecha de nacimiento:</label>
                            <div class="col-lg-9">
                                <div class='input-group date'>
                                    <input type='text'  id='fecha_nacimiento' class="form-control" placeholder="DD/MM/YYYY" />
                                    <span class="input-group-prepend">
                                        <span class="input-group-text px-4"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Lugar de su muerte:</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="text" id="lugar_muerte">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Fecha de su muerte:</label>
                            <div class="col-lg-9">
                                <div class='input-group date'>
                                    <input type='text' id='fecha_muerte' class="form-control" placeholder="DD/MM/YYYY"/>
                                    <span class="input-group-prepend">
                                        <span class="input-group-text px-4"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Háblanos sobre su mascota:</label>
                            <div class="col-lg-9">
                                <textarea rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Subida de imágenes</label>
                                    <div class="preview-zone hidden">
                                        <div class="box box-solid">
                                            <div class="box-header with-border">
                                                <div><b>Vista preliminar</b></div>
                                                <div class="box-tools pull-right">
                                                    <button type="button" class="btn btn-danger btn-xs remove-preview">
                                                        <i class="fa fa-times"></i> Cancelar
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="box-body"></div>
                                        </div>
                                    </div>
                                    <div class="dropzone-wrapper">
                                        <div class="dropzone-desc">
                                            <i class="glyphicon glyphicon-download-alt"></i>
                                            <p>Elija las imágenes a subir o arrástrelas al recuadro.</p>
                                        </div>
                                        <input type="file" name="img_logo" class="dropzone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="text-center col align-self-center">
                                <input type="button" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form user info -->
        </div>
    </div>
</div>