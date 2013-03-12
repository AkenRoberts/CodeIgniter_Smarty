<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * The following config items are for the integration of
 * the Smarty template parsing system into CodeIgniter.
 *
 * @author  Eric 'Aken' Roberts <eric@cryode.com>
 * @link    https://github.com/cryode/CodeIgniter_Smarty
 * @version 1.1.0
 * @license MIT
 */

/**
 * --------------------------------------------------------------------------
 * Template Directory
 * --------------------------------------------------------------------------
 *
 * Set the directory where your templates (view files) are located.
 * Most users will not need to change this directory. It is pre-set
 * to CodeIgniter's default views directory.
 *
 * The default is a ternary op check to see if the CI 3.0+
 * constant VIEWPATH exists. You can customize this as you see fit.
 *
 * @var   string
 * @since 1.0.0
 */
$config['smarty_template_dir'] = (defined('VIEWPATH')) ? VIEWPATH : APPPATH . 'views/';

/**
 * --------------------------------------------------------------------------
 * File Extension
 * --------------------------------------------------------------------------
 *
 * Set the file extension of the templates (views) you're
 * using with the Smarty template library.
 *
 * Common examples: php, tpl, phtml
 * Default: php
 *
 * @var   string
 * @since 1.0.0
 */
$config['smarty_template_ext'] = 'php';

/**
 * --------------------------------------------------------------------------
 * Compiled Directory
 * --------------------------------------------------------------------------
 *
 * Set the location of the compiled folder for Smarty files. This is
 * required! Make sure it has write permissions (e.g. CHMOD 0777).
 *
 * Default: APPPATH . 'third_party/Smarty/compiled/';
 *
 * @var   string
 * @since 1.0.0
 */
$config['smarty_compile_dir'] = APPPATH . 'third_party/Smarty/compiled/';

/**
 * --------------------------------------------------------------------------
 * Auto-escape Variables
 * --------------------------------------------------------------------------
 *
 * When TRUE, every variables parsed by Smarty will be automatically
 * escaped (via PHP's htmlspecialchars()). If you want to prevent
 * escaping of a variable, use the nofilter flag: {$variable nofilter}
 *
 * Default: FALSE
 *
 * @var   boolean
 * @since 1.1.0
 * @see   http://www.smarty.net/docs/en/variable.escape.html.tpl
 */
$config['smarty_auto_escape_vars'] = FALSE;


/* End of file smarty_settings.php */
/* Location: ./application/config/smarty/smarty_settings.php */