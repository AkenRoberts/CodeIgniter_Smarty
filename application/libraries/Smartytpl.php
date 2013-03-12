<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Smartytpl library. Extends default Smarty class
 * for easy integration into CodeIgniter.
 *
 * @author  Eric 'Aken' Roberts <eric@cryode.com>
 * @link    https://github.com/cryode/CodeIgniter_Smarty
 * @version 1.1.0
 * @license MIT
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
		$this->setTemplateDir($CI->config->item('smarty_template_dir'));
		$this->setCompileDir($CI->config->item('smarty_compile_dir'));

		// Auto-escape variables?
		if ($CI->config->item('smarty_auto_escape_vars'))
		{
			$this->escape_html = TRUE;
		}

		// Assign CI instance to be available in templates as $ci
		$this->assignByRef('CI', $CI);
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
			$this->assign($variables);
		}
	}
}


/* End of file Smartytpl.php */
/* Location: ./application/libraries/Smartytpl.php */