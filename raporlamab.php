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
                <h3 class="card-title">Raporlama</h3>
              </div>

              <!-- /.card-header -->
              <!-- form start -->

              <form action="islemtxt.php" method="POST" role="form">

                <div class="card-body">
                 <div class="form-group">
                    <label > Numara</label>
                    <input name= "num" type="text" class="form-control" value="<?php $num?>" placeholder="Numara giriniz">
                  </div>

                <div class="card-footer">
                  <button name="raporla" type="submit" class="btn btn-primary">Raporla</button>
                </div>
                                
                <div class="card-body">
                  <div class="form-group">
                    <label >Vize</label>
                    <input name="vize" type="text" class="form-control" value="Böyle bir kayıt bulunmamaktadır." placeholder="vize">
                  </div>


                  <div class="form-group">
                    <label >Final</label>
                    <input name="final" type="text" class="form-control" value="Böyle bir kayıt bulunmamaktadır." placeholder="final">
                  </div>


                  <div class="form-group">
                    <label >Ortalama</label>
                    <input name="basari" type="float" class="form-control" value="Böyle bir kayıt bulunmamaktadır." placeholder="basari">
                  </div>

                  <div class="form-group">
                    <label >Harf Notu</label>
                    <input name="harf" type="text" class="form-control" value="Böyle bir kayıt bulunmamaktadır."  placeholder="Harf Notu">
                  </div>

                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->

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
<?php   include'footer.php';?>