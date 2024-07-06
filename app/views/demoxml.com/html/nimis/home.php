<div class="slider-wrap">
	<div class="fullwidthbanner-container">
		<div class="fullwidthbanner">
			<ul>
				<?php
				foreach ($listbanner as $banner) :
				?>
					<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
						<a href="index.php?act=sanpham&id_danh_muc=<?= $banner['link'] ?>">
							<img src="/public/uploads/<?= $banner['hinh'] ?>" alt="slide" style="width: 1920px; height: 650px;">
						</a>
						<div class="tp-caption large_black sfr" data-x="120" data-y="140" data-speed="1100" data-start="1100" data-easing="easeInOutBack" style="font-size: 95px; font-weight: normal; text-transform: inherit; color: #ff6766;font-family: manustrialmanustrial;font-style:italic;text-shadow:0px 0px 3px #000;">
							<?= $banner['ten_banner'] ?>
						</div>
						<div class="tp-caption large_black sfr" data-x="120" data-y="230" data-speed="1100" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Montserrat', sans-serif; font-size: 68px; font-weight: 700; line-height:80px;text-transform: uppercase; color: #232323; text-shadow: 0 0 3px #fff">
							20015 collection
						</div>
						<div class="tp-caption large_black sfr carousel-caption-inner" data-x="120" data-y="300" data-speed="1100" data-start="1400" data-easing="easeInOutBack">
							<img src="images/sep-b.png" alt="" />
						</div>
						<div class="tp-caption lfb carousel-caption-inner" data-x="120" data-y="350" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="font-family: cabin Sans; font-size: 17px; font-weight: bold; text-transform: uppercase; color: #232323;">
							get upto 50% offer for order over $499!
						</div>

					</li>
				<?php
				endforeach
				?>
				<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
					<img src="images/slider-temp2.jpg" alt="slide">

					<div class="tp-caption large_black sfr" data-x="120" data-y="140" data-speed="1100" data-start="1100" data-easing="easeInOutBack" style="font-size: 95px; font-weight: normal; text-transform: inherit; color: #ff6766;font-family: manustrialmanustrial;font-style:italic;text-shadow:0px 0px 3px #000;">
						Summer
					</div>
					<div class="tp-caption large_black sfr" data-x="120" data-y="230" data-speed="1100" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Montserrat', sans-serif; font-size: 68px; font-weight: 700; line-height:80px;text-transform: uppercase; color: #232323; text-shadow: 0 0 3px #fff">
						20015 collection
					</div>
					<div class="tp-caption large_black sfr carousel-caption-inner" data-x="120" data-y="300" data-speed="1100" data-start="1400" data-easing="easeInOutBack">
						<img src="images/sep-b.png" alt="" />
					</div>
					<div class="tp-caption lfb carousel-caption-inner" data-x="120" data-y="350" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="font-family: cabin Sans; font-size: 17px; font-weight: bold; text-transform: uppercase; color: #232323;">
						get upto 50% offer for order over $499!
					</div>
				</li>

				<li data-transition="random" data-slotamount="7" data-masterspeed="1000">
					<img src="images/slider-temp.jpg" alt="slide">

					<div class="tp-caption large_black sfr" data-x="120" data-y="140" data-speed="1100" data-start="1100" data-easing="easeInOutBack" style="font-size: 95px; font-weight: normal; text-transform: inherit; color: #ff6766;font-family: manustrialmanustrial;font-style:italic;text-shadow:0px 0px 3px #000;">
						Summer
					</div>
					<div class="tp-caption large_black sfr" data-x="120" data-y="230" data-speed="1100" data-start="1400" data-easing="easeInOutBack" style="font-family: 'Montserrat', sans-serif; font-size: 68px; font-weight: 700; line-height:80px;text-transform: uppercase; color: #232323; text-shadow: 0 0 3px #fff">
						20015 collection
					</div>
					<div class="tp-caption large_black sfr carousel-caption-inner" data-x="120" data-y="300" data-speed="1100" data-start="1400" data-easing="easeInOutBack">
						<img src="images/sep-b.png" alt="" />
					</div>
					<div class="tp-caption lfb carousel-caption-inner" data-x="120" data-y="350" data-speed="1300" data-start="1700" data-easing="easeInOutBack" style="font-family: cabin Sans; font-size: 17px; font-weight: bold; text-transform: uppercase; color: #232323;">
						get upto 50% offer for order over $499!
					</div>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- HOME SLIDER -->

