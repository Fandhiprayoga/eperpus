<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/DataTables-1.10.18/css/jquery.dataTables.min.css"/>

<h1>
  Surat Masuk
    <small></small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="fa fa-home"></i> Dashboard</a>
  </li>
  <li class="active">Surat Masuk</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
             
                    <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <p class="help-block">No. Agenda :</p><input type="text" class="form-control" /></div>
                                <div class="form-group">
                                    <p class="help-block">Asal Surat :</p><input type="text" class="form-control" /></div>
                                <div class="form-group">
                                    <p class="help-block">Nomor Surat :</p><input type="text" class="form-control" /></div>
                                <div class="form-group">
                                    <p class="help-block">Isi Ringkasan</p><textarea class="form-control" style="width:100%;height:101px;"></textarea></div>
                                <div class="form-group"><button class="btn btn-success btn-block" type="button" style="margin-right:13px;">SIMPAN</button></div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <p class="help-block">Kode Klasifikasi :</p><select class="form-control"><optgroup label="This is a group"><option value="12" selected>This is item 1</option><option value="13">This is item 2</option><option value="14">This is item 3</option></optgroup></select></div>
                                <div
                                    class="form-group">
                                    <p class="help-block">Index  Berkas :</p><input type="text" class="form-control" /></div>
                        <div class="form-group">
                            <p class="help-block">Tanggal Surat :</p><input type="date" class="form-control" /></div>
                        <div class="form-group">
                            <p class="help-block">File Surat (scan)</p><input type="file" /></div>
                        <div class="form-group">
                            <p class="help-block">Keterangan :</p><input type="text" class="form-control" /></div>
                        </form>
                    </div>
                </div>
                
                </div>

              <!-- /.col -->
            </div>
       </div>

       <div class="box box-info">
       <div class="box-header with-border">
            <div class="container-fluid">
            <div class="row" style="margin-top:20px;">
                <div class="container-fluid">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table" id="table_inbox">
                                <thead>
                                    <tr>
                                        <th style="width:91px;">No Agd/Kode</th>
                                        <th style="width:304px;">Isi Ringkasan , File</th>
                                        <th style="width:175px;">Asal Surat</th>
                                        <th style="width:100px;">Nomor, Tgl Surat</th>
                                        <th style="width:178px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cell 1</td>
                                        <td>Cell 2</td>
                                        <td>Cell 3</td>
                                        <td>Cell 4</td>
                                        <td><button class="btn btn-success" type="button"><i class="glyphicon glyphicon-edit"></i></button><button class="btn btn-info" type="button"><i class="glyphicon glyphicon-th-list"></i></button><button class="btn btn-warning" type="button"><i class="glyphicon glyphicon-print"></i></button>
                                            <button
                                                class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
       </div>
       </div>
       <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>  
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/DataTables-1.10.18/js/jquery.dataTables.min.js"></script>
        <script>
        $(document).ready( function () {
            $('#table_inbox').DataTable({ordering:false});
        } );
        </script>
      <!-- /.row -->
    </section>