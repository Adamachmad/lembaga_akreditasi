<?php

/** @var yii\web\View $this */

$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent">
        <h1 class="display-4">Selamat Datang di Lembaga Akreditasi</h1>
        <p class="lead">Platform untuk mengelola akreditasi lembaga pendidikan.</p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Prodi</h5>
                        <p class="card-text">Kelola program studi yang ada di universitas.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/prodi/index']) ?>" class="btn btn-outline-secondary">Lihat Prodi &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas</h5>
                        <p class="card-text">Kelola fakultas yang ada di universitas.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/fakultas/index']) ?>" class="btn btn-outline-secondary">Lihat Fakultas &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Universitas</h5>
                        <p class="card-text">Kelola universitas yang terdaftar.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/universitas/index']) ?>" class="btn btn-outline-secondary">Lihat Universitas &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Akreditasi Prodi</h5>
                        <p class="card-text">Kelola akreditasi untuk program studi.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/akreditasiprodi/index']) ?>" class="btn btn-outline-secondary">Lihat Akreditasi Prodi &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Lembaga Akreditas</h5>
                        <p class="card-text">Kelola lembaga akreditasi yang ada.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/lembagaakreditas/index']) ?>" class="btn btn-outline-secondary">Lihat Lembaga Akreditas &raquo;</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Indikator</h5>
                        <p class="card-text">Kelola indikator penilaian akreditasi.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/indikator/index']) ?>" class="btn btn-outline-secondary">Lihat Indikator &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="card text-white bg-dark">
                    <div class="card-body">
                        <h5 class="card-title">Penilaian Prodi</h5>
                        <p class="card-text">Kelola penilaian akreditasi untuk program studi.</p>
                        <a href="<?= Yii::$app->urlManager->createUrl(['/penilaianprodi/index']) ?>" class="btn btn-outline-secondary">Lihat Penilaian Prodi &raquo;</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>