<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * MY_Loader class extends the core CI_Loader class.
 *
 * @author  Eric 'Aken' Roberts <eric@cryode.com>
 * @link    https://github.com/cryode/CodeIgniter_Smarty
 * @version 1.1.0
 * @license MIT
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
	public function view($template, $data = array(), $return = FALSE)
	{
		// Get the CI super object, load related library.
		$CI =& get_instance();
		$CI->load->library('smartytpl');

		// Add extension to the filename if it's not there.
		$ext = '.' . ltrim($CI->config->item('smarty_template_ext'), '.');

		if (substr($template, -strlen($ext)) !== $ext)
		{
			$template .= $ext;
		}

		// Make sure the file exists first.
		if ( ! $CI->smartytpl->templateExists($template))
		{
			show_error('Unable to load the template file: ' . $template);
		}

		// Assign any variables from the $data array.
		$CI->smartytpl->assign_variables($data);

		/*
			Smarty has two built-in functions to rendering templates: display()
			and fetch(). We're going to	use only fetch(), since we want to take
			the template contents and either return them or add them to
			CodeIgniter's output class. This lets us optionally take advantage
			of some of CI's built-in output features.
		*/

		try
		{
			$output = $CI->smartytpl->fetch($template);
		}
		catch (Exception $e)
		{
			show_error(htmlspecialchars_decode($e->getMessage()), 500, 'Smarty Exception');
		}

		// Return the output if the return value is TRUE.
		if ($return === TRUE)
		{
			return $output;
		}

		// Otherwise append to output just like a view.
		$CI->output->append_output($output);
	}
}


/* End of file Loader.php */
/* Location: ./application/core/Loader.php */