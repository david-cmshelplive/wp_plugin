<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Plugin_Name_Public_Update
{
    /**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;
        
        public function update_data()
        {
            global $wpdb;
            
            $query = $wpdb->query($wpdb->prepare("update wp_table_name set data = %s where `id` = 1",$_POST['data']));
            
            if($query)
            {
                echo"successfully updated";
            }
            
            else
            {
                $wpdb->show_errors();
            }
            
        }
}
