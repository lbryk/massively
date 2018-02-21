<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php bloginfo( 'name' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>" />
		
		<noscript><link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/noscript.css'; ?>" /></noscript>
		
		<?php wp_head(); ?>
	</head>
	<body class="is-loading" <?php body_class(); ?>>
		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>This is<br />
						Massively</h1>
						<p>A free, fully responsive HTML5 + CSS3 site template designed by <a href="https://twitter.com/ajlkn">@ajlkn</a> for <a href="https://html5up.net">HTML5 UP</a><br />
						and released for free under the <a href="https://html5up.net/license">Creative Commons license</a>.</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo"><?php bloginfo( 'name' ); ?></a>
					</header>

				<!-- Nav -->
					<nav id="nav">
                        <ul class="links">			
							<?php
                        
		                        $defaults = array(
		                            'theme_location'  => 'main',
		                            'menu'            => '',
		                            'container'       => '',
		                            'container_class' => '',
		                            'container_id'    => '',
		                            'menu_class'      => '',
		                            'menu_id'         => '',
		                            'echo'            => true,
		                            'fallback_cb'     => 'wp_page_menu',
		                            'before'          => '',
		                            'after'           => '',
		                            'link_before'     => '',
		                            'link_after'      => '',
		                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		                            'depth'           => 0,
		                            'walker'          => new Custom_Walker_Nav_Menu_Top
		                        );

		                        wp_nav_menu( $defaults );
                        	?>
                            </ul>
							<ul class="icons">
								<li><a href="<?php echo author_form_and_social_media('twitter'); ?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="<?php echo author_form_and_social_media('facebook'); ?>" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="<?php echo author_form_and_social_media('instagram'); ?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="<?php echo author_form_and_social_media('github'); ?>" class="icon fa-github"><span class="label">GitHub</span></a></li>
							</ul>
				    </nav>
		