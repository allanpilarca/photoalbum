<?php

class ComPhotoalbumToolbarButtonConfig extends KToolbarButtonDefault
{

	public function __construct(KConfig $config)
	{
        $config->append(array(
            'text' => 'Configuration'
        ));

		parent::__construct($config);
	}

	public function getLink()
	{
        return 'index.php?option=com_config&controller=component&component=com_'.$this->_identifier->package;
	}

	public function render()
	{
		JHTML::_('behavior.modal');

		$text	= JText::_($this->_options->text);

		$link   = $this->getLink();
		$href   = !empty($link) ? 'href="'.JRoute::_($link).'"' : '';

		$onclick =  $this->getOnClick();
		$onclick = !empty($onclick) ? 'onclick="'. $onclick.'"' : '';

		$html 	= array ();
		$html[]	= '<td class="button" id="'.$this->getId().'">';
		$html[]	= '<a '.$href.' '.$onclick.' class="toolbar modal" rel="{handler: \'iframe\', size: {x: 640, y: 480}}">';

		$html[]	= '<span class="'.$this->getClass().'" title="'.$text.'">';
		$html[]	= '</span>';
		$html[]	= $text;
		$html[]	= '</a>';
		$html[]	= '</td>';

		return implode(PHP_EOL, $html);
	}
}