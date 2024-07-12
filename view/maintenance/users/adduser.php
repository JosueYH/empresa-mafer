<?php 
//require('/opt/lampp/htdocs/empresa-mafer/public/template/head/header.php'); 
include $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/public/template/head/header.php'); // Ruta absoluta desde la raíz del servidor
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h4 class="page-title">Usuarios Agroindustrias MAFER</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="listuser.php">Lista de Usuarios</li>
                  <li class="breadcrumb-item"><a href="adduser.php">Agregar Usuarios</a></li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <!--Inicio de la Formulario Usuario-->
              <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Usuarios del Sistema</h4>
                  <form class="form-sample">
                    <p class="card-description">Llenar con datos del Usuario</p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Nombre</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Fecha de Nacimiento</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Apellidos</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Teléfono</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Gender</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>Male</option>
                              <option>Female</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Date of Birth</label>
                          <div class="col-sm-9">
                            <input class="form-control" placeholder="dd/mm/yyyy" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Rol</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <option>Usuario</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Sexo</label>
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Masculino </label>
                            </div>
                          </div>
                          <div class="col-sm-5">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Femenino </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p class="card-description"> Dirección </p>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Departamento</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <option>Apurímac</option>
                              <option>Cusco</option>
                              <option>Ayacucho</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Email</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Provincia</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <option>Aymaraes</option>
                              <option>Abancay</option>
                              <option>Grau</option>
                              <option>Andahuaylas</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Contraseña</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control" />
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Distrito</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option value="" selected >__ Seleccionar __</option>
                              <option>Lucre</option>
                              <option>Tintay</option>
                              <option>Chacña</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label">Country****</label>
                          <div class="col-sm-9">
                            <select class="form-control">
                              <option>America</option>
                              <option>Italy</option>
                              <option>Russia</option>
                              <option>Britain</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p></p>
                    <button type="submit" class="btn btn-primary mr-2">CREAR</button>
                    <button class="btn btn-dark">CANCELAR</button>
                  </form>
                </div>
              </div>
            </div>
            <!--Fin del formulario Usuario-->

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
include $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/public/template/head/footer.php'); // Ruta absoluta desde la raíz del servidor
?>
