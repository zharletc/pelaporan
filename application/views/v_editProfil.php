<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">UBAH PROFIL MU</h3>
            <nav>
                <ul class="nav nav-justified">
                    <li ><a href="../main">HOME</a></li>
                    <li class="active"><a href="../profil/profilku">PROFIL KU</a></li>
                    <li><a href="../laporan/laporanku">LAPORAN KU</a></li>
                    <li><a href="../laporan/buatlaporan">BUAT LAPORAN</a></li>
                     <li><a href='../logout'>Logout</a></li>
                </ul>
            </nav>
        </div>
        </BR>
        <?php echo form_open_multipart('profil/editProfilSubmit'); ?>
        <div class="form-group">
            <label>NAMA</label>
            <input name="nama" class="form-control" type="text" placeholder="nama" value="<?php echo $user['NAMA'] ?>">

        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input name="email" type="email" class="form-control" id="exampleInput" aria-describedby="emailHelp" placeholder="email" value="<?php echo $user['EMAIL'] ?>">

        </div>
        <div class="form-group">
            <label>USERNAME</label>
            <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" value="<?php echo$user['USERNAME'] ?>" readonly>

        </div>
        <div class="form-group">
            <label>TGL LAHIR</label>
            <input name="tgl_lahir" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="username" value="<?php echo $user['TANGGAL_LAHIR'] ?>">

        </div>
        <div class="form-group">
            <label>FOTO PROFIL</label>
            <input type="file" name="userfile" size="20" />
            <br /><br />
        </div>
        <div class="form-group">
            <label>NO HAPE</label>
            <input name="no_hape" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="no hape" value="<?php echo $user['NO_HAPE'] ?>">

        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
    </div>

</body>



