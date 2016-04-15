<header>
	<div class="container b-header__box b-relative">
		<?php
			$image = $this->Html->image ( '/img/logo-header-default.png', array (
					'class' => 'color-theme',
					//'data-retina',
					'alt' => 'Logo' 
			) );
			
			echo $this->Html->link ( $image, '/', array (
					'escape' => false,
					'class' => 'b-left b-logo' 
			) );
		?>
		<div class="b-header-r b-right b-header-r--icon">
			<div class="b-header-ico-group f-header-ico-group b-right">
				<span class="b-search-box">
					<i class="fa fa-search"/>
					<input type="text" placeholder="Enter your keywords"/>
				</span>
				<span class="b-header-ico b-header-ico-cart-parent">
					<a href="#" class="b-fa-shopping-cart">
						<i class="fa fa-shopping-cart"/>
					</a>
					<div class="b-option-cart__items">
						<div class="b-option-cart__items__title f-option-cart__items__title f-default-l">Recently added item(s)</div>
						<ul>
							<li>
								<div class="b-option-cart__items__img">
									<div class="view view-sixth">
										<img data-retina="" src="img/shop/cart_mini_pic.jpg" alt="">
											<div class="b-item-hover-action f-center mask">
												<div class="b-item-hover-action__inner">
													<div class="b-item-hover-action__inner-btn_group">
														<a href="#" class="b-btn f-btn b-btn-light f-btn-light info">
															<i class="fa fa-link"/>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="b-option-cart__items__descr">
										<strong class="b-option-cart__descr__title f-option-cart__descr__title">
											<a href="#">Product Example</a>
										</strong>
										<span class="b-option-cart__descr__cost f-option-cart__descr__cost">1 x $239</span>
									</div>
									<i class="fa fa-times b-icon--fa"/>
								</li>
								<li>
									<div class="b-option-cart__items__img">
										<div class="view view-sixth">
											<img data-retina="" src="img/shop/cart_mini_pic.jpg" alt="">
												<div class="b-item-hover-action f-center mask">
													<div class="b-item-hover-action__inner">
														<div class="b-item-hover-action__inner-btn_group">
															<a href="#" class="b-btn f-btn b-btn-light f-btn-light info">
																<i class="fa fa-link"/>
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="b-option-cart__items__descr">
											<strong class="b-option-cart__descr__title f-option-cart__descr__title">
												<a href="#">Product Example</a>
											</strong>
											<span class="b-option-cart__descr__cost f-option-cart__descr__cost">1 x $239</span>
										</div>
										<i class="fa fa-times b-icon--fa"/>
									</li>
								</ul>
								<div class="b-option-cart__btn">
									<button class="button-xs button-gray-light">Cancel</button>
									<button class="button-xs">Check out  </button>
								</div>
							</div>
						</span>
					</div>
					<div class="b-top-nav-show-slide f-top-nav-show-slide b-right j-top-nav-show-slide">
						<i class="fa fa-align-justify"/>
					</div>
					<nav class="b-top-nav f-top-nav b-right j-top-nav">
						<ul class="b-top-nav__1level_wrap">
							<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
								<a href="homepage-1-index.html">
									<i class="fa fa-home b-menu-1level-ico"/>Home <span class="b-ico-dropdown">
										<i class="fa fa-arrow-circle-down"/>
									</span>
								</a>
								<div class="b-top-nav__dropdomn">
									<ul class="b-top-nav__2level_wrap">
										<li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Homepage</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="homepage-1-index.html">
												<i class="fa fa-angle-right"/>Home v1: Landing Page</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="b-top-nav__1level f-top-nav__1level f-primary-b">
								<a href="page_header_1.html">
									<i class="fa fa-folder-open b-menu-1level-ico"/>Headers<span class="b-ico-dropdown">
										<i class="fa fa-arrow-circle-down"/>
									</span>
								</a>
								<div class="b-top-nav__dropdomn">
									<ul class="b-top-nav__2level_wrap">
										<li class="b-top-nav__2level_title f-top-nav__2level_title">Headers</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="page_header_1.html">
												<i class="fa fa-angle-right"/>Header 1</a>
										</li>
									</ul>
								</div>
							</li>


							<li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
								<a href="page_search_result.html">
									<i class="fa fa-cloud-download b-menu-1level-ico"/>Pages<span class="b-ico-dropdown">
										<i class="fa fa-arrow-circle-down"/>
									</span>
								</a>
								<div class="b-top-nav__dropdomn">
									<ul class="b-top-nav__2level_wrap">
										<li class="b-top-nav__2level_title f-top-nav__2level_title">Our Gallery</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_gallery_2_colums.html">
												<i class="fa fa-angle-right"/>2 Columns</a>
										</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_gallery_3_colums.html">
												<i class="fa fa-angle-right"/>3 Columns</a>
										</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_gallery_4_colums.html">
												<i class="fa fa-angle-right"/>4 Columns</a>
										</li>
									</ul>
									<ul class="b-top-nav__2level_wrap">
										<li class="b-top-nav__2level_title f-top-nav__2level_title">Services</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_services_version_1.html">
												<i class="fa fa-angle-right"/>Version 1</a>
										</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_services_version_2.html">
												<i class="fa fa-angle-right"/>Version 2</a>
										</li>
										<li class="b-top-nav__2level f-top-nav__2level f-primary">
											<a href="our_services_version_3.html">
												<i class="fa fa-angle-right"/>Version 3</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>

					</nav>
				</div>
			</div>
		</header>