
<?php
	$has_footer_sidebar_1 = is_active_sidebar( 'stopka-1' );
	$has_footer_sidebar_2 = is_active_sidebar( 'stopka-2' );
?>	

			<footer class="container border-top mt-5">
				<div class="row">	
				
					<?php if ($has_footer_sidebar_1) { ?>

			          <div class="col">
			            <?php dynamic_sidebar( 'stopka-1' ); ?>
			          </div>
		          	<?php } ?>
		          	<?php if ($has_footer_sidebar_2) { ?>
			          <div class="col">
			            <?php dynamic_sidebar( 'stopka-2' ); ?>
			          </div>
		          	<?php } ?>
		        </div>
	    	</footer>
		</main>
	</body>
</html>

