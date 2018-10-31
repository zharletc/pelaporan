<body>
<center><H2> LAPORAN MODERASI  </H2></center>
<?php
foreach ($iklan as $output) {
    echo form_open('manage/moderasiSubmit');?>
    <div class="container" style="background-color:#e8e8e8; border:2px solid grey; border-radius: 10px">
        <?php echo form_open_multipart('laporan/editlaporansubmit'); ?>
        <?php echo form_hidden('id_laporan', $output->ID_IKLAN); ?>
        <?php echo form_hidden('foto', $output->COVER_LAPORAN); ?>
        <div class="form-group">
            <label>JUDUL</label>
            <input name="judul" class="form-control" type="text" placeholder="judul" value=" <?php echo $output->JUDUL ?> " >
        </div>
        <div class="form-group">
            <label>COVER</label>
            <img style='width:400px;' class='card-img-top' src='<?php echo $output->COVER_LAPORAN ?>' alt='image cap'>
        </div>
        <div class="form-group">
            <label>ISI LAPORAN</label>
            <textarea style="height: 300px;" name = "deskripsi" type="text" class="form-control" placeholder="deskripsi"><?php echo $output->DESKRIPSI ?></textarea>
        </div>
        <div class="form-group">
            <label>Dari : <?php echo $output->USERNAME_MEMBER;?></label>
        </div>
        <p><?php echo $output->ID_IKLAN?></p>
        <div class="form-group">
            <label>STATUS</label>
            <select name='status' class="form-control"">
                <option>Validasi</option>
                <option>Tolak</option>
            </select>

        </div>
        <button type="submit" name="submit" class="btn btn-primary">SUBMIT</button>
        </br>
        </br>

    </div>
    </br>

    <?php
    echo form_close();
}
?>
</div>
</body>