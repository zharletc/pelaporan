<body>

    <div class="container">
        <H2> BUAT LAPORANMU ! </H2>
        <?php echo form_open_multipart('laporan/buatlaporanSubmit'); ?>
        <?php echo form_hidden('user', $_SESSION['user']); ?>
        <div class="form-group">
            <label>JUDUL</label>
            <input name="judul" class="form-control" type="text" placeholder="judul">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label>COVER LAPORAN</label>
            <input type="file" name="userfile" size="2000" />
        </div>
        <div class="form-group">
            <label>DESKRIPSI LAPORAN</label>
            <textarea name = "deskripsi" type="text" class="form-control" placeholder="isi laporan" style="height: 300px;"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        <?php echo form_close(); ?>
    </div>
</body>