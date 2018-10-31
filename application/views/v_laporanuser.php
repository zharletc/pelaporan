<div class ="container"?>
    <div class="row">
        <H2 style="color:grey;font-size:20px;">LAPORAN</H2>
        <hr>
        <?php
        
            foreach ($iklan as $output) {
                $string = $output->DESKRIPSI;
                if (strlen($string) > 50) {
                    $deskripsi = substr($string, 0, 50);
                } else {
                    $deskripsi = $string;
                }
                echo "
             <div class='col-lg-4'>
             <h2><a href='../../main/lihatlaporan/$output->ID_IKLAN'>$output->JUDUL</a></h2>
             <p>$deskripsi</p>      
             <img style='width:300px;'class='image' src='$output->COVER_LAPORAN' alt='$output->JUDUL'>        
             </div> ";
            }
            ?>
    </div>
</div>
</div>
</body>
</html>