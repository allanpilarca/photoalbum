<?php

/**
* 
*/
class ComPhotoalbumViewHtml extends ComDefaultViewHtml
{
    
    public function __construct(KConfig $config)
    {
        $config->views = array(
            'dashboard' => JText::_('Dashboard'),
            'albums' => JText::_('Albums'),
            'photos' => JText::_('Photos')
        );

        parent::__construct($config);
    }
}
