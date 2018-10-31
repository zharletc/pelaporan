<body>
    <div class="container">
        <div class="masthead">
            <h3 class="text-muted">SELAMAT DATANG</h3>
            <nav>
                <?php
                if (!isset($_SESSION['user'])) {
                    echo " <nav>
            <div class = 'navbar-collapse collapse'>
            <ul class = 'nav navbar-nav navbar-left'>
            <li class = 'active'><a href = '../../home'>HOME</a></li>
            </ul>
            <ul class = 'nav navbar-nav navbar-right'>
            <li class = 'clicked'> <a href = 'create'>BUAT AKUN</a></li>
            <li class = 'active'><a href = 'login'>LOGIN</a></li>
            </ul>
            </nav>";
                } else {
                    echo "
                <ul class = 'nav nav-justified'>
                <li ><a href = '../main'>HOME</a></li>
                <li><a href = '../profil/profilku'>PROFIL KU</a></li>
                <li class = 'active'><a href = 'laporan/laporanku'>LAPORAN KU</a></li>
                <li><a href = 'buatlaporan'>BUAT LAPORAN</a></li>";
                }
                ?>
				<li><a href = '../logout'>Logout</a></li>
                </ul>
            </nav>
        </div>
