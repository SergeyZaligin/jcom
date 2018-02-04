<?php

defined('_JEXEC') or die;
/*
 * Точка входа
 */

function ninja($value = null, $value2 = null, $die = 1) {

    echo "Debug <br><pre>";
    echo print_r($value);
    echo "</pre>";

    if ($value2) {
        echo "Debug2 <br><pre>";
        echo print_r($value2);
        echo "</pre>";
    }

    if ($die) {
        die;
    }
}

/*
 * Базовый класс, получаем обьект контроллера
 */
$controller = JControllerLegacy::getInstance('Catalog');

/*
 * jFactory фабрика, getApplication()->nameObject получаем обьекты
 * глобального класса JApplication
 * JInput - позволяет работать с параметрами строки запросов
 */
$input = jFactory::getApplication()->input;

/**
 * Mетод execute выполняет задачу(задача это метод) один раз в точке входа.
 * Передаем задачу контроллеру из адресной строки, иначе если 
 * задача не передана, передается управление виду(display)
 */
$controller->execute($input->getCmd('task', 'display'));

//ninja($app);
