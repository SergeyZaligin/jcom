<?php
defined('_JEXEC') or die;
?>

<form 
    action="<?php echo JRoute::_('index.php?option=com_catalog&view=types'); ?>" 
    method="POST" 
    name="adminForm"
    id="adminForm">
    <input type="hidden" name="task" value="0">
    <input type="hidden" name="boxchecked" value="0">
    
    <?php echo JHtml::_('form.token'); ?>
</form>