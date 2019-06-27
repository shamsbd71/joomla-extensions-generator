<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ lowerCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */


defined('_JEXEC') or die('Restricted access');

use Joomla\Registry\Registry;


/**
 * class {{ sentenceCase componentName }}Rule
 *
 * Serves as a base class for all JED rules.
 *
 * @since  1.0
 */
class {{ sentenceCase componentName }}Model extends JObject
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
