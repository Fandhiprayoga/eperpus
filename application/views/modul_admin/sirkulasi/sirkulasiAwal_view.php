<h1>
  TRANSAKSI PEMINJAMAN
    <small>Sirkulasi Awal</small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
  </li>
  <li class="active">Sirkulasi Transaksi</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
        <!-- awal-->
        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12" style="background-color:#42c8f2;color:white;height:63px;padding-top:12px;padding-right:19px;">
                <h4>SIRKULASI - Masukkan nomor anggota untuk mulai transaksi dengan papan kunci atau pemindai<br /></h4>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-md-12" style="height:105px;padding-top:28px;"><input type="text" style="margin-right:22px;width:253px;height:40px;" /><button class="btn btn-default" type="button" style="height:43px;color:#42c8f2;" id="btnmulai">MULAI TRANSAKSI</button></div>
        </div>
        </div>
      <!-- /.row -->
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
      <script>
             $(document).on('click', '#btnmulai', function(){ 
            // Your Code
            window.location.href = "<?php echo base_url();?>index.php/admin/sirkulasi/mulaisirkulasi";
        });
      </script>
    </section>