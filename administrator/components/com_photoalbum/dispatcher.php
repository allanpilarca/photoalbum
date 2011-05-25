<?php

/**
* 
*/
class ComPhotoalbumDispatcher extends ComDefaultDispatcher
{
    
    protected function _initialize(KConfig $config)
    {
		$config->append(array(
			'controller_default' => 'albums'
		));

        parent::_initialize($config);
    }
}
