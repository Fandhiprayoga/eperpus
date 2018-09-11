<h1>
Pengaturan
    <small>Version 1.0</small>
</h1>
<ol class="breadcrumb">
  <li>
    <a href="#"><i class="glyphicon glyphicon-cog"></i> Pengaturan</a>
  </li>
  <li class="active">Panel</li>
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
          <h4 style="font-weight: bold"> &nbsp PERPUSTAKAAN ELEKTRONIK (E-PERPUS) </h4>
          <h5> &nbsp &copy;  2018. Waktu Eksekusi : {elapsed_time}, Penggunaan Memori : {memory_usage} </h5>
          <br>
       </div>
        
            <script src="<?php echo base_url(); ?>asset/plugins/flot-charts/jquery.flot.js"></script>
            <script src="<?php echo base_url(); ?>asset/plugins/flot-charts/jquery.flot.resize.js"></script>
            <script src="<?php echo base_url(); ?>asset/plugins/flot-charts/jquery.flot.pie.js"></script>
            <script src="<?php echo base_url(); ?>asset/plugins/flot-charts/jquery.flot.categories.js"></script>
            <script src="<?php echo base_url(); ?>asset/plugins/flot-charts/jquery.flot.time.js"></script>
      <!-- /.row -->
    </section>