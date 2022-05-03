<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Lark
 * @since Lark 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?
		$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
		?>

		<?php wp_head(); ?>

	</head>

	<script type="text/javascript">
	    let ajaxUrl = "<?= admin_url('admin-ajax.php')?>";
	    let adminUrl = "<?= admin_url()?>";
	    let siteUrl = "<?= get_site_url()?>";
	    let themeUrl = "<?= get_template_directory_uri() ?>";
	    let userIP = "<?= $_SERVER['REMOTE_ADDR'] ?>";
	</script>
        <?= get_template_part( 'template_parts/style' ); ?>
        <?= get_template_part( 'template_parts/script' ); ?>
	
	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>


	<header class="header">
		<div class="header__container">
			<h1 class="header__title">Manhattan Sign Shop</h1>
		</div>
	</header>