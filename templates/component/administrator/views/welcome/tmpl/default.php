<?php
/**
 * @package     Joomla.Site
 * @subpackage  {{ lowerCase componentName }}
 *
 * @copyright   {{ copyright }}
 * @license     {{ licence }}
 */

defined('_JEXEC') or die('Restricted access');

JHtml::_('behavior.framework', true);
JHtml::stylesheet('media/com_{{ lowerCase componentName }}/css/style.min.css');
?>

<form action="<?php echo JRoute::_('index.php?option=com_{{ lowerCase componentName }}&view=welcome'); ?>"
	  method="post" class="needs-validation" name="adminForm" id="adminForm" enctype="multipart/form-data"
>
	<h2>Welcome</h2>

	<button onclick="add_validation(); Joomla.submitbutton('uploads.upload')" class="btn btn-success">
		<span class="icon-upload "></span> <?php echo JText::_('JSUBMIT'); ?>
	</button>

	<input type="hidden" name="task" value=""/>
	<?php echo JHtml::_('form.token'); ?>

</form>