<div class="call_to_action_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="call_to_action">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single_call_action">
								<img src="images/phone.png" alt="" />
								<p>01 (800) 433 633<br>
									Daily 10.00 to 22.00</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single_call_action">
								<img src="images/world.png" alt="" />
								<p>Fast delivery across <br>
									australia</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single_call_action">
								<img src="images/discount.png" alt="" />
								<p>30% discount on order<br>
									over $199</p>
							</div>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="single_call_action last_single_call">
								<img src="images/return.png" alt="" />
								<p>14-day return policy</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- <section class="promotion_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="promo_inner">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="promotion_left">
								<div class="promotion_top">
									<div class="images_box">
										<img src="images/promo_img1.jpg" alt="" />
									</div>
									<div class="promo_text">
										<h5>Jackets</h5>
										<div class="p_line"></div>
										<a href="#">Show More Products <i class="fa fa-caret-right"></i></a>
									</div>
									<div class="hover_images">
										<img src="images/promo_img11.jpg" alt="" />
									</div>
								</div>
								<div class="promotion_bottom">
									<div class="images_box">
										<img src="images/promo_img2.jpg" alt="" />
									</div>
									<div class="promo_text_bottom">
										<h5>Shirts</h5>
										<div class="p_line"></div>
										<a href="#">Show More Products <i class="fa fa-caret-right"></i></a>
									</div>
									<div class="hover_images_bottom hover_images">
										<img src="images/promo_img22.jpg" alt="" />
									</div>
								</div>

							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="promotion_right">
								<div class="promotion_bottom promotion_bottom_t">
									<div class="images_box">
										<img src="images/promo_img3.jpg" alt="" />
									</div>
									<div class="promo_text promo_text_t">
										<h5>Trendy T-shirts</h5>
										<div class="p_line"></div>
										<a href="#">Show More Products <i class="fa fa-caret-right"></i></a>
									</div>
									<div class="hover_images_bottom hover_images">
										<img src="images/promo_img33.jpg" alt="" />
									</div>
								</div>
								<div class="promotion_top promotion_bottom_b">
									<div class="images_box">
										<img src="images/promo_img4.jpg" alt="" />
									</div>
									<div class="promo_text_bottom promo_text_b">
										<h5>Pants</h5>
										<div class="p_line"></div>
										<a href="#">Show More Products <i class="fa fa-caret-right"></i></a>
									</div>
									<div class="hover_images">
										<img src="images/promo_img44.jpg" alt="" />
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section> -->
<section class="trending_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="trending_box">
					<h2>Trending clothing</h2>
					<div class="multi_line"></div>

					<div role="tabpanel">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">new <span>x</span></a></li>
							<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">top rated <span>x</span></a></li>
							<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">trending <span>x</span></a></li>
							<li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"> best offer</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="home">
								<div id="owl-example" class="owl-carousel">
									<?php
									$ktdn = "";
									if (!isset($_SESSION['user']))
										$ktdn = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="tr_text"><input type="button" name="btnaddcart" value="ADD TO CART"  style="background-color: rgb(253,253,253,0.6); border: none;" onclick="return confirm(\' Vui lòng đăng nhập\')"></a>';
									else $ktdn = '<a href="#" class="tr_text"><input type="submit" name="btnaddcart" value="ADD TO CART" style="background-color: rgb(253,253,253,0.6); border: none;" ></a>
    '; ?>
									<?php
									$i = 0;
									$a = '';
									$b = '';
									foreach ($spnew as $sp) {
										extract($sp);
										if ($gia > $giam_gia) {
											$a = '<p>Sale</p>';
											$b = '<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>';
										}else{
											$b='<p>$' . $giam_gia . '</p>';
										}
										$linksp = "index.php?act=sanphamct&id_san_pham=" . $id_san_pham;
										echo '
							
									<div class="item">
										<div class="item-img">
										<form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
							<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" name="linksp" value="' . $linksp . '">	
							<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
                                        <a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 220px; height: 263px;"></a>
											<div class="tr-add-cart">
												<ul>
													
													<li>' . $ktdn . '</li>
													<li><a class="fa fa-heart tr_heart" href="#"></a></li>
													<li><a class="fa fa-search tr_search"
															href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
												</ul>
											</div>
										</div>
										<div class="item-new">
											' . $a . '
										</div>
										<div class="item-sub">
											<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
												<h5>' . substr($ten_san_pham, 0, 30) . '...</h5>
											</a>
											'.$b.'
										</div>
									</form>
							</div>';
										$i++;
									}
									?>

								</div>
							</div>

							<div role="tabpanel" class="tab-pane" id="profile">
								<div id="owl-example-two" class="owl-carousel">
									<?php
									$ktdn = "";
									if (!isset($_SESSION['user']))
										$ktdn = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="tr_text"><input type="button" name="btnaddcart" value="ADD TO CART"  style="background-color: rgb(253,253,253,0.6); border: none;" onclick="return confirm(\' Vui lòng đăng nhập\')"></a>';
									else $ktdn = '<a href="#" class="tr_text"><input type="submit" name="btnaddcart" value="ADD TO CART" style="background-color: rgb(253,253,253,0.6); border: none;" ></a>
    '; ?>
									<?php
									$i = 0;
									$a = '';
									foreach ($spnew as $sp) {
										extract($sp);
										if ($gia > $giam_gia) $a = '<p>Sale</p>';
										$linksp = "index.php?act=sanphamct&id_san_pham=" . $id_san_pham;
										echo '
							
									<div class="item">
										<div class="item-img">
										<form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
							<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" name="linksp" value="' . $linksp . '">	
							<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
                                        <a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 220px; height: 263px;"></a>
											<div class="tr-add-cart">
												<ul>
													
													<li>' . $ktdn . '</li>
													<li><a class="fa fa-heart tr_heart" href="#"></a></li>
													<li><a class="fa fa-search tr_search"
															href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
												</ul>
											</div>
										</div>
										<div class="item-new">
											' . $a . '
										</div>
										<div class="item-sub">
											<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
												<h5>' . substr($ten_san_pham, 0, 30) . '...</h5>
											</a>
											<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>
										</div>
									</form>
							</div>';
										$i++;
									}
									?>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane" id="messages">
								<div id="owl-example-three" class="owl-carousel">
									<?php
									$ktdn = "";
									if (!isset($_SESSION['user']))
										$ktdn = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="tr_text"><input type="button" name="btnaddcart" value="ADD TO CART"  style="background-color: rgb(253,253,253,0.6); border: none;" onclick="return confirm(\' Vui lòng đăng nhập\')"></a>';
									else $ktdn = '<a href="#" class="tr_text"><input type="submit" name="btnaddcart" value="ADD TO CART" style="background-color: rgb(253,253,253,0.6); border: none;" ></a>
    '; ?>
									<?php
									$i = 0;
									$a = '';
									foreach ($spnew as $sp) {
										extract($sp);
										if ($gia > $giam_gia) $a = '<p>Sale</p>';
										$linksp = "index.php?act=sanphamct&id_san_pham=" . $id_san_pham;
										echo '
							
									<div class="item">
										<div class="item-img">
										<form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
							<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" name="linksp" value="' . $linksp . '">	
							<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
                                        <a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 220px; height: 263px;"></a>
											<div class="tr-add-cart">
												<ul>
													
													<li>' . $ktdn . '</li>
													<li><a class="fa fa-heart tr_heart" href="#"></a></li>
													<li><a class="fa fa-search tr_search"
															href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
												</ul>
											</div>
										</div>
										<div class="item-new">
											' . $a . '
										</div>
										<div class="item-sub">
											<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
												<h5>' . substr($ten_san_pham, 0, 30) . '...</h5>
											</a>
											<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>
										</div>
									</form>
							</div>';
										$i++;
									}
									?>
								</div>
							</div>

							<div role="tabpanel" class="tab-pane" id="settings">
								<div id="owl-example-four" class="owl-carousel">
									<?php
									$ktdn = "";
									if (!isset($_SESSION['user']))
										$ktdn = '<a href="/app/views/demoxml.com/html/nimis/login-form-20/login.php" class="tr_text"><input type="button" name="btnaddcart" value="ADD TO CART"  style="background-color: rgb(253,253,253,0.6); border: none;" onclick="return confirm(\' Vui lòng đăng nhập\')"></a>';
									else $ktdn = '<a href="#" class="tr_text"><input type="submit" name="btnaddcart" value="ADD TO CART" style="background-color: rgb(253,253,253,0.6); border: none;" ></a>
    '; ?>
									<?php
									$i = 0;
									$a = '';
									foreach ($spnew as $sp) {
										extract($sp);
										if ($gia > $giam_gia) $a = '<p>Sale</p>';
										$linksp = "index.php?act=sanphamct&id_san_pham=" . $id_san_pham;
										echo '
							
									<div class="item">
										<div class="item-img">
										<form action="index.php?act=addtocart" method="post">
							<input type="hidden" name="id_san_pham" value="' . $id_san_pham . '">
							<input type="hidden" name="ten_san_pham" value="' . $ten_san_pham . '">
							<input type="hidden" name="hinh" value="' . $hinh . '">
							<input type="hidden" name="linksp" value="' . $linksp . '">	
							<input type="hidden" name="giam_gia" value="' . $giam_gia . '">	
                                        <a href="' . $linksp . '"><img src="/public/uploads/' . $hinh . '" alt=""  style="width: 220px; height: 263px;"></a>
											<div class="tr-add-cart">
												<ul>
													
													<li>' . $ktdn . '</li>
													<li><a class="fa fa-heart tr_heart" href="#"></a></li>
													<li><a class="fa fa-search tr_search"
															href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '"></a></li>
												</ul>
											</div>
										</div>
										<div class="item-new">
											' . $a . '
										</div>
										<div class="item-sub">
											<a href="index.php?act=product-detail&id_san_pham=' . $id_san_pham . '">
												<h5>' . substr($ten_san_pham, 0, 30) . '...</h5>
											</a>
											<p>$' . $giam_gia . '<span><del>$' . $gia . '</del></span></p>
										</div>
									</form>
							</div>';
										$i++;
									}
									?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- <section class="fresh_blog_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="fresh_blog">
					<h2>fresh from the blog</h2>
					<div class="multi_line"></div>

					<div id="blog-caro" class="carousel slide" data-ride="carousel">

						
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="fresh_blog_text">
											<h2><span>_</span> 13</h2>
											<div class="months">
												<div class="month_right">
													<p>April 2015 </p>
													<span><i class="fa fa-comment-o"></i>12</span>
												</div>
												<div class="fresh_blog_bottom_text">
													<h4>trendy cloth designs made from<br> our team</h4>
													<p>Trendy Collection</p>
													<div class="view_post">
														<a class="" href="#">view post
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="fresh_blog_img">
											<img src="images/blog1.jpg" alt="" />
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="fresh_blog_text">
											<h2><span>_</span> 12</h2>
											<div class="months">
												<div class="month_right">
													<p>April 2015 </p>
													<span><i class="fa fa-comment-o"></i>9</span>
												</div>
												<div class="fresh_blog_bottom_text">
													<h4>trendy cloth designs made from<br> our team</h4>
													<p>Trendy Collection</p>
													<div class="view_post">
														<a class="" href="#">view post
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="fresh_blog_img">
											<img src="images/blog2.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="fresh_blog_text">
											<h2><span>_</span> 11</h2>
											<div class="months">
												<div class="month_right">
													<p>April 2015 </p>
													<span><i class="fa fa-comment-o"></i>12</span>
												</div>
												<div class="fresh_blog_bottom_text">
													<h4>trendy cloth designs made from<br> our team</h4>
													<p>Trendy Collection</p>
													<div class="view_post">
														<a class="" href="#">view post
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="fresh_blog_img">
											<img src="images/blog1.jpg" alt="" />
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="fresh_blog_text">
											<h2><span>_</span> 10</h2>
											<div class="months">
												<div class="month_right">
													<p>April 2015 </p>
													<span><i class="fa fa-comment-o"></i>9</span>
												</div>
												<div class="fresh_blog_bottom_text">
													<h4>trendy cloth designs made from<br> our team</h4>
													<p>Trendy Collection</p>
													<div class="view_post">
														<a class="" href="#">view post
															<i class="fa fa-long-arrow-right"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="fresh_blog_img">
											<img src="images/blog2.jpg" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>

						
						<a class="left carousel-control" href="#blog-caro" role="button" data-slide="prev">
							<i class='fa fa-angle-left'></i>
						</a>
						<a class="right carousel-control" href="#blog-caro" role="button" data-slide="next">
							<i class='fa fa-angle-right'></i>
						</a>
					</div>



				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="testimonial_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="textimonial_box">
					<img src="images/msg.png" alt="" />
					<h2>lovely clients comment</h2>
					<div class="multi_line"></div>

					<div id="testi_carosel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#testi_carosel" data-slide-to="0" class="active"></li>
							<li data-target="#testi_carosel" data-slide-to="1"></li>
							<li data-target="#testi_carosel" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<p>It’s really Awesome Theme & specialy made for brand online shopping, so this
									theme uniqe elements use to create your dream website and help to promote your
									Product.</p>
								<div class="client_box">
									<img src="images/client_qoute.png" alt="" />
									<div class="client_box_text">
										<h4>SAN MICHLE</h4>
										<p>DIRECTOR OF EXAMPLE LTD</p>
									</div>
								</div>
							</div>
							<div class="item">
								<p>It’s really Awesome Theme & specialy made for brand online shopping, so this
									theme uniqe elements use to create your dream website and help to promote your
									Product.</p>
								<div class="client_box">
									<img src="images/client_qoute.png" alt="" />
									<div class="client_box_text">
										<h4>SAN MICHLE</h4>
										<p>DIRECTOR OF EXAMPLE LTD</p>
									</div>
								</div>
							</div>
							<div class="item">
								<p>It’s really Awesome Theme & specialy made for brand online shopping, so this
									theme uniqe elements use to create your dream website and help to promote your
									Product.</p>
								<div class="client_box">
									<img src="images/client_qoute.png" alt="" />
									<div class="client_box_text">
										<h4>SAN MICHLE</h4>
										<p>DIRECTOR OF EXAMPLE LTD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="branding_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="branding_box">
					<div class="branding_box_heading">
						<h2>Branding</h2>
						<div class="dotted_line"></div>
					</div>
					<div id="branding_caro" class="owl-carousel">
						<div>
							<img src="images/brand1.png" alt="" />
						</div>
						<div>
							<img src="images/brand2.png" alt="" />
						</div>
						<div>
							<img src="images/brand3.png" alt="" />
						</div>
						<div>
							<img src="images/brand4.png" alt="" />
						</div>
						<div>
							<img src="images/brand5.png" alt="" />
						</div>
						<div>
							<img src="images/brand6.png" alt="" />
						</div>
						<div>
							<img src="images/brand1.png" alt="" />
						</div>
						<div>
							<img src="images/brand2.png" alt="" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>