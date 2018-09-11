<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/DataTables-1.10.18/css/jquery.dataTables.min.css"/>

<h1>
  Master Siswa
    <small>Tambah Siswa</small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
  </li>
  <li class="active">Master Siswa</li>
  <li class="active">Tambah Siswa</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
            <!---------------------->
            <div>
                <div style="text-align:left;">
                    <a class="btn btn-primary" role="button" href="<?php echo base_url(); ?>index.php/admin/menu/siswa" style="margin-right:9px;"><i class="fa fa-list"></i> Daftar Siswa</a>
                    <a class="btn btn-primary" role="button" href="#"><i class="icon ion-person-add"></i> Tambah Siswa</a>
                </div>
                <div>
        <br>
        <form>
        <div class="form-group"><label>Nomor Induk Siswa</label><input type="text" class="form-control" /></div>
        <div class="form-group"><label>Nama Siswa</label><input type="text" class="form-control" /></div>
        <div class="form-group"><label>Jenis Kelamin</label>
            <div class="form-check"><input type="radio" class="form-check-input" name="formCheck-1" /><label for="formCheck-1" class="form-check-label">Laki-Laki</label></div>
            <div class="form-check"><input type="radio" class="form-check-input" name="formCheck-1" /><label for="formCheck-2" class="form-check-label">Perempuan</label></div>
        </div>
        <div class="form-group"><label>Upload Foto (opsional)</label><input type="file" accept="image/*" class="d-block" style="margin-top:9px;" /></div>
        <div class="form-group"><label>Tanggal Lahir</label><input type="date" class="form-control" /></div>
        <div class="form-group"><label>Alamat</label><textarea class="form-control"></textarea></div><button class="btn btn-primary btn-block" type="button">SIMPAN</button><button class="btn btn-danger btn-block" type="button">KEMBALI</button>
        </form>
        </div>

            </div>
            <!---------------------->       
        </div>
       </div>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>

    <script>
   
        $(document).ready( function () {
            $('#table_siswa').DataTable({ordering:  false});
        } );
    </script>
      <!-- /.row -->
    </section>
