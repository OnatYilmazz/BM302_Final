<?php include'header.php';

?>
    <!-- Main content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Mersin Üniversitesi Giriş Ekranına Hoş Geldiniz.</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
              <li class="breadcrumb-item active">Giriş</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
 <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Hesaplama</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="islem.php" method="POST" role="form">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label >Numara</label>
                    <input name= "num" type="text" class="form-control" value="<?php echo $ayarcek['num']?>" placeholder="Numara giriniz">
                  </div>

                <div class="card-footer">
                  <button name="hesapla" type="submit" class="btn btn-primary">Hesapla</button>
                </div>

                  <div class="form-group">
                    <label >vize</label>
                    <input name="vize" type="text" class="form-control" value="<?php echo $ayarcek['vize']?>"
                  </div>


                  <div class="form-group">
                    <label >final</label>
                    <input name="final" type="text" class="form-control" value="<?php echo $ayarcek['final']?>"
                  </div>

                <div class="card-footer">
                  <button name="hesapla" type="submit" class="btn btn-primary">Hesapla</button>
                </div>
               </form>
            </div>
            <!-- /.card -->

                  <div class="form-group">
                    <label >Başarı Ortalaması</label>
                    <input name="basari" type="text" class="form-control" value="<?php echo $ayarcek['basari']?>"
                  </div>
              </form>
            </div>            
                <!-- /.card-body -->

        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include'footer.php';?>