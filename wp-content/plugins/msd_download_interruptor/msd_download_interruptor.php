<?php
/*
 Plugin Name: MSD Download Interruptor
Description: A simple interruptor that displays a form (on page) before allowing download.
*/
class MSD_Download_Interruptor {
	private $the_path;
	private $the_url;
	
	function MSD_Download_Interruptor(){
		$this->__construct();
	}
	function __construct(){
		$this->the_path = plugin_dir_path(__FILE__);
		$this->the_url = plugin_dir_url(__FILE__);
		wp_enqueue_style('msd-download-interruptor-style',$this->the_url.'css/style.css');
		wp_enqueue_script('msd-download-interruptor-script',$this->the_url.'js/interruptor.js',array('jquery'),null,FALSE);
		add_action('init', array(&$this,'init_theme_method'));
		add_action("gform_after_submission_2", array(&$this,'after_submission_tech_note'), 10, 2);
		add_action("gform_after_submission_3", array(&$this,'after_submission_white_paper'), 10, 2);
	}
	
	function init_theme_method() {
		add_thickbox();
	}

	function after_submission_tech_note($entry,$form){
		$post_url = 'http://crm.vargosolutions.com/modules/Webforms/capture.php';
		$fields = array(
				'publicid' => $entry['6'],
				'name' => $entry['7'],
				'firstname' => $entry['1.3'],
				'lastname' => $entry['1.6'],
				'company' => $entry['2'],
				'phone' => $entry['3'],
				'email' => $entry['4'],
				'description' => $entry['8'],
				'file' => $entry['8'],
				'redirect' => $entry['source_url']
		);
	
		$response = wp_remote_post( $post_url, array(
				'method' => 'POST',
				'body' => $fields,
		)
		);
	}
	function after_submission_white_paper($entry,$form){
		$post_url = 'http://crm.vargosolutions.com/modules/Webforms/capture.php';
		$fields = array(
				'publicid' => $entry['6'],
				'name' => $entry['7'],
				'firstname' => $entry['1.3'],
				'lastname' => $entry['1.6'],
				'company' => $entry['2'],
				'phone' => $entry['3'],
				'email' => $entry['4'],
				'description' => $entry['8'],
				'file' => $entry['8'],
				'redirect' => $entry['source_url']
		);

		$response = wp_remote_post( $post_url, array(
				'method' => 'POST',
				'body' => $fields,
		)
		);
	}
}

$interruptor = new MSD_Download_Interruptor();