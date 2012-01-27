<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Loader class extends the core CI_Loader class,
 */
class MY_Loader extends CI_Loader {
	
	/**
	 * Replace the default $this->load->view() method
	 * with our own, so we can use Smarty!
	 *
	 * This method works identically to CI's default method,
	 * in that you should pass parameters to it in the same way.
	 *
	 * @access	public
	 * @param	string	The template path name.
	 * @param	array	An array of data to convert to variables.
	 * @param	bool	Set to TRUE to return the loaded template as a string.
	 * @return	mixed	If $return is TRUE, returns string. If not, returns void.
	 */
	public function view($template, $data = array(), $return = false)
	{
		// Get the CI super object and load the related library.
		$CI =& get_instance();
		$CI->load->library('smartytpl');
		
		// Assign any variables from the $data array.
		$CI->smartytpl->assign_variables($data);
		
		// Assign CI instance to be available in templates as $ci
		$CI->smartytpl->assignByRef('ci', $CI);
		
		// Add extension to filename.
		if (substr($template, -4) !== '.php')
		{
			$template .= '.php';
		}
		
		$output = $CI->smartytpl->fetch($template);
		
		// Return the output if we set the return value to true.
		if ($return === true) return $output;
		
		// Otherwise add to the final output just like a view.
		$CI->output->append_output($output);
	}

}