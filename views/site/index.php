<?php

/** @var yii\web\View $this */

$this->title = 'Beranda';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="jumbotron text-center bg-gradient text-white mt-5 mb-5 py-5 rounded">
        <img src="https://i.pinimg.com/originals/d4/e8/b9/d4e8b952e96794dabc90ccbb70409c3b.jpg" alt="Welcome Image" class="img-fluid mb-4" style="max-width: 200px;">
        <h1 class="display-4 fw-bold" style="font-size: 3rem;">🎉 Selamat Datang Di Aplikasi ini 🎉</h1>

        <!-- Tombol untuk menuju ke halaman About -->
        <p><a class="btn btn-lg btn-warning shadow-lg text-dark" href="<?= \yii\helpers\Url::to(['site/about']) ?>">Mulai Mengisi</a></p>
    </div>
