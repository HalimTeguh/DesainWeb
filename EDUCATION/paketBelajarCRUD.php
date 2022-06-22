<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Paket Belajar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body class="bg-light">
    <!-- HEADER -->
    <nav class="navbar" style="background-color: #EB8947;">
        <div class="container-fluid">
            <ul class="nav justify-content-start">
                <li class="nav-item pl-5">
                    <a class="navbar-brand mb-0 h1 " href="indeks.html" style="color: #ffffff;">
                        <h3>EDUCATION</h3>
                    </a>
                </li>
            </ul>
            <ul class="nav justify-content-end">
                <li class="nav-item px-3">
                    <a class="nav-link mb-0 text-light h6" href="#">HOME</a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link active mb-0 text-light h6" aria-current="page" href="#"><b>SUNTING</b></a>
                </li>
                <li class="nav-item px-3 pr-5">
                    <a class="nav-link mb-0 text-light h6" href="#">LOGOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- ini Body -->
    <div class="container bg-light p-2">
        <h3 class="p-4 py-5 mb-0">
            SELAMAT DATANG ADMINISTRATOR
        </h3>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item px-3" role="presentation">
                <button class="nav-link" id="pegawai-tab" data-bs-toggle="tab" data-bs-target="#pegawai" type="button" role="tab" aria-controls="home" aria-selected="fase">Pegawai</button>
            </li>
            <li class="nav-item px-3" role="presentation">
                <button class="nav-link active" id="PaketBelajar-tab" data-bs-toggle="tab" data-bs-target="#PaketBelajar" type="button" role="tab" aria-controls="profile" aria-selected="true">Paket Pembelajaran</button>
            </li>
            <li class="nav-item px-3" role="presentation">
                <button class="nav-link" id="VideoBelajar-tab" data-bs-toggle="tab" data-bs-target="#VideoBelajar" type="button" role="tab" aria-controls="contact" aria-selected="false">Video Pembelajaran</button>
            </li>
            <li class="nav-item px-3" role="presentation">
                <button class="nav-link" id="Artikel-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Article</button>
            </li>
        </ul>
        <div class="tab-content p-2" id="myTabContent" style="background-color:#ffffff ;">
            <div class="tab-pane fade show active" id="pegawai" role="tabpanel" aria-labelledby="pegawai-tab">
                <nav class="navbar navbar-light">
                    <div class="container-fluid">
                        <h1>CRUD Paket Belajar</h1>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="border-radius:50px">
                            <button class="btn btn-info mx-1" type="submit" style="border-radius:50px">Search</button>
                            <button class="btn btn-success mr-1" type="submit" style="width: 300px; border-radius:50px">Tambah Paket</button>
                        </form>
                    </div>
                    <hr>
                </nav>
                <table class="table table-hover">
                    <thead class="text-light" style="background-color: #EB8947;">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Paket</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Benefit</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Pengaturan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "myconnection.php";

                        $query = "SELECT * FROM paketBelajar";
                        $result = mysqli_query($connect, $query);
                        $indeks = 0;

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $indeks++;
                        ?>
                                <tr>
                                    <th scope="row"><?php echo $indeks ?></th>
                                    <td><?php echo $row["nama"]; ?></td>
                                    <td><?php echo $row["alamat"]; ?></td>
                                    <td><?php echo $row["no_hp"]; ?></td>
                                    <td><?php echo $row["posisi"]; ?></td>
                                    <td><?php echo $row["gaji"]; ?></td>
                                    <td>
                                        <a href="detailpegawai.php?id_buku=<?php echo $row["nik"]; ?>">
                                            <button class="btn btn-info mx-1 ml-3" style="border-radius:50px">Detail</button></a>
                                        <a href="editpegawai.php?id_buku=<?php echo $row["nik"]; ?>">
                                            <button class="btn btn-warning mx-1" style="border-radius:50px">Edit</button></a>
                                        <a href="deletepegawi.php?id_buku=<?php echo $row["nik"]; ?>">
                                            <button class="btn btn-danger mx-1" style="border-radius:50px">Hapus</button></a>
                                    </td>
                                </tr>
                        <?php
                            }
                        } else {
                            echo "0 result";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade " id="PaketBelajar" role="tabpanel" aria-labelledby="PaketBelajar-tab">
                <h1>ini Paket Belajar</h1>
            </div>
            <div class="tab-pane fade" id="VideoBelajar" role="tabpanel" aria-labelledby="VideoBelajar-tab">
                <h1>ini Videp Belajar</h1>
            </div>
            <div class="tab-pane fade" id="Artikel" role="tabpanel" aria-labelledby="Artikel-tab">
                <h1>ini Artikel</h1>
            </div>
        </div>
    </div>

    <!-- ini Footer -->
    <footer class="page-footer m-0" style="background-color: #EB8947 ;">
        <div class="row m-0">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <p class="p-4 text-light" style="font-weight:bold;">© 2022 EDUCATION Landing Page. All rights reserved</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-2"></div>
        </div>
    </footer>
</body>

</html>