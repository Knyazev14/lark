<?php 
global $wpdb;

get_header();
$search_block_title = get_the_title();
?>

<script type="text/javascript">
    let ajaxUrl = "<?= admin_url('admin-ajax.php')?>";
    let adminUrl = "<?= admin_url()?>";
    let themeUrl = "<?= get_template_directory_uri() ?>";
    let userIP = "<?= $_SERVER['REMOTE_ADDR'] ?>";
</script>
<script type="text/javascript">
    jQuery(document).ready(function($){
        
    });
</script>
<section class="article-block">
    <div class="article-block__container">

        <?= get_template_part( 'template_parts/search_block', 'single' , array('type'=>'simple','title' => $search_block_title) ); ?>

        <div class="article-block__content">
            <?
        	the_content();
        	?>
        </div>

    </div>
</section>
<?

get_footer();
