<?php 
//require('/opt/lampp/htdocs/empresa-mafer/public/template/head/header.php'); 
include $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/public/template/head/header.php'); // Ruta absoluta desde la raíz del servidor
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h4 class="page-title">Usuarios del Sistema MAFER</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="listuser.php">Lista de Usuarios</li>
                  <li class="breadcrumb-item"><a href="adduser.php">Agregar Usuarios</a></li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <!--Inicio de la lista-->
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    </p>
                    <p>Lista de Usuarios</p>
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
              <!--Fin de la lista-->
            
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
