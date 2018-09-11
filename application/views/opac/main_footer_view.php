<div class="container-fluid" style="margin-top:10px;" align="center">
        <p style="height:36px;">Versi 1.0 ©Fajar Mahardika<br></p>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>
<script>
     $(document).on('click', '#btndetail', function(){ 
            // Your Code
            window.location.href = "<?php echo base_url();?>index.php/opac/detailbuku";
        });
</script>
</html>