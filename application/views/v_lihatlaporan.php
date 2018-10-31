<body>
    <div class ="container"?>
        <div class="row">
            <H2 style="color:grey;font-size:20px;">LAPORAN</H2>
            <hr>
            <?php
            foreach ($iklan as $output) {
                $string = $output->DESKRIPSI;
                $deskripsi = $string;
                echo "  <center>
            <p class='user'>LAPORAN DARI : <a href='../../profil/lihatprofil/$output->USERNAME_MEMBER'>$output->USERNAME_MEMBER</a> ";
                echo "
            <div class='container'> 
            <ul class='list-group list-group-flush'>
            <div class='card' style='width: 100rem; position:relative; top: 30px;'>
            <div class='card-block'>
            <h4 class='card-title'>$output->JUDUL</h4>
            <p class='card-text'>$output->TANGGAL</p>
            </div>
            <ul class='list-group list-group-flush'>
            <img style='width:300px;'class='card-img-top' src='$output->COVER_LAPORAN' alt='cover laporan'>
            <p class='card-text'>$output->DESKRIPSI</p>
            <li class='list-group-item'>$output->STATUS_LAPORAN</li>
            
            </ul>     
            </div> 
            </div> </center>";
            }
            ?>
        </div>
        </br>
        </br>
         <div class='col-lg-6'>
        <?php
        if (isset($_SESSION['user'])) {
            foreach ($komentar as $output) {
                echo "
            
        <b><p> " . $output->USERNAME_MEMBER . "</p></b>
        <p> " . $output->KOMENTAR;
            }
        } else {
            foreach ($komentar as $output) {
                echo "
            
        <b><p> " . $output->USERNAME_MEMBER . " </p></b>
        <p> " . $output->KOMENTAR . ""
                . "</p>";
            }
        }
        ?>
    </div>
    <br><br>
        <h3>BERI TANGGAPAN</h3>
        <?php echo form_open('laporan/komentarSubmit'); ?>
        <?php
        $id = $this->uri->segment(3);
        ?>

        <?php
        if (isset($_SESSION['user'])) {
            echo form_hidden('user', $_SESSION['user']);
            echo form_hidden('id', $id);
            echo"
                <div class='row'>
                <div class='col-lg-4'>
        <table>
       
        <tr><td>Komentar : </td><td> " . form_textarea('komentar', '') . "</td></tr>
        <tr><td></td><td> " . form_submit('submit', 'SUBMIT') . "</td></tr>
       </div>
";
        } else {
            echo "UNTUK BERKOMENTAR SILAHKAN LOGIN";
        }
        ?>

    </table>
    <?php echo form_close(); ?>
   
    </div>
</div>
</div>
</body>
</html>