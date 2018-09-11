<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/DataTables-1.10.18/css/jquery.dataTables.min.css"/>

<h1>
  Klasifikasi Surat
    <small>Tambah klasifikasi surat</small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
  </li>
  <li class="active">New Klasifikasi Surat</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
             <!----------------------->
            <div style="margin-bottom:11px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <form>
                                <div class="form-group"><label>Kode :</label><input type="text" class="form-control" /></div>
                                <div class="form-group"><label>Nama :</label><input type="text" class="form-control" /></div>
                                <div class="form-group"><label>Uraian :</label><textarea class="form-control"></textarea></div>
                                <button class="btn btn-success" type="button" style="margin-right:13px;"><i class="fa fa-check"></i> Simpan</button>
                                <button class="btn btn-danger" type="button"><i class="fa fa-arrow-left"></i> Kembali</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
             <!----------------------->
            </div>
       </div>
       <div class="box box-info">
       <div class="box-header with-border">
       <div class="container-fluid">
    <div class="table-responsive">
        <table class="table" id="table_klas">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Bobot</th>
                    <th style="width:101px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                    <td>Cell 3</td>
                    <td><button class="btn btn-success" type="button"><i class="glyphicon glyphicon-edit"></i></button><button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
       </div>
       </div>
      <!-- /.row -->
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>  
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_klas').DataTable({ordering:false});
        } );
    </script>
    </section>