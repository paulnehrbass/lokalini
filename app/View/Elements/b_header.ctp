<?php
$contName = Inflector::camelize($this->params['controller']);
$actName = $this->params['action'];
$actionUrl = $contName.'/'.$actName;
$activeClass='active';
$inactiveClass='';


$active1Level = "is-active-top-nav__1level";
$active2Level = "is-active-top-nav__2level";
$active2LevelTitle = "is-active-top-nav__2level-title";

?>
<header class="">
	<div class="container b-header__box b-relative">
		<a href="/" class="b-left b-logo ">
			<img class="color-theme" data-retina="" src="img/logo-header-default.png" alt="Logo">
		</a>
		<div class="b-header-r b-right b-header-r--icon">	
		
			<?php echo $this->element('b_header_ico_group');?>
			
			<nav class="b-top-nav f-top-nav b-right j-top-nav">
				<ul class="b-top-nav__1level_wrap">
					<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
						<a href="homepage-1-index.html">
							<i class="fa fa-home b-menu-1level-ico"></i>Home 
							<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span>
						</a>
						<div style="opacity: 0;" class="b-top-nav__dropdomn">
							<ul class="b-top-nav__2level_wrap">
								<li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Homepage</li>
								<li class="b-top-nav__2level f-top-nav__2level f-primary">
									<a href="homepage-1-index.html"><i class="fa fa-angle-right"></i>Home v1: Landing Page</a>
								</li>
							</ul>
						</div>
					</li>
					<!-- User-Management -->
					
					<?php 
					if ($this->UserAuth->isLogged ()) { 
						//echo "<li class='".(($actionUrl=='Users/dashboard') ? $activeClass : $inactiveClass)."'>".$this->Html->link(__('Dashboard'), array('controller'=>'Users', 'action'=>'dashboard', 'plugin'=>'usermgmt'))."</li>";
						$link = "<i class='fa fa-home b-menu-1level-ico'></i>".__('User')."
								<span class='b-ico-dropdown'>
									<i class='fa fa-arrow-circle-down'></i>
								</span>";
						
						echo "<li class='b-top-nav__1level f-top-nav__1level ".(($actionUrl=='Users/dashboard') ? $active1Level : $inactiveClass)." f-primary-b'>";
						echo $this->Html->link(
								$link,
								array('controller'=>'Users', 'action'=>'dashboard', 'plugin'=>'usermgmt'),
								array('escape'=>false)
						);
						echo "</li>";
					};
					?>
					
					
					
					
					<!-- 
					<a href="homepage-1-index.html">
								<i class="fa fa-home b-menu-1level-ico"></i>User 
								<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span>
							</a>
							<div style="opacity: 0;" class="b-top-nav__dropdomn">
								<ul class="b-top-nav__2level_wrap">
									<li class="b-top-nav__2level_title f-top-nav__2level_title is-active-top-nav__2level-title">Homepage</li>
									<li class="b-top-nav__2level f-top-nav__2level f-primary">
										<a href="homepage-1-index.html"><i class="fa fa-angle-right"></i>Home v1: Landing Page</a>
									</li>
								</ul>
							</div>
					 -->
				</ul>
			</nav>
		</div>
	</div>
</header>