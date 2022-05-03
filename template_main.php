<?php
	/*
		Template Name: Main Page
	*/
get_header();

?>

<main class="main-page">
	<div class="main-page__container">
		<p class="main-page__desc"><b>Visual Communication Services</b> for business,<br>public spaces, schools and museums.</p>
		<div class="main-page__mobile-slider">
			<div class="main-page__slider-item">
				<p class="main-page__slider-desc">
					<b>Visual Communication Services</b> for business,<br>public spaces, schools and museums.
				</p>
			</div>
			<div class="main-page__slider-item">
				<p class="main-page__slider-desc">
					<strong>Design, Consulting,
						<br>Project Management
					</strong>
					<br>
					Brand Identity  Prototyping.
				</p>
				<img src="<?= get_template_directory_uri() ?>/img/slider1.jpg" class="main-page__slider-img">
			</div>
			<div class="main-page__slider-item">
				<p class="main-page__slider-desc">
					<strong>Production, Delivery, Installation</strong>
					<br>
					Large format printing and 
					<br>
					CNC routing in Hells Kitchen.
					<br>
					<a href="mailto:msignshop@gmail.com?subject=Rush order">
						<r>Rush orders</r>
					</a> 
					are welcome.
					<br>
					Next day service is available.
				</p>
				<img src="<?= get_template_directory_uri() ?>/img/slider2.jpg" class="main-page__slider-img">
			</div>
			<div class="main-page__slider-item">
				<p class="main-page__slider-desc">
					<strong>Architectural Signs Interior Graphics</strong>
					<br>
					Storefront wayfinding.
					<br>
					Service and Restoration.
				</p>
				<img src="<?= get_template_directory_uri() ?>/img/slider3.jpg" class="main-page__slider-img">
			</div>
		</div>
	</div>
</main>


<?
get_footer();

?>