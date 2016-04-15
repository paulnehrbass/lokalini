<nav class="b-top-nav f-top-nav b-right j-top-nav">
	<ul class="b-top-nav__1level_wrap">
		<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
			<a href="homepage-1-index.html"> 
				<i class="fa fa-home b-menu-1level-ico" />Home 
				<span class="b-ico-dropdown"> 
					<i class="fa fa-arrow-circle-down" />
				</span>
			</a>
			<div class="b-top-nav__dropdomn">
				<ul class="b-top-nav__2level_wrap">
					<li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Homepage</li>
					<li class="b-top-nav__2level f-top-nav__2level f-primary">
						<a href="homepage-1-index.html"> <i class="fa fa-angle-right" />Home v1: Landing Page</a>
					</li>
				</ul>
			</div>
		</li>
	</ul>
</nav>

<?php 
	$data = array(
			'navigation' => array(
					'firstChild' => 'wrapper',
					'options' => array('class'=>'b-top-nav f-top-nav b-right j-top-nav')
			)
	);
?>

<!-- 

'class'=>'b-top-nav f-top-nav b-right j-top-nav'
					'id'=>'widgetTopNavigation'
 -->


<!-- wdgTopNavRoot -->
<nav class="b-top-nav f-top-nav b-right j-top-nav" ></nav>

<!-- wdgTopNavWrapper- -->
<ul class="b-top-nav__1level_wrap"></ul>

<!-- wdgTopNavItemActive -->
<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b"></li>

<!-- wdgTopNavItemPassive -->
<li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big"></li>

<!-- wdgTopNavDropDown -->
<div class="b-top-nav__dropdomn"></div>

<!-- wdgTopNav2LevelActive -->
<!-- wdgTopNav2LevelPassive -->

