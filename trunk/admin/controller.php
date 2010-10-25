<?php
jimport('joomla.application.component.controller');

class EsempiController extends JController
{
	function __construct()
	{
		parent::__construct();
		$this->registerTask( 'add', 'edit' );
	}
	
	function edit() 
	{
		JRequest::setVar( 'view', 'hello' );
		JRequest::setVar( 'layout', 'form' );
    	JRequest::setVar( 'hidemainmenu', 1 );	
    	
    	parent::display();    	
	}
	function display()
	{
		parent::display();
	}
}
?>