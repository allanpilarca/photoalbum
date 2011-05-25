<?php

/**
* 
*/
class ComPhotoalbumViewHtml extends ComDefaultViewHtml
{
    
    public function __construct(KConfig $config)
    {
        $config->views = array(
            'albums' => JText::_('Albums'),
            'photos' => JText::_('Photos')
        );

        parent::__construct($config);
    }
}
