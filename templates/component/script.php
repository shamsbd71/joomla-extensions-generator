<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ lowerCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */

defined('_JEXEC') or die('Restricted access');

/**
 * Class Com_{{ sentenceCase componentName }}InstallerScript
 *
 * @since  1.5
 */
class Com_{{ properCase componentName }}InstallerScript
{
	protected $extension = '{{ lowerCase componentName }}';

	/**
	 * Function executed before the the installation
	 *
	 * @param   string               $type    - the installation type
	 * @param   JInstallerComponent  $parent  - the parent class
	 */
	public function preflight($type, $parent)
	{
		$this->parent = $parent;
	}

	/**
	 * Update cleans out any old rules.
	 *
	 * @param   JInstallerComponent  $parent  Is the class calling this method.
	 *
	 * @return  bool|null  If this returns false, Joomla will abort the update and undo everything already done.
	 */
	public function update($parent)
	{
		$this->loadLanguage();
	}

	/**
	 * Load language necessary during the installation
	 *
	 * @return void
	 */
	public function loadLanguage()
	{
		$extension = $this->extension;
		$jlang = JFactory::getLanguage();
		$path = $this->parent->getParent()->getPath('source') . '/administrator';
		$jlang->load($extension, $path, 'en-GB', true);
		$jlang->load($extension, $path, $jlang->getDefault(), true);
		$jlang->load($extension, $path, null, true);
		$jlang->load($extension . '.sys', $path, 'en-GB', true);
		$jlang->load($extension . '.sys', $path, $jlang->getDefault(), true);
		$jlang->load($extension . '.sys', $path, null, true);
	}
}
