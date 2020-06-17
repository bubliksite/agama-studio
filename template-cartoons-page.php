<?
/*
Template name: Сериалы
Template Post Type: page
Theme URI: http://
Description: Тема страницы сериалы
Author: Korablik
Author URI: http://korablik.studio/
Version: 1.0
*/
?>

<?php $colors = CFS()->get('color_header'); ?>
<?php foreach ($colors as $color) : ?>

 <?php get_header(); ?>
	<div class="background dont-display-mobile" style="background: url('<?php echo CFS()->get ('content_background') ?>') no-repeat center; background-size: cover;">
		<div class="container-fluid">

			<?php if ($color == 'Темный') : ?>

			<h1 class="dark">
				<?php echo CFS()->get('content_name') ?>
			</h1>

			<?php elseif ($color == 'Светлый') : ?>

			<h1 class="light">
				<?php echo CFS()->get('content_name') ?>
			</h1>

			<?php endif ?>

			<div class="rectangles list-inline">
				<button data-toggle="modal" data-target="#videoModal" class="btn first-rectangle list-inline-item" style="background: linear-gradient(90deg, <?php echo CFS()->get('color-1-1') ?> 0%, <?php echo CFS()->get('color-1-2') ?> 98.47%);">
					<div class="mx-3 d-flex justify-content-around align-items-center">
						<h4 class="ml-2 mb-0"><?php pll_e('Смотреть трейлер'); ?></h4><img class="ml-1" src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="Смотреть трейлер">
					</div>
				</button>
				<button data-toggle="modal" data-target="#projectModal" class="btn second-rectangle list-inline-item" style="background: linear-gradient(90deg, <?php echo CFS()->get('color-2-1') ?> 0%, <?php echo CFS()->get('color-2-2') ?> 98.47%);">
					<div class="mx-3 d-flex justify-content-around align-items-center">
						<h4 class="ml-2 mb-0"><?php pll_e('Узнать о проекте'); ?></h4><img class="ml-1" src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="Узнать о проекте">
					</div>
				</button>
			</div>
		</div>
	</div>

	<div class="background dont-display-desktop" style="background: url('<?php echo CFS()->get ('content_background_mobile') ?>') no-repeat center; background-size: cover;">


			<?php if ($color == 'Темный') : ?>

			<h1 class="dark">
				<?php echo CFS()->get('content_name') ?>
			</h1>

			<?php elseif ($color == 'Светлый') : ?>

			<h1 class="light">
				<?php echo CFS()->get('content_name') ?>
			</h1>

			<?php endif ?>

			<div class="rectangles list-inline d-flex justify-content-between">
				<button data-toggle="modal" data-target="#videoModal" class="btn first-rectangle list-inline-item" style="background: linear-gradient(90deg, <?php echo CFS()->get('color-1-1') ?> 0%, <?php echo CFS()->get('color-1-2') ?> 98.47%);">
					<div class="mx-3 d-flex justify-content-between align-items-center">
						<h4 class="ml-2 mb-0"><?php pll_e('Смотреть трейлер'); ?></h4><img class="ml-5" src="<?php echo get_template_directory_uri(); ?>/img/play.png" alt="Смотреть трейлер">
					</div>
				</button>
				<button data-toggle="modal" data-target="#projectModal" class="btn second-rectangle list-inline-item" style="background: linear-gradient(90deg, <?php echo CFS()->get('color-2-1') ?> 0%, <?php echo CFS()->get('color-2-2') ?> 98.47%);">
					<div class="mx-3 d-flex justify-content-between align-items-center">
						<h4 class="ml-2 mb-0"><?php pll_e('Узнать о проекте'); ?></h4><img class="ml-5" src="<?php echo get_template_directory_uri(); ?>/img/project.png" alt="Узнать о проекте">
					</div>
				</button>
			</div>

	</div>

	<?php endforeach ?>


	<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="Закрыть">
				</button>
				<div class="modal-body">
					<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="//player.vimeo.com/video/<?php echo CFS()->get('content_video') ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalTitle" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<img src="<?php echo get_template_directory_uri(); ?>/img/close.png" alt="Закрыть">
				</button>
				<div class="modal-body">
					<img class="head-image" src="<?php echo CFS()->get('overlay_image'); ?>" alt="">
					<div class="overlay-content pt-5 px-5">
						<h5 class="pink-bold"><?php pll_e('Сериал'); ?></h5>
						<p class="regular"><?php echo CFS()->get('overlay_description'); ?></p>
						<p><br><br></p>
						<?php $legend = CFS()->get('overlay_legend'); ?>
						<?php if (!(empty($legend))) : ?>
						<h5 class="pink-bold"><?php pll_e('Легенда'); ?></h5>
						<p class="regular"><?php echo CFS()->get('overlay_legend'); ?></p>
						<h5 style="font-size: 28px;" class="pink-bold"><?php echo CFS()->get('overlay_punchline'); ?></h5>
						<p><br><br></p>
						<?php endif ?>
						<div class="row">
							<div class="col-5">
								<h5 class="pink-bold"><?php pll_e('Аудитория'); ?></h5>
								<p class="person-name"><?php echo CFS()->get('overlay_auditory'); ?></p>
							</div>
							<div class="col-7">
								<h5 class="pink-bold"><?php pll_e('Хронометраж'); ?></h5>
								<p class="person-name"><?php echo CFS()->get('overlay_timing'); ?></p>
							</div>
						</div>
						<h5 class="pink-bold my-3"><?php pll_e('Трейлер'); ?></h5>
						<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="//player.vimeo.com/video/<?php echo CFS()->get('content_video') ?>?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
						<h5 class="pink-bold my-3"><?php pll_e('Персонажи'); ?></h5>
						<?php $characters = CFS()->get('characters'); ?>
						<?php $i = 1; ?>
						<div class="dont-display-mobile">
							<ul class="nav nav-pills mb-3 d-flex justify-content-around" id="pills-tab" role="tablist">
							<?php foreach ($characters as $character) : ?>
								<li class="nav-item">
								<?php if ($i == 1) : ?>
									<a class="nav-link active" id="pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#pills-<?php echo $i; ?>" role="tab" aria-controls="pills-<?php echo $i; ?>" aria-selected="true"><?php echo $character['character_name']; ?></a>
								<?php else : ?>
									<a class="nav-link" id="pills-<?php echo $i; ?>-tab" data-toggle="pill" href="#pills-<?php echo $i; ?>" role="tab" aria-controls="pills-<?php echo $i; ?>" aria-selected="true"><?php echo $character['character_name']; ?></a>
								<?php endif ?>
								</li>
								<?php $i = $i + 1; ?>
							<?php endforeach ?>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<?php $i = 1; ?>
								<?php foreach ($characters as $character) : ?>
									<?php if ($i == 1) : ?>
										<div class="tab-pane fade show active" id="pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $i; ?>-tab">
									<?php else : ?>
										<div class="tab-pane fade" id="pills-<?php echo $i; ?>" role="tabpanel" aria-labelledby="pills-<?php echo $i; ?>-tab">
									<?php endif ?>
											<div class="row">
												<div class="col-5">
													<img class="character-image" src="<?php echo $character['character_image']; ?>" alt="">
												</div>
												<div class="col-7">
													<p class="regular">
														<?php echo $character['character_description']; ?>
													</p>
												</div>
											</div>
										</div>
								<?php $i = $i + 1; ?>
								<?php endforeach ?>
							</div>
						</div>
					</div>
					<div class="dont-display-desktop px-5 character-mobile">
						<?php foreach ($characters as $character) : ?>
							<p class="character-name"><?php echo $character['character_name']; ?></p>
							<img class="character-image" src="<?php echo $character['character_image']; ?>" alt="">
							<p class="regular"><?php echo $character['character_description']; ?></p>
						<?php endforeach ?>
					</div>
				</div>

				<?php $documents = CFS()->get('documents'); ?>
				<?php if (empty($documents)) : ?>

				<?php else : ?>
				<div class="documents py-5 px-5">
					<h5 class="pink-bold"><?php pll_e('Материалы'); ?></h5>
					<ul class="list-unstyled">
					<?php foreach ($documents as $document) : ?>
						<a target="_blank" href="<?php echo $document['document_file']; ?>" class="no-link"><li class="my-4"><img class="mr-3" src="<?php echo get_template_directory_uri(); ?>/img/PDF.png" alt=""><?php echo $document['document_name']; ?></li></a>
					<?php endforeach ?>
					</ul>
				<?php endif ?>
				</div>
			</div>
		</div>
	</div>


 <?php get_footer(); ?>