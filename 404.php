<?php
/**
 * The template for displaying the NotFound template in the Twenty Twenty theme.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>
<style>
	.NotFound-page__search-block
	{
		background: linear-gradient(224.39deg, #35D5A5 2.1%, #00C7C5 32.94%, #2D9BE0 57.62%, #5277F7 71.52%, #5B75F6 79.13%, #7370F4 91.42%, #836DF3 98.23%);
		width: 100%	;
		display: flex;
		justify-content: center;
		height: 840px;
		align-content: center;
		flex-wrap: wrap;
	}
	.NotFound-page__title
	{
		font-size: 140px;
		color: #fff;
		width: 100%;
		text-align: center;
	}
	.NotFound-page__subtitle
	{
		font-size: 64px;
		line-height: 64px;
		width: 100%;
		color: #fff;
		text-align: center;
		opacity: 0.3;
		text-transform: uppercase;
	}
	.NotFound-page__desc
	{
		color: #fff;
		text-align: center;
		line-height: 18px;
		width: 100%;
		max-width: 1100px;
		padding: 0 120px;
		margin: auto;
		font-size: 18px;
		margin-top: 60px;
		margin-bottom: 60px;
	}
</style>

<section class="NotFound-page">
    <div class="NotFound-page__container">
        <div class="NotFound-page__search-block">
        	<h1 class="NotFound-page__title">404</h1>
        	<h1 class="NotFound-page__subtitle">страница не найдена</h1>
            <p class="NotFound-page__desc">Что-то пошло не так. Возможно вы ошиблись, набирая адрес в строке браузера. Если вы не уверены, что страница набрана верно, то страница, скорее всего была удалена.<br><br>
            Но не переживайте, вы можете найти нужную вам информацию в поиске или перейти на главную.</p>
            <div class="search-block__field">
                <?= get_template_part( 'template_parts/search_form' ); ?>
            </div>
        </div>
        
    </div>
</section>

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php
get_footer();
