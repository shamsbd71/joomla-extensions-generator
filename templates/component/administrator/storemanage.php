<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ lowerCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */


defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controllerlegacy');

if (!JFactory::getUser()->authorise('core.manage', 'com_{{ lowerCase componentName }}'))
{
	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
}

// We'll need jfile and JFolder all through the compoenent so let us load them here
jimport('joomla.filesystem.folder');
jimport('joomla.filesystem.file');

$input = JFactory::getApplication()->input;
$view = $input->getCmd('view', '');

if ($view == '' && $input->getCmd('task', '') == '')
{
	$input->set('view', 'welcome');
}

$controller = JControllerLegacy::getInstance('{{ lowerCase componentName }}');
$controller->execute($input->getCmd('task', ''));
$controller->redirect();
