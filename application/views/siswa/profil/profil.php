<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Biodata SISWA</title>
    <style>
        body {
            background-color: #e8e8e8;
        }

        .kartu {
            width: 800px;
            margin: 0 auto;
            margin-top: 70px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .03);
            transition: all .3s;
        }

        .foto {
            padding: 20px;
        }

        tbody {
            font-size: 20px;
            font-weight: 300;
        }

        .biodata {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <a href="">
        <h3 class="text-center text-success mt-3">Biodata siswa</h3>
    </a>
    <!-- Isi Biodata Paling Keren di HTML disini -->
    <div class="container">
        <div class="card kartu">
            <div class="row">
                <div class="col-md-4">
                    <div class="foto">
                        <img src="https://www.interskill.id/empty-photo.png" alt="" width="230" height="260">
                    </div>
                </div>
                <div class="col-md-8 kertas-biodata">
                    <div class="biodata">
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td valign="top">
                                        <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
                                            <tbody>
                                                <h3>PROFIL SISWA </h3>
                                                <hr>
                                                <tr>
                                                    <td width="25%" valign="top" class="textt">Nama</td>
                                                    <td width="2%">:</td>
                                                    <td style="color: rgb(118, 157, 29); font-weight:bold"> <?= $user['nama_siswa']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">nis</td>
                                                    <td>:</td>
                                                    <td> <?= $user['nis']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">Kelas</td>
                                                    <td>:</td>
                                                    <td> <?= $user['kelas']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">Tahun ajaran</td>
                                                    <td>:</td>
                                                    <td> <?= $user['tahun_ajaran']; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">nama sekolah</td>
                                                    <td>:</td>
                                                    <td>SMK N 1 JAKARTA</td>
                                                </tr>
                                                <tr>
                                                    <td class="textt">username</td>
                                                    <td>:</td>
                                                    <td> <?= $user['username']; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>