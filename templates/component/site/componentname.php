<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ properCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */


defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.controllerlegacy');

// if (!JFactory::getUser()->authorise('core.manage', 'com_{{ lowerCase componentName }}'))
// {
// 	throw new Exception(JText::_('JERROR_ALERTNOAUTHOR'));
// }


$input = JFactory::getApplication()->input;
$view = $input->getCmd('view', '');

if ($view == '' && $input->getCmd('task', '') == '')
{
	$input->set('view', 'welcome');
}

$controller = JControllerLegacy::getInstance('{{ properCase componentName }}');
$controller->execute($input->getCmd('task', ''));
$controller->redirect();