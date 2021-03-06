<?php include_once("sidemenu.php") ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Gastos
            <small>Listado de gastos</small>
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">

          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
            <!-- //Pop up para agregar -->
              <div id="new">
                <!-- Popup Div Starts Here -->
                <div id="popupContact">

                <!-- Contact Us Form -->
                  <form action="index.php/uploader/altagasto" id="form" method="post" name="form">
                    <a id="close" href="javascript:%20newdiv_hide()"><i class="fa fa-times-circle fa-lg"></i></a>
                    <h2 id="tituloForm">Agregar gasto</h2>
                    <hr>
                    <select name="idconcepto" id="idconcepto" class="form-control">
                        <?php foreach ($catalogogastos as $rowcatalogogastos ) { ?>
                          <option value="<?php echo $rowcatalogogastos['idconcepto']?>">
                            <?php echo $rowcatalogogastos['nombreconcepto']?>, <?php echo $rowcatalogogastos['costo']?>
                          </option>
                       <?php } ?>
                    </select>
                    <input class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad" type="text">
                    <button type="submit" class="btn btn-success form-control">Save</button>
                  </form>
                </div>
                <!-- Popup Div Ends Here -->
              </div>
              <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 500px; overflow: scroll">
                  <div class="row">
                    <div class="col-lg-1"></div>
                      <div class="table-responsive col-lg-10">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr><!--Renglones-->
                                    <th>Rubro</th><!--Colunas-->
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php foreach($gastosgeneral as $rowgastosgeneral){ ?>
                               <tr>
                                   <td><?php echo $rowgastosgeneral['nombrerubro']; ?></td>
                                   <td><?php echo $rowgastosgeneral['totalgasto']; ?></td>
                                   <td><a href="index.php/welcome/getdetallegastos?id_rubro=<?php echo $rowgastosgeneral['rubro'];?>"><i class="fa fa-plus-square fa-sm"></i> Ver Detalle</a></td>
                               </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                      </div>
                  </div>
                  <div class="col-lg-8"></div>
                  <div class="col-lg-4" id="add">
                    <a href="javascript:%20newdiv_show()" data-rel="popup">Agrega Gasto <i class="fa fa-plus-square fa-lg"></i></a>
                  </div>
                </div>
              </div><!-- /.nav-tabs-custom -->


            </section><!-- /.Left col -->

          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<?php include_once("sections/footer.php") ?>

