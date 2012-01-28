# CodeIgniter + Smarty

**Add Smarty to your CodeIgniter application!**

## Installation

1.	**Copy Files & Directories**  
	Copy the contents of the application folder to your own application folder,
	whatever you may have named it. Smarty v3.1.7 is included, so you do not need
	to download it separately.

2.	**Check Config Settings**  
	Check the settings located in `application/config/smarty/smarty_settings.php`.
	The default settings work out of the box, but can be adjusted to your liking.

3.	**Add Write Permissions to Compile Directory**  
	Make sure your server has permission to write to the Smarty compile directory
	(usually CHMOD 755 or 777 on non-Windows servers).

4.	**Update Any Existing Views**  
	If you have existing view files, you'll want to update them to use Smarty syntax
	instead of PHP tags.
	
	`<?php echo $item; ?>` would become `{$item}`

## What is Smarty?

[Smarty][1] is a PHP template engine. In CodeIgniter, it provides a cleaner syntax and 
additional features for your view files. For information about Smarty and how to use it, 
please see [Smarty's Documentation][2].

## Change Log

### 1.0.0 - Jan 27, 2012

Initial release.

[1]: http://www.smarty.net
[2]: http://www.smarty.net/docs/en/