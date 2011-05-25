<?php

/**
* 
*/
class ComPhotoalbumDatabaseTablePhotos extends KDatabaseTableDefault
{
    
    public function _initialize(KConfig $config)
    {
        $config->name = 'photoalbum_photos';
        $config->base = 'photoalbum_photos';
        
        $config->behaviors = array('orderable');

        parent::_initialize($config);
    }
}
