<?php
/*
 * Plugin Name: MOA Tsquared Tweaks
 */

class MOA_TQ{

	public function init(){
		add_action('pre_get_posts', array($this, 'modify_shop_query'));

	}

	public function enqueue_scripts(){

	}

	public function process_ajax(){

	}

	/**
	 * @param $query WP_Query
	 */
	public function modify_shop_query( $query ){
		//also works for Product Category or Brand

		if(is_post_type_archive('product'))
		{
			if(!is_admin() && is_main_query()){
				
			}


		}

	}



}

$moa_tq = new MOA_TQ();
$moa_tq->init();