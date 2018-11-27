<?php
/**
 * Created by PhpStorm.
 * User: amit raj
 * Date: 19-Nov-18
 * Time: 10:35 AM
 */

get_header('one'); $taxonomy = get_query_var( 'taxonomy' ); $term = get_query_var( 'term' );
$term = get_term_by('slug', $term, $taxonomy );?>
<style> ins {background: transparent; color: #08ff11 !important; text-decoration: none;}
    #quantity_5bf39818cb138{
        text-align: center;
    }
</style>
<section id="inner-banner">
	<div class="container">
		<div class="col-md-6 col-xs-6">
			<h2><?php echo $term->name;?></h2>
		</div>
		<div class="col-md-6 col-xs-6">
			<div class="breadcrumb">
				<ul class="breadcrumb">
					<li><a href="#">home</a></li>
					<li><?php echo $term->name;?></li>
				</ul>
			</div>
		</div>


	</div>
</section>
<section id="about-us">
<div class="container">

<div class="product">
	<?php wc_print_notices();?>
	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
		<?php
		   $termchildren = get_terms( [
			"taxonomy" => 'product_cat',
			"child_of" => $term->term_id,
			'hide_empty' => false
		]);
		if (count($termchildren)!=0):
		foreach ($termchildren as $cat) {?>
			<li class="nav-item">
				<a class="nav-link" id="Shop-tab" data-toggle="pill" href="#<?php echo $cat->slug;?>" role="tab" aria-controls="<?php echo $cat->slug;?>" aria-selected="false">
					<img src="<?php echo  get_template_directory_uri().'/';?>images/icon-main.png" class="img-responsive"/><?php echo $cat->name;?>
				</a>
			</li>
		<?php } else: ?>


        <section id="amit">
            <div class="container">

                <div class="col-md-12 col-xs-12">
                    <div class="asd">
                        <img src= "<?php echo get_template_directory_uri();?>/images/icon-product.png"/>
                        <h3>Sorry but this  product is  currently unavailable.</h3>
                    </div>
                </div>


            </div>
        </section>

        <?php endif;?>


	</ul>
	<div class="tab-content" id="pills-tabContent">
		<?php $first1=true; foreach ($termchildren as $cat) {?>
			<div class="tab-pane<?php if($first1): $first1=false;?> active<?php endif;?>" id="<?php echo $cat->slug;?>" role="tabpanel" aria-labelledby="Cars-tab">
				<?php
				$query_products = new WP_Query(array
				( 'post_type' => 'product',
				  'post_status' => 'publish',
				  'orderby' => 'order',
				  'order' => 'asc',
				  'tax_query' => array(
					  array(
						  'taxonomy' => 'product_cat',
						  'field' => 'slug',
						  'terms' => $cat->slug,

					  ))
				));
				if ($query_products->have_posts()): $get_products = $query_products->get_posts();
					foreach ($get_products as $product): $product = wc_get_product($product->ID);?>
						<div class="Portfolio">
							<a href="<?php echo get_permalink($product->get_id());?>"><img class="card-img" src="<?php echo get_the_post_thumbnail_url($product->get_id());?>" alt=""></a>
							<div class="desc">
								<?php echo get_the_title($product->get_id());?>
								<p class="text-center"><?php echo $product->get_price_html();?></p>
								<a href="<?php echo $product->add_to_cart_url();?>"><p class="text-center"><i class="fa fa-shopping-cart"></i> add to cart</p></a>
							</div>
						</div>

					<?php endforeach; endif;?>

			</div>
		<?php }?>
	</div>

</div>

</div>
</section>

<?php get_footer(); ?>
