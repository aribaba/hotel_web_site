<?php get_header(); ?>
<?php get_sidebar(); ?>

		<div id="MainColumn">
           <div id="MainContent" class="ClearFix">
		        <?php
				if (have_posts()) :
				  while (have_posts()) :
					the_post();
				    get_template_part('content');

				  endwhile;
				endif;
?>

            	<?php

		        $frontPageArray = array(
		        2,
		        10,
		     	);

		        $count = 0;
					while($count <= 1):
				$page = get_post( $frontPageArray[$count] ); ?>
				<div class="frontPages">
					<div class="contents-rows__page-title">
							<h1 class="page-title">
		               			<?php
		               			 echo $page->post_title;
		               			 ?>
	           	</h1>
						</div>
           				<?php
						echo $page->post_content;
						$count++;
						?> </div>
						<?php
					endwhile;
					?>



            </div>
		</div>
	</div>


<?php get_footer(); ?>
