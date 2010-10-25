<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');

class EsempioModelEsempio extends JModel
{
	function getGreeting() 
	{
		return 'Hello World!';
	}
}
?>