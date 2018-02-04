<?php

defined('_JEXEC') or die;

/**
 * class type
 */
class CatalogViewType extends JViewLegacy {
    
    protected $title;
    protected $form;


    public function display($tpl = null) {
        $this->form = $this->get('Form');//getForm
        //var_dump($this->form);
        
        $this->addToolBar();
        $this->setDocument();

        parent::display($tpl);
    }

    protected function addToolBar() {

        $isNew = ($this->item->id == 0);

        if ($isNew) {
            $this->title = JText::_('COM_CATALOG_ADD_TYPE_TITLE');
        } else {
            $this->title = JText::_('COM_CATALOG_EDIT_TYPE_TITLE');
        }

        JToolbarHelper::title($this->title, 'wrench');
        JToolbarHelper::apply('type.apply', JText::_('COM_CATALOG_APPLY_TYPE_TITLE'));
        JToolbarHelper::save('type.save', JText::_('COM_CATALOG_SAVE_TYPE_TITLE'));
        JToolbarHelper::cancel('type.cancel', JText::_('COM_CATALOG_CANCEL_TYPE_TITLE'));
    }

    protected function setDocument() {
        // Возвращаем обьект класс JDocument
        $document = JFactory::getDocument();
        $document->setTitle($this->title);
        $document->addStyleSheet(JUri::root(TRUE) . '/media/com_catalog/css/style.css');
    }

}
