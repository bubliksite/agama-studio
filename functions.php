<?php 

/** Перечень стилей и скриптов **/
function load_style_script () {
	wp_enqueue_style('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_enqueue_style('all', '//use.fontawesome.com/releases/v5.8.1/css/all.css');
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/fonts.css');

	wp_enqueue_script('jquery-3.3.1.slim.min', '//code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popper.min', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap.min', '//stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');
	wp_enqueue_script('script', get_template_directory_uri() . '/script.js');
}

/** Загрузка стилей и скриптов **/
add_action('wp_enqueue_scripts', 'load_style_script');

/** Отключаем визуальный редактор **/
function remove_editor() {
  remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor');

/** Включаем меню **/
register_nav_menus(array(
	'left_menu'    => 'Левое меню',
	'right_menu' => 'Правое меню',
	'mobile_menu' => 'Мобильное меню'
));

/** Отключаем верхнюю админ-панель **/
show_admin_bar(false);


/** Добавляем класс activу в меню */
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'active ';
    }
    return $classes;
}


/* Перевод строк */
add_action('init', function() {
	pll_register_string('copyright', 'Информация о правообладателе');
	pll_register_string('feedback', 'Отправить сообщение');
	pll_register_string('trailer', 'Смотреть трейлер');
	pll_register_string('about project', 'Узнать о проекте');
	pll_register_string('show', 'Сериал');
	pll_register_string('legend', 'Легенда');
	pll_register_string('auditory', 'Аудитория');
	pll_register_string('timing', 'Хронометраж');
	pll_register_string('trailer', 'Трейлер');
	pll_register_string('characters', 'Персонажи');
	pll_register_string('documents', 'Материалы');
});

?>