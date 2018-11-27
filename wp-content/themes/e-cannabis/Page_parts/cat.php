<?php
/*
 * Template name: cat
 */
get_header('one');
?>

<section id="inner-banner">
	<div class="container">
		<div class="col-md-6 col-xs-6">
			<h2>Novato</h2>
		</div>
		<div class="col-md-6 col-xs-6">
			<div class="breadcrumb">
				<ul class="breadcrumb">
					<li><a href="#">home</a></li>
					<li>novato</li>
				</ul>
			</div>
		</div>
	</div>
</section>




<section id="novato-page">
	<div class="container">
		<div class="wrap">
			<h2>Products Categories</h2>
			<div class="col-md-12">
				<?php
				$i=0;
				$parent_categories =
					get_terms([ 'taxonomy'     => 'product_cat',
					            'parent'        => 0,
					            'order'         => 'ASC',
					            'hide_empty'    => false,
					            'exclude' =>  '15',]);
				foreach ($parent_categories as $parent_category):

					$thumbnail_id = get_woocommerce_term_meta( $parent_category->term_id, 'thumbnail_id', true );

// get the image URL
					$image = wp_get_attachment_url( $thumbnail_id );
					//var_dump($image1 = wp_get_attachment_url( $terms ));
					?>
					<a href="<?php echo get_term_link($parent_category->term_id);?>">
						<div class="<?php echo ($i==0 ?  'col-md-6' :  'col-md-3 col-sm-6'  );?>">
							<img class="overlay" src=""/>
							<div class="tile">
								<img src="<?php echo $image;?>" class="img-responsive"/>
								<div class="text">
									<h1><?php echo $parent_category->name;?></h1>
									<div class="dots">
										<span></span>
										<span></span>
										<span></span>
									</div>
								</div>
							</div>
						</div>
					</a>
					<?php $i++; endforeach;?>
			</div>




		</div>
	</div>
</section>

<section id="news-main">
	<div class="container">

		<div class="col-md-6">
			<h2>Subscribe to our Newsletter and stay tuned.</h2>
		</div>
		<div class="col-md-6">
			<form>
				<div id="custom-search-input1">
					<div class="input-group col-md-12">
						<input type="text" class="form-control" placeholder="your@email.com" />
						<span class="input-group-btn">
                        <button class="btn btn-info" type="button">
                            Subscribe
                        </button>
                    </span>
					</div>
				</div>
			</form>
		</div>



	</div>
</section>

<?php get_footer();?>

