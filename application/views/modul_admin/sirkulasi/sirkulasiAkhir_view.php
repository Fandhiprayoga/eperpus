<h1>
  TRANSAKSI PEMINJAMAN
    <small>Sirkulasi Transaksi</small>
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
        <div class="col-md-2" style="height:139px;padding-top:10px;padding-right:10px;padding-left:10px;padding-bottom:10px;"><button class="btn btn-default" type="button" id="btnselesai" style="height:90%;color:rgba(224,79,79,0.6);width:90%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;"><strong>SELESAI<br>TRANSAKSI</strong></button></div>
        <div class="col-md-4" style="padding-left:97px;">
            <div class="form-group">
                <p class="help-block" style="color:#42c8f2;">Nama Anggota</p><input type="text" readonly style="width:100%;border:0;" value="Fandhi Dhuga Prayoga" /></div>
            <div class="form-group">
                <p class="help-block" style="color:#42c8f2;">Nomor Identitas Anggota</p><input type="text" readonly style="width:100%;border:0;" value="14.12.0102" /></div>
        </div>
        <div class="col-md-4" style="padding-left:97px;">
            <div class="form-group">
                <p class="help-block" style="color:#42c8f2;">Email</p><input type="text" readonly style="width:100%;border:0;" value="fduga2@gmail.com" /></div>
        </div>
        <div class="col-md-2" style="padding-top:10px;padding-bottom:10px;padding-right:10px;padding-left:10px;"><img src="<?php echo base_url();?>asset/images/index.png" alt="foto_anggota" class="img-circle" style="width:119px;height:118px;" /></div>
        <div class="col-md-12">
            <hr />
            <div>
                <ul class="nav nav-tabs">
                    <li style="width:25%;font-size:20px;"><a href="#tab-1" role="tab" data-toggle="tab" style="color:#42c8f2;" align="center"><i class="glyphicon glyphicon-plus-sign"></i> PEMINJAMAN</a></li>
                    <li class="active" style="width:25%;font-size:20px;"><a href="#tab-2" role="tab" data-toggle="tab" style="color:#42c8f2;" align="center"><i class="glyphicon glyphicon-book"></i> PINJAMAN SAAT INI</a></li>
                    <li  style="width:25%;font-size:20px;"><a href="#tab-3" role="tab" data-toggle="tab" style="color:#42c8f2;" align="center"><i class="glyphicon glyphicon-usd"></i> DENDA</a></li>
                    <li style="width:25%;font-size:20px;"><a href="#tab-4" role="tab" data-toggle="tab" style="color:#42c8f2;" align="center"><i class="glyphicon glyphicon-time"></i> HISTORI</a></li>
                </ul>
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="tab-1">
                        <div class="row" style="margin-top:24px;">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p class="help-block lead">Input kode eksemplar/barcode</p>
                                    <div class="input-group" style="width:340px;">
                                        <div class="input-group-addon hidden"></div><input type="text" class="form-control" />
                                        <div class="input-group-btn"><button class="btn btn-warning" type="button">PINJAM!</button></div>
                                    </div>
                                </div>
                                <hr />
                                <div class="table-responsive" style="margin-top:19px;">
                                    <table class="table">
                                        <thead style="background-color:#999999;color:rgb(255,255,255);" align="center">
                                            <tr>
                                                <th>Hapus</th>
                                                <th>Kd Pinjam</th>
                                                <th>Kd Eksemplar</th>
                                                <th style="width:330px;">Judul</th>
                                                <th style="width:128px;">Tgl Pinjam</th>
                                                <th style="width:128px;">Tgl  Kembali</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td align="center"><button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-trash"></i></button></td>
                                                <td align="center">cell3</td>
                                                <td align="center">Cell 4</td>
                                                <td>Cell 5</td>
                                                <td align="center">Cell 6</td>
                                                <td align="center">Cell 7</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="tab-2">
                        <div class="table-responsive" style="margin-top:19px;">
                            <table class="table">
                                <thead style="background-color:#999999;color:rgb(255,255,255);" align="center">
                                    <tr>
                                        <th>Kembali</th>
                                        <th>Perpanjangan</th>
                                        <th>Kd Pinjam</th>
                                        <th>Kd Eksemplar</th>
                                        <th style="width:330px;">Judul</th>
                                        <th style="width:128px;">Tgl Pinjam</th>
                                        <th style="width:128px;">Tgl  hrs Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center"><button class="btn btn-warning" type="button"><i class="glyphicon glyphicon-arrow-left"></i></button></td>
                                        <td align="center"><button class="btn btn-info" type="button"><i class="glyphicon glyphicon-plus-sign"></i></button></td>
                                        <td align="center">Cell 3</td>
                                        <td align="center">Cell 4</td>
                                        <td>Cell 5</td>
                                        <td align="center">Cell 6</td>
                                        <td align="center">Cell 7</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-3">
                        <div class="row" style="margin-top:15px;">
                            <div class="col-md-12">
                                <p class="help-block lead" style="height:47px;padding-top:11px;padding-left:13px;color:rgb(255,255,255);background-color:rgba(224,79,79,0.6);"><strong>Total Denda yg belum dibayar : Rp. 0</strong><br /></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12"><button class="btn btn-default" type="button" style="margin-right:10px;color:rgba(224,79,79,0.6);"><i class="glyphicon glyphicon-plus"></i> Tambah Denda</button><button class="btn btn-default" type="button" style="margin-right:10px;"><i class="glyphicon glyphicon-list"></i> Daftar Denda</button>
                                <button
                                    class="btn btn-default" type="button"><i class="glyphicon glyphicon-ok-circle"></i> Denda Yg Sudah Lunas</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive" style="margin-top:19px;">
                                <table class="table">
                                    <thead style="background-color:#999999;color:rgb(255,255,255);" align="center">
                                        <tr>
                                            <th>Hapus</th>
                                            <th>Sunting</th>
                                            <th>Deskripsi/Nama</th>
                                            <th>Tgl Denda</th>
                                            <th style="width:128px;">Debet</th>
                                            <th style="width:128px;">Kredit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td align="center"><button class="btn btn-warning" type="button"><i class="glyphicon glyphicon-arrow-left"></i></button></td>
                                            <td align="center"><button class="btn btn-info" type="button"><i class="glyphicon glyphicon-plus-sign"></i></button></td>
                                            <td align="center">Cell 3</td>
                                            <td align="center">Cell 4</td>
                                            <td align="center">Cell 6</td>
                                            <td align="center">Cell 7</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="tab-4">
                        <div class="table-responsive" style="margin-top:19px;">
                            <table class="table">
                                <thead style="background-color:#999999;color:rgb(255,255,255);" align="center">
                                    <tr>
                                        <th style="width:94px;">Kd Eksemplar</th>
                                        <th style="width:330px;">Judul</th>
                                        <th style="width:128px;">Tgl Pinjam</th>
                                        <th style="width:128px;">Tgl  hrs Kembali</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td align="center">Cell 4</td>
                                        <td>Cell 5</td>
                                        <td align="center">Cell 6</td>
                                        <td align="center">Cell 7</td>
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
        <!-- awal-->
        </div>
       </div>
      <!-- /.row -->
      <script type="text/javascript" src="<?php echo base_url(); ?>asset/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
      
      <script>
        $(document).on('click', '#btnselesai', function(){ 
            // Your Code
            window.location.href = "<?php echo base_url();?>index.php/admin/menu/sirkulasi";
        });

       
      </script>
    </section>