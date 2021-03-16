<div class="navbar">
	<div class="container-full">
		<div class="navbar-row">
			<a href="<?get_home_url()?>" class="navbar-logo">
				<img src="<?bloginfo("template_url")?>/img/logo.svg" alt="Social me" class="logo-img">
				
				<div class="logo-text">
					<img src="<?bloginfo("template_url")?>/img/logo-text.svg" alt="Social me" class="text-main">
					<img src="<?bloginfo("template_url")?>/img/logo-text-small.svg" alt="More than 300 unlocked accounts" class="text-small">
				</div>
			</a>

			<?php wp_nav_menu( [
				'theme_location'  => 'menu-top',
				'container'       => false, 
				'menu_class'      => 'navbar-nav', 
			] ); ?>	

			<div class="navbar-info">
				<div class="support">
					<div class="icon">
						<img src="<?bloginfo("template_url")?>/img/icons/phone-navbar.svg" alt="phone">
					</div>
					<div class="text">
						<div class="small">Support (24/7)</div>
						<a class="phone" href="tel:<?=PHONE?>"><?=PHONE?></a>
					</div>
				</div>
				<a href="#" class="btn btn-login">
					<img class="icon" src="<?bloginfo("template_url")?>/img/icons/avatar.svg" alt="avatar">
					<span>Login</span>
				</a>
			</div>

			<div id="menu-btn">
				<div class="menu-icon">
					<div class="menu-bar mb1"></div>
					<div class="menu-bar mb2"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.navbar -->

<div class="mobile-menu">
	<div class="menu-bg">
		<div class="menu-bg-box">
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
			<div class="menu-bg__inner"></div>
		</div>
		<div class="menu-bg-box">
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
			<div class="menu-bg__inner2"></div>
		</div>
	</div>

	<div class="menu-content">
		<?php wp_nav_menu( [
			'theme_location'  => 'menu-top',
			'container'       => false, 
			'menu_class'      => 'mobile-menu-nav', 
		] ); ?>	

		<div class="navbar-info">
			<div class="support">
				<div class="text">
					<div class="small">Support (24/7)</div>
					<a class="phone" href="tel:<?=PHONE?>"><?=PHONE?></a>
				</div>
			</div>
		</div>
	</div>
</div>

