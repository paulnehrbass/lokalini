<?php
require_once 'test.php';



$contName = Inflector::camelize($this->params['controller']);
$actName = $this->params['action'];
$actionUrl = $contName.'/'.$actName;
$activeClass='active';
$inactiveClass='';


$active1Level = " is-active-top-nav__1level ";
$active2Level = " is-active-top-nav__2level";
$active2LevelTitle = " is-active-top-nav__2level-title";

echo $this->Html->link('SignOut', __('SignOut'));

?>
<header>
	<div class="container b-header__box b-relative">
		<a href="/" class="b-left b-logo ">
			<img class="color-theme" data-retina="" src="img/logo-header-default.png" alt="Logo">
		</a>
		<div class="b-header-r b-right b-header-r--icon">	
		
			<?php echo $this->element('b_header_ico_group');?>
			
			<nav class="b-top-nav f-top-nav b-right j-top-nav">
				<ul class="b-top-nav__1level_wrap">
					<li class="b-top-nav__1level f-top-nav__1level is-active-top-nav__1level f-primary-b">
						<a href="/">
							<i class="fa fa-home b-menu-1level-ico"></i>Home 
							<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span>
						</a>
					</li>
					
					<?php if($this->UserAuth->isLogged()) {
						if($this->UserAuth->isAdmin()) {?>
					<li class="b-top-nav__1level f-top-nav__1level f-primary-b b-top-nav-big">
						<a href="page_search_result.html"><i class="fa fa-cloud-download b-menu-1level-ico"></i>Admin<span class="b-ico-dropdown"><i class="fa fa-arrow-circle-down"></i></span></a>
					    <div style="opacity: 0;" class="b-top-nav__dropdomn">
					    	<ul class="b-top-nav__2level_wrap">
					    	
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title">Users</li>
					        	
					        	<?php if($this->UserAuth->HP('Users', 'addUser')) {?>
					        	<li class="b-top-nav__2level f-top-nav__2level f-primary">
					        		<!-- <a href="#"><i class="fa fa-angle-right"></i>Add User</a> -->
					        		<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('Add User'),
					        					array('controller'=>'Users', 'action'=>'addUser', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
					        	</li>
					        	<?php }?>
					        	
					            <?php if($this->UserAuth->HP('Users', 'addMultipleUsers')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary">
					            	<?php //<a href="#"><i class="fa fa-angle-right"></i>Add Multiple Users</a>?>
					            	<?php //$this->Html->link(__('Add Multiple Users'), array('controller'=>'Users', 'action'=>'addMultipleUsers', 'plugin'=>'usermgmt')); ?>
					            	<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('Add Multiple Users'),
					        					array('controller'=>'Users', 'action'=>'addMultipleUsers', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
					            </li>
					            <?php }?>
					            
								<?php if($this->UserAuth->HP('Users', 'index')) {?>
								<li class="b-top-nav__2level f-top-nav__2level f-primary">
									<!-- <a href="#"><i class="fa fa-angle-right"></i>All Users</a> -->
									<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('All Users'),
					        					array('controller'=>'Users', 'action'=>'index', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
								</li>
								<?php }?>
								
					            <?php if($this->UserAuth->HP('Users', 'online')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary">
					            	<!-- <a href="#"><i class="fa fa-angle-right"></i>Online Users</a> -->
					            	<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('Online Users'),
					        					array('controller'=>'Users', 'action'=>'online', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
					            </li>
					            <?php }?>
					            
					        </ul>
					        <ul class="b-top-nav__2level_wrap">
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title">Groups</li>
					        	
					        	<?php if($this->UserAuth->HP('UserGroups', 'addGroup')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary">
					            	<!-- <a href="#"><i class="fa fa-angle-right"></i>Add Group</a> -->
					            	<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('Add Group'),
					        					array('controller'=>'UserGroups', 'action'=>'addGroup', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
					            </li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserGroups', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary">
					            	<!-- <a href="#"><i class="fa fa-angle-right"></i>All Groups</a> -->
					            	<?php 
					        			echo $this->Html->link(
					        					'<i class="fa fa-angle-right"></i>'.__('All Groups'),
					        					array('controller'=>'UserGroups', 'action'=>'index', 'plugin'=>'usermgmt'),
					        					array('escape' => false, 'style'=>'text-decoration: none'));?>
					            </li>
					            <?php }?>
					            
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title" style="margin-top:10px;">Pages</li>
					        	<?php if($this->UserAuth->HP('Contents', 'addPage')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Add Page</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('Contents',  'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>All Pages</a></li>
					            <?php }?>
					        
					        </ul>
					         
					        <ul class="b-top-nav__2level_wrap">
					        
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title">Admin</li>
					        	
					        	<?php if($this->UserAuth->HP('UserGroupPermissions', 'permissionGroupMatrix')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Group Permissions</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserGroupPermissions', 'permissionSubGroupMatrix')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Subgroup Permissions</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserSettings', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>All Settings</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserSettings', 'cakelog')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Cake Logs</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('Users', 'deleteCache')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Delete Cache</a></li>
					            <?php }?>
					            
					        </ul>
					        
					        <ul class="b-top-nav__2level_wrap">
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title">Mail</li>
					        	
					        	<?php if($this->UserAuth->HP('UserEmails', 'send')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Send Mail</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserEmails', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>View sent Mails</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserContacts', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Contact Enquiries</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserEmailTemplates', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Email Templates</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('UserEmailSignatures', 'index')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Email Signatures</a></li>
					            <?php }?>
					        </ul>
					        
					        <ul class="b-top-nav__2level_wrap">
					        
					        	<li class="b-top-nav__2level_title f-top-nav__2level_title">MyAccount</li>
					        	
					        	<?php if($this->UserAuth->HP('Users', 'myprofile')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>View Profile</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('Users', 'editProfile')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Edit Profile</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('Users', 'changePassword')) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Change Password</a></li>
					            <?php }?>
					            
					            <?php if($this->UserAuth->HP('Users', 'deleteAccount') && ALLOW_DELETE_ACCOUNT && !$this->UserAuth->isAdmin()) {?>
					            <li class="b-top-nav__2level f-top-nav__2level f-primary"><a href="#"><i class="fa fa-angle-right"></i>Delete Account</a></li>
					            <?php }?>
					            
					            <li class="b-top-nav__2level_title f-top-nav__2level_title" style="margin-top:20px;">Dashboard</li>
					            <li class="b-top-nav__2level_title f-top-nav__2level_title" style="margin-top:20px;">Contact Us</li>
					            <li class="b-top-nav__2level_title f-top-nav__2level_title" style="margin-top:20px;">SignOut</li>
					        </ul>
					        
					   </div>
					</li>
					<?php }}?>
				</ul>
			</nav>
		</div>
	</div>
</header>