<div class="container hero" style="margin-top:490px; margin-top:-440px;">
            <div class="row">
                <div class="col" style="margin-top:20px;" align="center">
                    <p align="center" style="font-size:32px;font-style:normal;margin-bottom:5px; color:white;"><strong>PENCARIAN</strong></p>
                    <p align="center" style="margin-bottom:10px; color:white;">masukkan satu atau lebih kata kunci dan judul , pengarang, atau subjek</p>
                    <div class="input-group d-inline-flex" style="height:54px;width:681px;">
                        <div class="input-group-prepend"></div><input class="form-control" type="text">
                        <div class="input-group-append"><button class="btn btn-primary" type="button" id="btncari" style="background-color:rgba(255,255,255,0.3);">CARI !</button></div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:220px;">
                <div class="col" style="margin-top:-180px;" align="center">   
                <ul id="lightSlider">
                <?php
                    for ($x = 0; $x <= 20; $x++)
                    {
                        echo '<li>';
                        echo     '<a href="'.base_url().'index.php/opac/detailbuku"><img src="'.base_url().'asset/images/docs/image.png" alt="opac_promote" height="152" width="107"></a>'; 
                        echo '</li>';
                    } 
                ?>
                </ul>
                </div>
            </div>
        </div>