<?php

/**
* 
*/
class ComPhotoalbumDatabaseTableAlbums extends KDatabaseTableDefault
{
    
    public function _initialize(KConfig $config)
    {
        $config->name = 'photoalbum_albums';
        $config->base = 'photoalbum_albums';
        
        $config->behaviours = array('orderable');

        parent::_initialize($config);
    }
}
