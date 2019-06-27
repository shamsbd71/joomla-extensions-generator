<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ properCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */

defined('_JEXEC') or die('Restricted access');

use Joomla\Registry\Registry;


/**
 * class {{ properCase componentName }}Rule
 *
 * Serves as a base class for all JED rules.
 *
 * @since  1.0
 */
class {{ properCase componentName }}{{ properCase componentName }} extends JObject
{
	/**
	 * Constructor. Initialises variables.
	 *
	 * @param   mixed  $properties  - See JObject::__construct
	 */
	public function __construct($properties = null)
	{
		// Construct JObject
		parent::__construct($properties);
	}
}
