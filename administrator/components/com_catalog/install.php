<?php

defined('_JEXEC') or die;

class com_catalogInstallerScript
{
	public function install($parent)
	{
		  echo JText::_('COM_CATALOG_INSTALL');
	}

	public function update($parent)
	{
		echo JText::_('COM_CATALOG_UPDATE');
	}

	public function uninstall($parent)
	{
		echo JText::_('COM_CATALOG_DELETE');
	}

	public function preflight($type, $parent)
	{
		echo JText::_('COM_CATALOG_PRE');
	}

	public function postflight($type, $parent)
	{
		echo JText::_('COM_CATALOG_POST');
	}

}