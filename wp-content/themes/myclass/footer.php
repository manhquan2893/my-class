<footer>
    <div class="container">
        <div class="box" id="contact">
            <h3 class="title">
				LIÊN HỆ
			</h3>
            <div class="desc">
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-home"></i> </div>
                        <div class="info">
                            <span>Số 13, Ngõ 68, Đường Hà Huy Tập </span>
                            <p>Vinh - Nghệ An</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-phone fa-rotate-90"></i> </div>
                        <div class="info">
                            <span>0984.472.587</span>
                            <p>manhquan2893@gmail.com</p>
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="far fa-clock"></i> </div>
                        <div class="info">
                            <span>7:30 - 16:00</span>
                            <p>Thứ 2 đến Thứ 7</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box">
            <h3 class="title">
				CÁC KHÓA HỌC</h3>
            <div class="desc">
                <ul>
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
            </div>
        </div>
        <div class="box">
            <h3 class="title">
				FACEBOOK
			</h3>
            <div class="fb-content">
                
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>