<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smartytpl library. Extends default Smarty class
 * for easy integration into CodeIgniter.
 *
 * @author	Eric 'Aken' Roberts <eric@cryode.com> 
 * @link	https://github.com/cryode/CodeIgniter_Smarty
 */

// Require the Smarty class from our third_party directory.
require_once APPPATH . 'third_party/Smarty/Smarty.class.php';
 
class Smartytpl extends Smarty {

	/**
	 * Constructor!
	 *
	 * @access	public
	 * @return	void
	 */
	public function __construct()
	{
		parent::__construct();
		
		// Get CodeIgniter super object.
		$CI =& get_instance();
		
		// Get Smarty config items.
		$CI->load->config('smarty/smarty_settings');
		
		// Set appropriate paths.
		$this->template_dir = $CI->config->item('smarty_template_dir');
		$this->compile_dir = $CI->config->item('smarty_compile_dir');
		
		// These are ignored for now until I do more testing and code them properly. :)
		//$this->cache_dir = APPPATH . 'cache/smarty/cached/';
		//$this->config_dir = APPPATH . 'third_party/Smarty/configs/';
	}
	
	// ------------------------------------------------------------------------------
	/**
	 * Takes the data array passed as the second parameter of
	 * CodeIgniter's $this->load->view() function, and assigns
	 * data to Smarty.
	 */
	public function assign_variables($variables = array())
	{
		if (is_array($variables))
		{
			foreach ($variables as $name => $val)
			{
				$this->assign($name, $val);
			}
		}
	}

}