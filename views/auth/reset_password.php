<?php

use yii2\theme\mazer\MainAsset;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$themeMazer = MainAsset::register($this);
?>

<div class="row h-100">
    <div class="col-lg-5 col-12">
        <div id="auth-left">
            <div class="auth-logo">
                <a href="<?= Url::current() ?>">
                    <img src="<?= "{$themeMazer->baseUrl}/images/logo/logo.svg" ?>" alt="Logo" />
                </a>
            </div>

            <h1 class="auth-title">Reset Password</h1>
            <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>

            <form action="index.html">
                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>

                <div class="form-group position-relative has-icon-left mb-4">
                    <input type="email" class="form-control form-control-xl" placeholder="Email">
                    <div class="form-control-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>
                <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Send</button>
            </form>
            
        </div>
    </div>
    <div class="col-lg-7 d-none d-lg-block">
        <div id="auth-right">

        </div>
    </div>
</div>
