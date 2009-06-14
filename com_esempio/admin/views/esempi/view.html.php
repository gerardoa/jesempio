<?php
jimport('joomla.application.component.view');

class EsempiViewEsempi extends JView
{
	function display( $tpl = null )
	{
		JToolBarHelper::title( JText::_( 'Hello Esempio' ), 'generic.png' );
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();

		$items =& $this->get( 'Data' );
		$this->assignRef( 'items', $items );
		
		parent::display( $tpl );
		
	}
}
?>