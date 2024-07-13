<?php 
//require('/opt/lampp/htdocs/empresa-mafer/public/template/head/header.php'); 
include $_SERVER['DOCUMENT_ROOT'].('/empresa-mafer/public/template/head/header.php'); // Ruta absoluta desde la raíz del servidor
?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h4 class="page-title">Productos del Sistema MAFER</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="listproduct.php">Lista</li>
                  <li class="breadcrumb-item"><a href="addproduct.php">Agregar Productos</a></li>
                </ol>
              </nav>
            </div>

            <div class="row">
              <!--Inicio de la Tabla-->
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <!--</p>-->
                    <p>Lista de Productos</p>
                    <p></p>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Escribe el nombre del Producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-sm btn-primary" type="button">BUSCAR</button>
                        </div>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th> Idd </th>
                            <th> Nombre </th>
                            <th> Categoria </th>
                            <th> Tipo </th>
                            <th> Precio </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($productos)): ?>
                            <?php foreach ($productos as $prod): ?>
                                <tr>
                                    <td><?php echo $prod['idProducto']; ?></td>
                                    <td><?php echo $prod['nombreProducto']; ?></td>
                                    <td><?php echo $prod['categoriaProducto']; ?></td>
                                    <td><?php echo $prod['tipoProducto']; ?></td>
                                    <td><?php echo $prod['precioProducto']; ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="5">No hay productos disponibles.</td>
                            </tr>
                        <?php endif; ?>


                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!--Fin-->

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
