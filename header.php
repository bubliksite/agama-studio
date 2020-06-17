<!DOCTYPE html>
<html lang="ru">
<head>
	<meta name="keywords" content=""/>
	<meta name="description" content=""/>

	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/ico.png">

	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta charset="UTF-8"/>



 	<title><?php bloginfo('name'); wp_title(); ?></title>

 	<?php wp_head(); ?>
</head>
<body>

<?php $colors = CFS()->get('color_header'); ?>
<?php if (empty($colors)) : ?>
	<?php $color_theme = 'dark';  ?>
<?php else : ?>
	<?php foreach ($colors as $color) : ?>
		<?php if ($color == "Темный") : ?>
			<?php $color_theme = 'dark';  ?>
		<?php else : ?>
			<?php $color_theme = 'light';  ?>
		<?php endif ?>
	<?php endforeach ?>
<?php endif ?>


<header class="dont-display-mobile container-fluid <?php echo $color_theme; ?>">
	<div class="d-flex justify-content-between align-items-center">
		<div class="col-4">
			<?php 
					wp_nav_menu( array(
					'menu_class' => 'nav justify-content-start',
					'theme_location'=>'left_menu',
					'container' => false
					) );
		      	?>
		</div>
		<div class="col-4 text-center">
			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-<?php echo $color_theme; ?>.png" alt="логотип">
		</div>
		<div class="col-4 d-flex justify-content-end">
			<?php 
					wp_nav_menu( array(
					'menu_class' => 'nav justify-content-end',
					'theme_location'=>'right_menu',
					'container' => false
					) );
		      	?>
		      	<ul class="nav justify-content-between language list-inline">
		      		<?php pll_the_languages(  ); ?>
		      	</ul>
		</div>
	</div>
</header>

<header class="mx-2 dont-display-desktop <?php echo $color_theme; ?>">

		<div class="row" style="">
			<div class="col-6">
				<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-<?php echo $color_theme; ?>.png" alt="логотип">
			</div>
			<div class="col-5 d-flex justify-content-end align-items-center">
				<button class="btn" data-toggle="modal" data-target="#menuModal"><img src="<?php echo get_template_directory_uri(); ?>/img/menu-<?php echo $color_theme; ?>.png" alt="меню"></button>
			</div>
			<div class="col-11 justify-content-end d-flex">
				<ul class="justify-content-between language list-inline">
			      	<?php pll_the_languages(  ); ?>
			    </ul>
			</div>
		</div>

</header>

<!-- меню -->
<div class="modal fade" id="menuModal" tabindex="-1" role="dialog" aria-labelledby="menuModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<img src="<?php echo get_template_directory_uri(); ?>/img/close-menu.png" alt="">
			</button>
			<div class="modal-body">
				<?php 
					wp_nav_menu( array(
					'menu_class' => 'list-unstyled mx-5',
					'theme_location'=>'mobile_menu',
					'container' => false
					) );
				?>
				<ul class="list-unstyled mx-5 nav">
					<li class="mb-3 mr-3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png" alt="facebook"></li></a>
			<li class="mb-3 mr-3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/in.png" alt="instagram"></li></a>
			<li class="mb-3 mr-3"><a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/vk.png" alt="vkontakte"></li></a>
				</ul>
			</div>
		</div>
	</div>
</div>