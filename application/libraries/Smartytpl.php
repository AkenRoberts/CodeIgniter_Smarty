<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// Require the Smarty class from our third_party directory.
require_once APPPATH . 'third_party/Smarty/Smarty.class.php';

/**
 * Smartytpl library. Extends default Smarty class
 * for easy integration into CodeIgniter.
 */
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
		
		// Set appropriate paths.
		$this->template_dir = APPPATH . 'views/';
		$this->compile_dir = APPPATH . 'cache/smarty/compiled/';
		$this->cache_dir = APPPATH . 'cache/smarty/cached/';
		$this->config_dir = APPPATH . 'third_party/Smarty/configs/';
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