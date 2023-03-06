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

<?php $this->registerJs(<<<'JS'
	/* auto active sidebar */
	$('#navbar a.menu-link, #navbar a.submenu-link').each(function() {
		let href = this.getAttribute('href');
		if (href === '#') return;
		if (this.href === window.location.href) {
			$(this).parentsUntil('#navbar').addClass('active')
		}
	});
JS) ?>

<?php $this->registerCss(<<<'CSS'
	#navbar .menu-item.active > a,
	#navbar .submenu-item.active > a {
		font-weight: bolder;
	}
CSS) ?>

<nav id="navbar" class="main-navbar">
	<div class="container">
		<ul>
			<li class="menu-item">
				<a href="<?= Url::base() ?>" class="menu-link">
					<span><i class="bi bi-grid-fill"></i> Dashboard</span>
				</a>
			</li>

			<li class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span><i class="bi bi-grid-1x2-fill"></i> Layouts</span>
				</a>
				<div class="submenu">
					<div class="submenu-group-wrapper">
						<ul class="submenu-group">
							<li class="submenu-item">
								<a href="?layout=mainy" class="submenu-link">Vertical Navbar</a>
							</li>
							<li class="submenu-item active">
								<a href="?layout=mainx" class="submenu-link">Horizontal Menu</a>
							</li>
						</ul>
					</div>
				</div>
			</li>

			<li class="menu-item has-sub">
				<a href="#" class="menu-link">
					<span><i class="bi bi-life-preserver"></i> Support</span>
				</a>

				<div class="submenu">
					<div class="submenu-group-wrapper">
						<ul class="submenu-group">
							<li class="submenu-item">
								<a href="https://zuramai.github.io/mazer/docs" class="submenu-link" target="_blank">Documentation</a>
							</li>

							<li class="submenu-item">
								<a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class="submenu-link" target="_blank">Contribute</a>
							</li>

							<li class="submenu-item">
								<a href="https://github.com/zuramai/mazer#donation" class="submenu-link" target="_blank">Donate</a>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>
