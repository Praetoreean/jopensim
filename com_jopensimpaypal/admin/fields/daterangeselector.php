<?php
/*
 * @component jOpenSimPayPal
 * @copyright Copyright (C) 2017 FoTo50 https://www.jopensim.com/
 * @license GNU/GPL v2 http://www.gnu.org/licenses/gpl-2.0.html
 */
defined('_JEXEC') or die;
 
// import the list field type
jimport('joomla.form.helper');
JFormHelper::loadFieldClass('list');
 
class JFormFielddaterangeselector extends JFormFieldList {
	/**
	* The field type.
	*
	* @var         string
	*/
	protected $type = 'daterangeselector';


	/**
	* Method to get a list of options for a list input.
	*
	* @return      array           An array of JHtml options.
	*/
	public function getOptions() {
		$values = $this->getValues();
		$options = array();
		foreach($values as $value => $text) {
			$zaehler = count($options);
			$options[$zaehler] = new stdClass();
			$options[$zaehler]->value	= $value;
			$options[$zaehler]->text	= JText::_($text);
		}
		return $options;
	}

	public function getValues() {
		$value = array();
		$value[1]		= "COM_JOPENSIMPAYPAL_DATERANGE_1";
		$value[7]		= "COM_JOPENSIMPAYPAL_DATERANGE_7";
		$value[30]		= "COM_JOPENSIMPAYPAL_DATERANGE_30";
		$value[365]		= "COM_JOPENSIMPAYPAL_DATERANGE_365";
//		$value[999999]	= "COM_JOPENSIMPAYPAL_DATERANGE_all";
		return $value;
	}
}
?>