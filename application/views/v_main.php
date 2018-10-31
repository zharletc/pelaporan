<head><style>
        #imaginary_container{
            margin-bottom:0%;
        }
        .stylish-input-group .input-group-addon{
            background: white !important; 
        }
        .stylish-input-group .form-control{
            border-right:0; 
            box-shadow:0 0 0; 
            border-color:#ccc;
        }
        .stylish-input-group button{
            border:0;
            background:transparent;
        }
    </style></head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 "><h3 class="text-muted">SELAMAT DATANG</h3></div>
            <div class="col-sm-6 ">
                <?php echo form_open('iklan/search'); ?>
                <div class="input-group stylish-input-group">
                    <input type="text" name="inputsearch" class="form-control"  placeholder="Cari Iklan" >
                    <span class="input-group-addon">
                        <button type="submit" name="search">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>

                </div>

                <?php echo form_close(); ?>
            </div>
        </div>


        <nav>

            <ul class="nav nav-justified">
                <li class="active"><a href="#">HOME</a></li>
                <li><a href="profil/profilku">PROFIL KU</a></li>
                <li><a href="laporan/laporanku">LAPORAN KU</a></li>
                <li><a href='laporan/buatlaporan'>BUAT LAPORAN</a></li>
                <li><a href='logout'>Logout</a></li>
            </ul>
        </nav>
    </div>
