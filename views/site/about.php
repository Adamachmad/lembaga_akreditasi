<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Formulir Pengisian';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>


    <div class="button-container text-center mt-5">
        <h3 class="title-form">Pilih Formulir untuk Diisi:</h3>

        <!-- Tombol dalam posisi horizontal -->
        <div class="btn-container">
            <!-- Tombol 1 -->
            <a class="btn btn-lg btn-gradient shadow" href="index.php?r=akreditasiprodi%2Findex">Form Akreditasi</a>

            <!-- Tombol 2 -->
            <a class="btn btn-lg btn-gradient shadow" href="index.php?r=kapal">Form Penilaian</a>
        </div>
    </div>
</div>
<style>
.site-about {
        background: linear-gradient(135deg,rgb(255, 238, 0),rgb(0, 0, 0));
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 36px;
        color: #333;
        font-weight: bold;
    }

    p {
        font-size: 18px;
        color: #555;
    }

    .title-form {
        font-size: 24px;
        color: #333;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .button-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .btn-container {
        display: flex;
        justify-content: center;
        gap: 20px; 
        flex-wrap: wrap; 
    }

    .btn {
        padding: 15px 30px;
        font-size: 18px;
        text-decoration: none;
        border-radius: 50px;
        display: inline-block;
        transition: all 0.3s ease;
        min-width: 200px; 
        text-align: center;
    }

    .btn-gradient {
        background: linear-gradient(45deg, #ff7e5f, #feb47b);
        color: white;
        border: none;
    }

    .btn-gradient:hover {
        transform: translateY(-5px);
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .text-center {
        text-align: center;
    }
</style>