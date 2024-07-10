<?php include('../../head/header.php'); ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            <!--Inicio de la Formulario Usuario-->
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Administradores del Sistema</h4>
                  <form class="form-sample">
                    <p class="card-description"> Agregando nuevos Administradores </p>
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
                              <option>Administrador(a)</option>
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

            <div class="page-header">
              <!--Inicio de la Tabla-->
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <p>Lista de Administradores(as)</p>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Escribe el nombre del Usuario" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="button">BUSCAR</button>
                        </div>
                      </div>
                    </div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Nombres y Apellidos </th>
                            <th> Edad </th>
                            <th> Sexo </th>
                            <th> Teléfono </th>
                            <th> Email </th>
                            <th> Departamento </th>
                            <th> Provincia </th>
                            <th> Distrito </th>
                            <th> Rol </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> Herman Beck </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                            <td> May 15, 2015 </td>
                            <td> <label class="badge badge-success">Completed</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-2.png" alt="image" />
                            </td>
                            <td> Messsy Adam </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                            <td> July 1, 2015 </td>
                            <td> <label class="badge badge-danger">Pending</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td> John Richards </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $138.00 </td>
                            <td> Apr 12, 2015 </td>
                            <td> <label class="badge badge-warning">In progress</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-4.png" alt="image" />
                            </td>
                            <td> Peter Meggik </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 77.99 </td>
                            <td> May 15, 2015 </td>
                            <td> <label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-1.png" alt="image" />
                            </td>
                            <td> Edward </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 160.25 </td>
                            <td> May 03, 2015 </td>
                            <td> <label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-2.png" alt="image" />
                            </td>
                            <td> John Doe </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 123.21 </td>
                            <td> April 05, 2015 </td>
                            <td> <label class="badge badge-info">Fixed</label></td>
                          </tr>
                          <tr>
                            <td class="py-1">
                              <img src="../../../Template/template/assets/images/faces-clipart/pic-3.png" alt="image" />
                            </td>
                            <td> Henry Tom </td>
                            <td>
                              <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td> $ 150.00 </td>
                            <td> June 16, 2015 </td>
                            <td> <label class="badge badge-info">Fixed</label></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--Fin-->

              <!--<h3 class="page-title"> Basic Tables </h3>-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <!--<li class="breadcrumb-item"><a href="#">Tables</a></li>-->
                  <!--<li class="breadcrumb-item active" aria-current="page">Basic tables</li>-->
                </ol>
              </nav>
            </div>
            <!--En teoría sería desde aquí-->

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

<?php include('../../head/footer.php'); ?>