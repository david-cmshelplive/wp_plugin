<?php

/**
 * the file for the sanitizer functions.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * The main controller functionality of the plugin.
 *
 * processes all the requests and hand them over to 
 * the sub controllers
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Sanitizer
{

	
	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;


	/**
	 * handles the requests 
	 *
	 * @since    1.0.0
	 */
	public static function sanitize_request() 
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		if(isset($_POST['context']))
		{

			if($_POST['context'] === 'admin')
			{

				//load admin sub controller method to pass the request
			}
			elseif($_POST['context'] === 'public')
			{

				//load public sub controller method to pass the request
			}
		}

	}



}
