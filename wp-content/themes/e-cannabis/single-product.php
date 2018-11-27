<?php
/**
 * Created by PhpStorm.
 * User: amit raj
 * Date: 19-Nov-18
 * Time: 2:56 PM
 */
get_header('one');$product = wc_get_product($post->ID); ?>



<section id="inner-banner">
	<div class="container">
		<div class="col-md-6 col-xs-12">
			<h2><?php echo wp_get_theme();?></h2>
		</div>
		<div class="col-md-6 col-xs-12">
			<div class="breadcrumb">
				<ul class="breadcrumb">
					<li><a href="index.html">home</a></li>
					<li><a href="novato.html">novato</a></li>
					<li>datails</li>
				</ul>
			</div>
		</div>


	</div>
</section>






<section id="product-details-page">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
					<div class='carousel-outer'>
						<!-- me art lab slider -->
						<div class='carousel-inner '>
							<?php $gallery = $product->get_gallery_image_ids(); if (count($gallery)!="0"):?>
							<?php $first1 = true; foreach ($gallery as $image): if ($first1): $first1 = false;?>
							<div class='item active'>
								<img src='<?php echo wp_get_attachment_url($image);?>' />
							</div>
							<?php else:?>

							<div class='item'>
								<img src='<?php echo wp_get_attachment_url($image);?>' />
							</div>
								<?php endif;endforeach; endif;?>


						</div>

						<!-- sag sol -->
						<a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
							<span class='glyphicon glyphicon-chevron-left'></span>
						</a>
						<a class='right carousel-control' href='#carousel-custom' data-slide='next'>
							<span class='glyphicon glyphicon-chevron-right'></span>
						</a>
					</div>

					<!-- thumb -->
					<ol class='carousel-indicators mCustomScrollbar meartlab hidden-xs'>
						<?php $i=0; $gallery = $product->get_gallery_image_ids(); if (count($gallery)!="0"):?>
						<?php $first1 = true; foreach ($gallery as $image): if ($first1): $first1 = false;?>
						<li data-target='#carousel-custom' data-slide-to='<?php echo $i;?>' class='active'>
							<img src='<?php echo wp_get_attachment_url($image);?>' alt='' />
                        </li>
							<?php else: $i++;?>

                                <li data-target='#carousel-custom' data-slide-to='<?php echo $i;?>'>
                                    <img src='<?php echo wp_get_attachment_url($image);?>' alt='' />
                                </li>
							<?php endif;endforeach;endif;?>

					</ol>
				</div>

			</div>
			<div class="col-md-6 mr-t">

				<p><strong><?php echo wp_get_theme();?></strong></p>
<!--				<h2>--><?php //echo  get_the_title();?><!--</h2>-->

				<?php do_action('woocommerce_single_product_summary');?>

                <!--				<ul>-->
<!--					<li>-->
<!--						<i class="fa fa-star"></i>-->
<!--						<i class="fa fa-star"></i>-->
<!--						<i class="fa fa-star-half-o"></i>-->
<!--						<i class="fa fa-star-o"></i>-->
<!--					</li>-->
<!--					<li>30 reviews</li>-->
<!--				</ul>-->
<!---->
<!--				<div>-->
<!--					<p><strong>Size</strong></p>-->
<!--					<ul class="size-main">-->
<!--						<li><a href="#">Queen Roll</a></li>-->
<!--						<li><a href="#">King Roll</a></li>-->
<!--					</ul>-->
<!--				</div>-->
<!---->
<!--				<button>add to cart</button>-->


				<ul class="share-main">
					<li><p>share it with :- </p></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				</ul>



	</div>


			</div>

		</div>


</section>





<?php get_footer();?>
