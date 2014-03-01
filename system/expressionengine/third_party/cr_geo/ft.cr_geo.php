<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cr_geo_ft extends EE_Fieldtype {

	var $info = array(
		'name'      => 'Geo',
		'version'   => '0.1'
	);

	var $defaults = array(
		'lat'  => '',
		'lng'  => '',
		'zoom' => ''
	);


	/**
	 * Install Method
	 */
	function install()
	{
		return TRUE;
	}


	/**
	 * Global Settings Form
	 */
	function display_global_settings()
	{

	}


	/**
	 * Save Global Settings Method
	 */
	function save_global_settings()
	{

	}


	/**
	 * Settings Form
	 */
	function display_settings()
	{

	}


	/**
	 * Save Settings Method
	 */
	function save_settings()
	{

	}


	/**
	 * Render Field
	 */
	function display_field($data)
	{
		return form_input(array(
			'name' => $this->field_name,
			'id'   => $this->field_id,
			'ver'  => $this->version,
			'data' => $data
		));
	}


	/**
	 * Render Tag {field_name}
	 */
	function replace_tag($data, $params = array(), $tagdata = FALSE)
	{

	}

	/**
	 * Render Tag Modifier: Longitude {field_name:lng|long|longitude}
	 */
	function replace_lng($data, $params = array(), $tagdata = FALSE)
	{

	}
	// Alias: long -> lng
	function replace_long($d,$p=array(),$t=FALSE) { $this->replace_lng($d,$p,$t); }
	// Alias: longitude -> lng
	function replace_longitude($d,$p=array(),$t=FALSE) { $this->replace_lng($d,$p,$t); }


	/**
	 * Render Tag Modifier: Latitude {field_name:lat|latitude}
	 */
	function replace_lat($data, $params = array(), $tagdata = FALSE)
	{

	}
	// Alias: latitude -> lat
	function replace_latitude($d,$p=array(),$t=FALSE) { $this->replace_lat($d,$p,$t); }


	/**
	 * Uninstall Method
	 */
	// function uninstall() {}

}

// EOF