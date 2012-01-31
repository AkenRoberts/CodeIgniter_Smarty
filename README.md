# CodeIgniter + Smarty

**Add Smarty to your CodeIgniter application!**

By Eric "Aken" Roberts - [Cryode Web Studio][1]

## Installation

1.	**Copy Files & Directories**  
	Copy the contents of the application folder to your own application folder,
	whatever you may have named it. Smarty 3.1.7 is included, so you do not need
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

## Warnings

*	The use of PHP tags/code in Smarty template files has been completely removed as of
	Smarty 3.1.0. Any PHP code will be automatically removed when rendered. You'll
	need to update your existing views to use Smarty syntax.

*	The core Loader file is extended with a `MY_Loader.php` file, and the `view()`
	method is replaced. If you have previously created a `MY_Loader` file with your
	own changes, you will need to merge the two files together.

## Support

I'll provide limited support for installation/use if needed. Please check the
[CodeIgniter Forum Thread][4] before contacting me, in case your question has already
been covered. If you find a bug or problem with the code, create an Issue here on
Github or contact me.

Feature requests are accepted and encouraged. Create a pull request if you're feeling
frisky!

## What is Smarty?

[Smarty][2] is a PHP template engine. In CodeIgniter, it provides a cleaner syntax and 
additional features for your view files. For information about Smarty and how to use it, 
please see [Smarty's Documentation][3].

## Change Log

### 1.0.0 - Jan 27, 2012

Initial release.

[1]: http://www.cryode.com
[2]: http://www.smarty.net
[3]: http://www.smarty.net/docs/en/
[4]: http://codeigniter.com/forums/viewthread/209901/