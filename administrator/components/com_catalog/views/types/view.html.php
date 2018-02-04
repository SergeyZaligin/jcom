<?php

defined('_JEXEC') or die;

class CatalogViewTypes extends JViewLegacy {

    public function display($tpl = null) {
        $this->addToolBar();
        $this->setDocument();

        parent::display($tpl);
    }

    protected function addToolBar() {
        JToolbarHelper::title(JText::_('COM_CATALOG_MANAGER_TYPES_TITLE'), 'wrench');
        JToolbarHelper::addNew('type.add', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_ADD'));
        JToolbarHelper::editList('type.edit', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_EDIT'));

        JToolbarHelper::divider();

        JToolbarHelper::publish('types.publish', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_PUBLISH', TRUE));
        JToolbarHelper::unpublish('types.unpublish', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_UNPUBLISH', TRUE));
        JToolbarHelper::deleteList(JText::_('COM_CATALOG_MANAGER_TYPES_BTN_PRE_DELETE'), 'types.delete', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_DELETE'));

//        JToolbarHelper::custom('type.create', 'cogs','', JText::_('COM_CATALOG_MANAGER_TYPES_BTN_CUSTOM', TRUE));
        
        JToolbarHelper::preferences('com_catalog');

        // Метод getInstance() возвращает обьект данного класса 
        // для работы с его методами
        //print_r(JUri::getInstance()->getVar('view'));
    }

    protected function setDocument() {
        // Возвращаем обьект класс JDocument
        $document = JFactory::getDocument();
        $document->addStyleSheet(JUri::root(TRUE) . '/media/com_catalog/css/style.css');
    }

}
