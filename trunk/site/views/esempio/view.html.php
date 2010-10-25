<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.view');

class EsempioViewEsempio extends JView
{
	function display( $tpl = null )
	{
		$model =& $this->getModel();
		$greeting = $model->getGreeting();
		$this->assignRef( 'greeting', $greeting );
		
		parent::display( $tpl );
	}
}
?>