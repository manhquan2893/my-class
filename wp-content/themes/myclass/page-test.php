<?php get_header(); ?>
<?php echo do_shortcode( '[metaslider id="18"]' ); ?>
<div id="banner-text" style="position: relative;">
	<div id="title" style="position: absolute;">
		MqTech
	</div>
	<div id="intro">
		0913392072 , nhà số 2, ngõ 34 Lê Viết Thuật	
	</div>
</div>
<style>
	#title{
		animation-name:runfromright;
		animation-duration: 2s;
	}
	@keyframes runfromright{
		from{left: 0;}
		to{left:700px;}
	}
</style>

<?php get_footer();?>