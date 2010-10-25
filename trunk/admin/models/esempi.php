<?php
// no direct access
defined('_JEXEC') or die('Restricted access');
jimport('joomla.application.component.model');

class EsempiModelEsempi extends JModel
{
	var $_data;
	
	function _buildQuery() 
	{
		$query = ' SELECT * ' . ' FROM #__hello ';
		return $query;
		
	}
	
	/**
	 * Retrieves the hello data
 	* @return array Array of objects containing the data from the database
 	*/
	function getData()
	{
	    // Lets load the data if it doesn't already exist
	    if (empty( $this->_data ))
	    {
	        $query = $this->_buildQuery();
	        $this->_data = $this->_getList( $query );
	    }
	    return $this->_data;
	}	
}
?>