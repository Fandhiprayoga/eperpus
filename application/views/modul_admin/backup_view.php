<h1>
  Backup
    <small>Version 1.0</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="glyphicon glyphicon-tasks"></i> Tool</a></li>
    <li class="active">Backup</li>
</ol>
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="box box-info">
       <div class="box-header with-border">
              <?php 
                $q_instansi = $this->db->query("SELECT * FROM tb_instansi LIMIT 1")->row();
              ?>

                      <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo; ?>" class="thumbnail span3" style="display: inline; float: left; margin-right: 20px; width: 100px; height: 100px">
                      <img src="<?php echo base_url(); ?>upload/<?php echo $q_instansi->logo_perpus; ?>" class="thumbnail span3" style="display: inline; float: right; margin-right: 20px; width: 100px; height: 100px">
                      <h2 align="center">PERPUSTAKAAN ELEKTRONIK (E-PERPUS)</h2>
                      <h2 style="margin: 15px 0 10px 0; color: #000;" align="center"><?php echo $q_instansi->nama; ?></h2>
                      <div style="color: #000; font-size: 16px; font-family: Tahoma" class="clearfix"><b>Alamat : <?php echo $q_instansi->alamat; ?></b></div>

              <!-- /.col -->
            </div>
        </div>
        <div class="box box-info">
          <div class="box-header with-border">
               <!-- Nav tabs, ini tombol tab di atas -->
            <ul class="nav nav-tabs">
            <!-- Untuk Semua Tab.. pastikan a href=”#nama_id” sama dengan nama id di “Tap Pane” dibawah-->
              <li class="active"><a href="#profile" data-toggle="tab">Backup Database</a></li>
              <li><a href="#messages" data-toggle="tab">Optimize Database</a></li>
              <li><a href="#settings" data-toggle="tab">Restore Database</a></li>
            </ul>
            <!-- Tab panes, ini content dari tab di atas -->
            <div class="tab-content">
              <div class="tab-pane active" id="profile">
              <br><?php echo $this->session->flashdata("k");?>
                      
                  Klik pada tombol "Backup" disamping untuk memulai proses backup &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="<?=base_URL()?>apps/tool/backup" class="btn btn-success">Backup</a>
                    <br><br>
              </div>
              <div class="tab-pane" id="messages">
                <br>Klik pada tombol "Optimize" disamping untuk memulai proses optimize database &nbsp;&nbsp;&nbsp;&nbsp;
                  <a href="<?=base_URL()?>apps/tool/optimize" class="btn btn-success">Optimize</a>
                    <br><br>
              </div>
              <div class="tab-pane" id="settings">
                <br>
                  <form action="<?=base_URL()?>apps/tool/restore" method="post" accept-charset="utf-8" enctype="multipart/form-data"> 
                      
                      <label style="width: 150px; float: left">File Backup</label><input class="span4" type="file" name="file_backup" required><br>
                      <button type="submit" class="btn btn-primary">Restore</button>
                  </form>
              </div>
            </div>
          </div>
        </div>
      <!-- /.row -->
    </section>
