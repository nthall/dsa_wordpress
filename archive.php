<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
		
		    <main id="main" class="large-12 medium-12 columns" role="main">
			    
		    	<header class="archive-header-card">
		    		<h1 class="page-title"> <?php single_term_title(); ?> </h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	
			    	<div class="button-group expanded"><!-- Chapter and Category Specific Subnavigation -->
						<a href="/dispatches/" class="button">All</a>
						<a href="/dispatches/actions/" class="button">Actions</a>
						<a href="/dispatches/education/" class="button">Education</a>
						<a href="/dispatches/minutes/" class="button">Minutes</a>
					</div>
				</header>
				<hr />
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	
			<!-- <?php get_sidebar(); ?> -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>