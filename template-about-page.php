<?
/*
Template name: Студия
Template Post Type: page
Theme URI: http://
Description: Тема страницы сериалы
Author: Korablik
Author URI: http://korablik.studio/
Version: 1.0
*/
?>

 <?php get_header(); ?>

	<div class="background studio" id="top">
		<div class="container-fluid">
			<h1 class="dark">
				<?php echo CFS()->get('header'); ?>
			</h1>
			<p class="dont-display-desktop">
				<?php echo CFS()->get('description-short'); ?>
			</p>
			<p class="dont-display-mobile">
				<?php echo CFS()->get('description-full'); ?>
			</p>
			<img class="pink-fairy dont-display-desktop" src="<?php echo get_template_directory_uri(); ?>/img/pink-fairy.png" alt="">
		</div>
		<!--<a href="#studio-description"><img class="chevron-down" src="<?php echo get_template_directory_uri(); ?>/img/chevron-down.png" alt="вниз"></a>-->
	</div>
	<div id="studio-description" class="container-fluid pb-5">
		<p><br></p>
		<div class="row">

			<?php $employees = CFS()->get('_employees'); ?>

			<?php $i = 1; ?>
			<div class="col-lg-6 mt-3 px-3">
				<?php foreach ($employees as $employee) : ?>
					<?php if ($i % 2 != 0) : ?>
						<h5 class="pink-bold lh-none align-text-bottom"> <br><?php echo $employee['employee_position']; ?></h5>
						<h2 class="person-name"><?php echo $employee['employee_name']; ?></h2>
						<p class="regular my-3">
							<?php echo $employee['employee_bio']; ?>
						</p>
					<?php else : ?>

					<?php endif ?>
					<?php $i = $i + 1; ?>
				<?php endforeach ?>
			</div>
			<?php $i = 1; ?>
			<div class="col-lg-6 mt-3 px-3">
				<?php foreach ($employees as $employee) : ?>
					<?php if ($i % 2 == 0) : ?>
						<h5 class="pink-bold lh-none align-text-bottom"> <br><?php echo $employee['employee_position']; ?></h5>
						<h2 class="person-name"><?php echo $employee['employee_name']; ?></h2>
						<p class="regular my-3">
							<?php echo $employee['employee_bio']; ?>
						</p>
					<?php else : ?>

					<?php endif ?>
					<?php $i = $i + 1; ?>
				<?php endforeach ?>
			</div>

		</div>
	</div>


 <?php get_footer(); ?>