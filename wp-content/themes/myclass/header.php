<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body>
	<div id="topbar">
		<div class="container">
			<div id="logo">
				<div id="wrapper">
					<div id="left">
						Mq
					</div>
					<div id="right">
						Class
					</div>
				</div>
			</div>
			<ul>
				<li><a href=" <?php echo get_home_url(); ?> "><i class="fas fa-home"></i></a></li>
				<li class="menu-item"><a href="">Chương trình đào tạo <i class="fas fa-angle-down"></i></a>
					<ul class="sub-menu-item">
						<?php 
							$arg=array(
								'post_type'=>'post',
								'orderby'=>'date',
								'order'=>'ASC'
							);
							$query=new WP_Query($arg);
							if($query->have_posts()):while($query->have_posts()): $query->the_post();?>
								<li><a href=" <?php the_permalink(); ?> "><?php the_title(); ?></a></li>
							<?php
							endwhile;
							endif;
						 ?>
					</ul>
				</li>
				<li><a href="">Đăng ký học</a></li>
				<li><a href="">Tin tức </i></a></li>
				<li><a href="">Liên hệ </i></a></li>
			</ul>
		</div>
	</div>
	<?php echo do_shortcode( '[metaslider id="36"]' ); ?>