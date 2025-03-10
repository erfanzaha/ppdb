<?php
require "config/database.php";
require "config/function.php";
require "config/functions.crud.php";
?>

<div class="row ">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Total Pendaftar</h4>
                </div>
                <div class="card-body">
                    <?= rowcount($koneksi, 'daftar') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Data Sekolah/ Madrasah</h4>
                </div>
                <div class="card-body">
                    <?= mysqli_num_rows(mysqli_query($koneksi, 'select * from daftar group by asal_sekolah')) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Program Madrasah</h4>
                </div>
                <div class="card-body">
                    <?= rowcount($koneksi, 'jurusan') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12 animated flipInX">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fas fa-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Kuota Pendaftaran</h4>
                </div>
                <div class="card-body">
                    <?php $kuota = mysqli_fetch_array(mysqli_query($koneksi, "select *, sum(kuota) as kuota from jurusan"));
                    echo $kuota['kuota']; ?>
                </div>
            </div>
        </div>
    </div>
</div>