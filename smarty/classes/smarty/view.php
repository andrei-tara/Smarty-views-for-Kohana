
<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * Acts as an object wrapper for Smarty framework
 *
 * @package    Kohana
 * @category   Extension
 * @author    Tara Andrei
 * @copyright  (c) 2011 Tara Andrei
 */
class Smarty_View {

	/**
	 * Returns a new Smarty_View object. If you do not define the "file" parameter,
	 * you must call [Smarty_View::set_filename].
	 *
	 *     $Smarty_View = Smarty_View::factory($file);
	 *
	 * @param   string  Smarty_View filename
	 * @param   array   array of values
	 * @return  Smarty_View
	 */
	public static function factory($file = NULL, array $data = NULL) {
		return new Smarty_View($file, $data);
	}

	/**
	 * @var array($key=>$value)
	 */
	protected $_data = array();

	/**
	 * Sets the initial Smarty_View filename and local data. Smarty_Views should almost
	 * always only be created using [Smarty_View::factory].
	 *
	 *     $Smarty_View = new Smarty_View($file);
	 *
	 * @param   string  Smarty_View filename
	 * @param   array   array of values
	 * @return  void
	 * @uses    Smarty_View::set_filename
	 */
	public function __construct($file = NULL, array $data = NULL) {

		if ($file !== NULL) {
			$this->set_filename($file);
		}

		if ($data !== NULL) {
			// Add the values to the current data
			$this->_data = $data + $this->_data;
		}

		//Load Smarty class		
		require_once MODPATH . 'smarty' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'Smarty.class.php';
		
		$this->_smarty = new Smarty();
		$this->_smarty->template_dir = APPPATH . 'views';
		$this->_smarty->cache_dir = Kohana::$cache_dir . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR . 'cache';
		$this->_smarty->compile_dir = Kohana::$cache_dir . DIRECTORY_SEPARATOR . 'smarty' . DIRECTORY_SEPARATOR . 'compile';
	}

	/**
	 * Sets the Smarty_View filename.
	 *
	 *     $Smarty_View->set_filename($file);
	 *
	 * @param   string  Smarty_View filename
	 * @return  Smarty_View
	 * @throws  Smarty_View_Exception
	 */
	public function set_filename($file) {
		if (($path = Kohana::find_file('views', $file, 'tpl')) === FALSE) {
			throw new View_Exception('The requested Smarty_View :file could not be found', array(
                ':file' => $file,
			));
		}

		// Store the file path locally
		$this->_file = $path;

		return $this;
	}

	/**
	 * Assigns a variable by name. Assigned values will be available as a
	 * variable within the Smarty_View file:
	 *
	 *     // This value can be accessed as $foo within the Smarty_View
	 *     $Smarty_View->set('foo', 'my value');
	 *
	 * You can also use an array to set several values at once:
	 *
	 *     // Create the values $food and $beverage in the Smarty_View
	 *     $Smarty_View->set(array('food' => 'bread', 'beverage' => 'water'));
	 *
	 * @param   string   variable name or an array of variables
	 * @param   mixed    value
	 * @return  $this
	 */
	public function set($key, $value = NULL) {
		if (is_array($key)) {
			foreach ($key as $name => $value) {
				$this->_data[$name] = $value;
			}
		} else {
			$this->_data[$key] = $value;
		}

		return $this;
	}

	/**
	 *
	 * @var Smarty
	 */
	protected $_smarty;

	/**
	 * Renders the Smarty_View object to a string. Global and local data are merged
	 * and extracted to create local variables within the Smarty_View file.
	 *
	 *     $output = $Smarty_View->render();
	 *
	 * [!!] Global variables with the same key name as local variables will be
	 * overwritten by the local variable.
	 *
	 * @param    string  Smarty_View filename
	 * @return   string
	 * @throws   Smarty_View_Exception
	 * @uses     Smarty_View::capture
	 */
	public function render($file = NULL) {

		if ($file !== NULL) {
			$this->set_filename($file);
		}

		if (empty($this->_file)) {
			throw new Smarty_View_Exception('You must set the file to use within your Smarty_View before rendering');
		}


		foreach ($this->_data as $data_key => $data_value) {
			$this->_smarty->assign($data_key, $data_value);
		}


		return $this->_smarty->display($this->_file);
	}

	/**
	 * Magic method, returns the output of [View::render].
	 *
	 * @return  string
	 * @uses    View::render
	 */
	public function __toString() {
		try {
			return $this->render() . '';
		} catch (Exception $e) {
			// Display the exception message
			Kohana_Exception::handler($e);
		}
	}

}

// End Smarty_View
