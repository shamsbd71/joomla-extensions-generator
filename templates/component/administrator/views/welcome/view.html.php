<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ lowerCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */


defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.viewlegacy');

/**
 * Class {{ sentenceCase componentName }}ViewUploads
 *
 * @since  1.0
 */
class {{ sentenceCase componentName }}ViewWelcome extends JViewLegacy
{
	/**
	 * Display method
	 *
	 * @param   string  $tpl  - the template
	 *
	 * @return mixed|void
	 */
	public function display($tpl = null)
	{
		$this->path         = JFactory::getConfig()->get('tmp_path') . '/{{ lowerCase componentName }}';

		$this->setToolbar();
		parent::display($tpl);
	}

	/**
	 * Creates the toolbar options
	 *
	 * @return void
	 */
	public function setToolbar()
	{
		JToolbarHelper::title('JED checker');
		
		if (JFactory::getUser()->authorise('core.admin', 'com_{{ lowerCase componentName }}'))
		{
			JToolbarHelper::preferences('com_{{ lowerCase componentName }}');
		}
	}
}
