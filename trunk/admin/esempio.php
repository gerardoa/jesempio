<?php
//Punto d'ingresso del componente lato admin

// no direct access
defined('_JEXEC') or die('Restricted access');

//Richiedo il controller
require_once( JPATH_COMPONENT.DS.'controller.php' );

//Nel caso ci fossero più controller
$classname = 'EsempiController';
$controller = new $classname();
//Eseguo il controller
$controller->execute($task);
//Effettuo il redirect se impostato
$controller->redirect();
?>