<?php
/**
 * Created by PhpStorm.
 * User: Rishav
 * Date: 11/6/2018
 * Time: 11:00 PM
 * Template name: home
 */?>
<?php get_header();?>

    <style> ins {background: transparent; color: #08ff11 !important; text-decoration: none;}</style>
    <section id="banner-main">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <div class="overlay"></div>
                    <img src="<?php echo  get_template_directory_uri().'/';?>images/banner2.jpg" class="img-responsive"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">THE MOST ADVANCED</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                        <button class="btn-default">shop now</button>
                    </div>
                </div>
                <div class="item">
                    <div class="overlay"></div>
                    <img src="<?php echo  get_template_directory_uri().'/';?>images/bg-banner.jpg" class="img-responsive"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">THE MOST ADVANCED</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                        <button class="btn-default">shop now</button>
                    </div>
                </div>
                <div class="item">
                    <div class="overlay"></div>
                    <img src="<?php echo  get_template_directory_uri().'/';?>images/banner.jpg" class="img-responsive"/>
                    <div class="carousel-caption">
                        <h1 class="carousel-caption-header">THE MOST ADVANCED</h1>
                        <p class="carousel-caption-text hidden-sm hidden-xs">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
                        </p>
                        <button class="btn-default">shop now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="container">
            <h1>The Best Marijuana Delivery Service in the Bay Area!</h1>
            <h2 class="wow fadeInDown" data-wow-offset="100">Cannabis Delivery Service Location Listing</h2>
            <p class="text-center wow fadeInDown" data-wow-offset="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.</p>
            <div class="main_location">
                <ul>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Novato</p>
                            <p>Contact: 111-111-1111</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>San Rafael</p>
                            <p>Contact: 4565745764675</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Lakeport</p>
                            <p>Contact: 65457656745</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Kelseyville</p>
                            <p>Contact: 56748768676</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Clearlake</p>
                            <p>Contact: 345764576856</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Burlingame</p>
                            <p>Contact: 57358416846</p>
                        </a></li>
                    <li class="bg-color"><a href="#"><i class="fa fa-map-marker"></i><p>Hillsborough</p>
                            <p>Contact: 15254684546</p>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="product">
				<?php wc_print_notices();?>
                <h2><strong>Featured Products</strong></h2>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
					<?php $all_categories = get_categories(array( 'taxonomy' => 'product_cat', 'orderby' => 'name', 'hide_empty' => '0','parent' => 0 ));
					foreach ($all_categories as $cat) {?>
                        <li class="nav-item">
                            <a class="nav-link" id="Shop-tab" data-toggle="pill" href="#<?php echo $cat->slug;?>" role="tab" aria-controls="<?php echo $cat->slug;?>" aria-selected="false">
                                <img src="<?php echo  get_template_directory_uri().'/';?>images/icon-main.png" class="img-responsive"/><?php echo $cat->name;?>
                            </a>
                        </li>
					<?php }?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
					<?php $first1=true; foreach ($all_categories as $cat) {?>
                        <div class="tab-pane<?php if($first1): $first1=false;?> active<?php endif;?>" id="<?php echo $cat->slug;?>" role="tabpanel" aria-labelledby="Cars-tab">
							<?php
							$query_products = new WP_Query(array
                            ( 'post_type' => 'product',
                              'post_status' => 'publish',
                              'orderby' => 'order',
                              'order' => 'asc',
                              'parent' => 0,
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
                <button class="btn-default">shop now</button>
            </div>
        </div>
        </section>
    <section id="search-main">
        <div class="container">
            <h2>Search All Locations</h2>
            <form>
                <div id="custom-search-input">
                    <div class="input-group col-md-8 col-lg-offset-2 col-md-offset-2">
                        <input type="text" class="form-control" placeholder="Search" />
                        <span class="input-group-btn">
                        <button class="btn btn-info" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="blog-main">
        <div class="container">
            <h2>Our Blog</h2>
            <div class="row mr-b wow fadeInDown" data-wow-offset="300">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="col-lg-6 col-xs-12">
                        <img src="<?php echo  get_template_directory_uri().'/';?>images/blog-image.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="blog-column">
                            <span>Post Title</span>
                            <ul class="blog-detail list-inline">
                                <li><i class="fa fa-user"></i>John Doe</li>
                                <li><i class="fa fa-clock-o"></i>March 01, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="col-lg-6 col-xs-12">
                        <img src="<?php echo  get_template_directory_uri().'/';?>images/blog-image1.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="blog-column">
                            <span>Post Title</span>
                            <ul class="blog-detail list-inline">
                                <li><i class="fa fa-user"></i>John Doe</li>
                                <li><i class="fa fa-clock-o"></i>March 01, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                <a href="#">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mr-b wow fadeInDown" data-wow-offset="300">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="col-lg-6 col-xs-12">
                        <img src="<?php echo  get_template_directory_uri().'/';?>images/blog-image2.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="blog-column">
                            <span>Post Title</span>
                            <ul class="blog-detail list-inline">
                                <li><i class="fa fa-user"></i>John Doe</li>
                                <li><i class="fa fa-clock-o"></i>March 01, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                <a href="#">Read More</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" data-aos="fade-right">
                    <div class="col-lg-6 col-xs-12">
                        <img src="<?php echo  get_template_directory_uri().'/';?>images/blog-image3.jpg" alt="" width="100%">
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <div class="blog-column">
                            <span>Post Title</span>
                            <ul class="blog-detail list-inline">
                                <li><i class="fa fa-user"></i>John Doe</li>
                                <li><i class="fa fa-clock-o"></i>March 01, 2017</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.
                                <a href="#">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more">
                <a href="#">View full blog here...&nbsp; <i class="fa fa-angle-right"></i></a>
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
								<button class="btn btn-info" type="button">Subscribe</button>
							</span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="testimonial">
        <div class="container">
            <h2 class="wow fadeInDown" data-wow-offset="200">What our clients says</h2>
            <div class="col-md-offset-2 col-md-8 main-box">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#quote-carousel" data-slide-to="1"></li>
                        <li data-target="#quote-carousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner">
                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo  get_template_directory_uri().'/';?>images/testimonial-image.jpg">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit!</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo  get_template_directory_uri().'/';?>images/testimonial-image.jpg">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam auctor nec lacus ut tempor. Mauris.</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-3 text-center">
                                        <img class="img-circle" src="<?php echo  get_template_directory_uri().'/';?>images/testimonial-image.jpg">
                                    </div>
                                    <div class="col-sm-9">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut rutrum elit in arcu blandit, eget pretium nisl accumsan. Sed ultricies commodo tortor, eu pretium mauris.</p>
                                        <small>Someone famous</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer();?>