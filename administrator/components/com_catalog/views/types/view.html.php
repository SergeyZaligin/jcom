<?php

defined('_JEXEC') or die;

class CatalogViewTypes extends JViewLegacy {

    public function display($tpl = null) {
        $this->addToolBar();

        parent::display($tpl);
    }

    protected function addToolBar() {
        JToolbarHelper::title(JText::_('COM_CATALOG_MANAGER_TYPES_TITLE'));
        JToolbarHelper::addNew('type.add', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_ADD'));
        JToolbarHelper::editList('type.edit', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_EDIT'));
        
        JToolbarHelper::divider();
        
        JToolbarHelper::publish('types.publish', 
                JText::_('COM_CATALOG_MANAGER_TYPES_BTN_PUBLISH', TRUE));
        JToolbarHelper::unpublish('types.unpublish', 
                JText::_('COM_CATALOG_MANAGER_TYPES_BTN_UNPUBLISH', TRUE));
        
        JToolbarHelper::preferences('com_catalog');
    }

}
