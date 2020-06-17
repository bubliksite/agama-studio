<?
/*
Template name: Контакты
Template Post Type: page
Theme URI: http://
Description: Тема страницы контакты
Author: Korablik
Author URI: http://korablik.studio/
Version: 1.0
*/
?>

 <?php get_header(); ?>

	<div id="studio-contact" class="">
		<img class="map dont-display-mobile" src="<?php echo get_template_directory_uri(); ?>/img/map.png" alt="">
		<img class="map dont-display-desktop" src="<?php echo get_template_directory_uri(); ?>/img/map-2.png" alt="">
		<h1 class="dark">
			<?php the_title(); ?>
		</h1>
		<div class="container-fluid" style="padding-left: 5%;">
			<div class="row my-3 py-3">
				<div class="col-lg-6">
					<p class="regular">
						<?php echo CFS()->get('address'); ?> <br><br class="dont-display-desktop">
						<span class="regular"><a class="no-link" href="tel:<?php echo CFS()->get('phone'); ?>"><?php echo CFS()->get('phone'); ?></a></span>
					</p>
					<br>
					<div class="dont-display-mobile">
						<?php $employees = CFS()->get('_employees'); ?>
						<?php foreach ($employees as $employee) : ?>
						<p class="pink-bold"><?php echo $employee['employee_position']; ?></p>
						<p class="regular"><?php echo $employee['employee_name']; ?> <a class="no-link" href="mailto: <?php echo $employee['employee_email']; ?>"><?php echo $employee['employee_email']; ?></a><br>
							<span class="regular"><?php echo $employee['employee_phone']; ?></span></p>
						<?php endforeach ?>
						<br>
						<p class="pink-bold"><?php pll_e('Информация о правообладателе'); ?></p>
						<p class="regular">
							<?php echo CFS()->get('copyright'); ?>
						</p>
					</div>
				</div>
				<div class="col-lg-5 col-sm-6">
					<p class="pink-bold"><?php pll_e('Отправить сообщение'); ?></p>
					<?php $lang = pll_current_language(); ?>
					<?php if ($lang == ru) : ?>
						<?php echo do_shortcode( '[caldera_form id="CF5d0aa74d3c796"]' ); ?>
					<?php else : ?>
						<?php echo do_shortcode( '[caldera_form id="CF5d0d14d1daea2"]' ); ?>
					<?php endif ?>
				</div>
			</div>
		</div>
	</div>


 <?php get_footer(); ?>