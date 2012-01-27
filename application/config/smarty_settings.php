<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * The following config items are for the integration of
 * the Smarty template parsing system into CodeIgniter.
 *
 * @author	Eric 'Aken' Roberts
 * @link	
 */

/*
|--------------------------------------------------------------------------
| File Extension
|--------------------------------------------------------------------------
|
| Set the file extension of the templates (views) you're
| using with the Smarty template library.
|
| Common examples: php, phtml, tpl
|
*/
$config['smarty_template_ext'] = 'php';

/*
|--------------------------------------------------------------------------
| Compiled Folder
|--------------------------------------------------------------------------
|
| Set the location of the compiled folder for Smarty files.
|
*/
$config['smarty_cache_dir'] = APPPATH . 'cache/Smarty/';

/*
|--------------------------------------------------------------------------
| Cache Folder
|--------------------------------------------------------------------------
|
| Set the location of the cache folder for Smarty files.
|
*/
$config['smarty_cache_dir'] = APPPATH . 'cache/Smarty/cache/';