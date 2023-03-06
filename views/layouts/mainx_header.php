<?php

use yii2\theme\mazer\MainAsset;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var string $content
 */

$themeMazer = MainAsset::register($this);
?>

<header class="mb-5">
	<div class="header-top">
		<div class="container">
			<div class="logo">
				<a href="<?= Url::base() ?>">
					<img src="<?= "{$themeMazer->baseUrl}/images/logo/logo.svg" ?>" alt="Logo" />
				</a>
			</div>
			<div class="header-top-right">
				<div class="dropdown">
					<a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
						<div class="avatar avatar-md2">
							<img src="<?= "{$themeMazer->baseUrl}/images/avatar.png" ?>" alt="Avatar">
						</div>
						<div class="text">
							<h6 class="user-dropdown-name">
								Anov Siradj
							</h6>
							<p class="user-dropdown-status text-sm text-muted">
								Administrator
							</p>
						</div>
					</a>
					<ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
						<li>
							<a class="dropdown-item" href="<?= Url::toRoute(['/user/view']) ?>">
								My Profile
							</a>
						</li>
						<li>
							<a class="dropdown-item" href="<?= Url::toRoute(['/user/password']) ?>">
								Change Password
							</a>
						</li>
						<li>
							<hr class="dropdown-divider" />
						</li>
						<li>
							<a class="dropdown-item" href="<?= Url::toRoute(['/site/logout']) ?>">
								Logout
							</a>
						</li>
					</ul>
				</div>

				<!-- Burger button responsive -->
				<a href="#" class="burger-btn d-block d-xl-none">
					<i class="bi bi-justify fs-3"></i>
				</a>
			</div>
		</div>
	</div>

	<?= $this->render('/layouts/mainx_navbar') ?>
</header>
