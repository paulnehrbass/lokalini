<?php 

$adminMenu = array(
		'Dashboard'=>array(
				'controller'=>'Users', 
				'action'=>'addUser', 
				'plugin'=>'usermgmt'
		),
		'Contact Us'=>'',
		'Sign Out'=>'',
		'Users'=>array(
				'Add User'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Add Multiple Users'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				
				),
				'All Users'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Online Users'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'		
				)
		),
		'Groups'=>array(
				'Add Groups'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'All Groups'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				
				)
		),
		'Admin'=>array(
				'Group Permissions'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Subgroup Permissions'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				
				),
				'All Settings'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Cake Logs'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Delete Cache'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				)
				
		),
		'Mail'=>array(
				'Send Mail'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'View sent Mails'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				
				),
				'Contact Enquiries'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Email Templates'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				),
				'Email Signatures'=>array(
						'controller'=>'Users', 
						'action'=>'addUser', 
						'plugin'=>'usermgmt'
				)
		),
		'Pages'=>array(
				'Add Page'=>array(
						'controller'=>'Users',
						'action'=>'addUser',
						'plugin'=>'usermgmt'
				),
				'All Pages'=>array(
						'controller'=>'Users',
						'action'=>'addUser',
						'plugin'=>'usermgmt'
				)
		),
		'My Account'=>array(
				'View Profile'=>array(
						'controller'=>'Users',
						'action'=>'addUser',
						'plugin'=>'usermgmt'
				),
				'Edit Profile'=>array(
						'controller'=>'Users',
						'action'=>'addUser',
						'plugin'=>'usermgmt'
				),
				'Change Password'=>array(
						'controller'=>'Users',
						'action'=>'addUser',
						'plugin'=>'usermgmt'
				)
		)
);

/*	Dashboard
    Users
        Add User
        Add Multiple Users
        All Users
        Online Users
    Groups
        Add Group
        All Groups
    Admin
        Group Permissions
        Subgroup Permissions
        All Settings
        Cake Logs
        Delete Cache
    Mail
        Send Mail
        View Sent Mails
        Contact Enquiries
        Email Templates
        Email Signatures
	Pages
        Add Page
        All Pages
    My Account
        View Profile
        Edit Profile
        Change Password
    Contact Us
    Sign Out*/
?>