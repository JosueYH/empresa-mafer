<?php 
//require('/opt/lampp/htdocs/empresa-mafer/public/template/head/header.php'); 
include $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/public/template/head/header.php'); // Ruta absoluta desde la raíz del servidor
?>

     <!-- partial -->
      <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h1 class="page-title"> Productos AgroIndustrias Mafer </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">Lista</li>
                  <li class="breadcrumb-item"><a href="add.php">Agregar Productos</a></li>
                </ol>
              </nav>
            </div>
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Llenar con los Datos del Producto</h4>
                  <form class="form-sample">
                    <p class="card-description"></p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Producto</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Escribe el nombre del Producto" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Precio (S/)</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Escribe el Precio del Producto" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Categoría</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <option>Yogurt</option>
                              <option>Helados</option>
                              <option>C</option>
                              <option>D</option>
                              <option>E</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Campo!!!</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="Realice una Descripción del Producto" />
                            <!--<textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>-->
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Tipo</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <!--<option value="" selected disabled>__ Seleccione __</option> -->
                              <option>A</option>
                              <option>B</option>
                              <option>C</option>
                              <option>D</option>
                              <option>E</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Radio Botón</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12 grid-margin stretch-card">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-description"> Descripción del Producto </p>
                            <form class="forms-sample">
                              <div class="form-group">
                                <textarea class="form-control" id="exampleTextarea1" rows="6"></textarea>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <p class="card-description"> Imagen del Producto </p>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label"></label>
                          <div class="col-sm-9">
                            <input type="file" id="imagenProducto" accept="image/*" required>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">AGREGAR</button>
                        <button class="btn btn-dark">CANCELAR</button>
                      </div>
                    </div>

                  </form>
                </div>
              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->          
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
           
<?php 
//require('/opt/lampp/htdocs/empresa-mafer/public/template/head/footer.php'); 
include $_SERVER['DOCUMENT_ROOT'] .('/empresa-mafer/public/template/head/footer.php'); // Ruta absoluta desde la raíz del servidor
?>
