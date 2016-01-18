<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/includes
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 * @author     Your Name <email@example.com>
 */
class Plugin_Name_Main_Controller 
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
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public static function handle_request() 
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
                                Plugin_Name_Controller_Admin::init($_POST);
			}
			elseif($_POST['context'] === 'public')
			{
                                Plugin_Name_Controller_Public::init($_POST);
				//load public sub controller method to pass the request
			}
		}

	}
        
        
        /**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public static function init() 
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

			Plugin_Name_Main_Controller::handle_request();
		}
                
                else
                {
                    if(is_admin())
                    {   
                        echo"admin_menu";
                        //Plugin_Name_Controller_Admin::show_default_view();
                    }
                    else
                    {
                        Plugin_Name_Controller_Public::show_default_view();
                    }
                }

	}

	

}
