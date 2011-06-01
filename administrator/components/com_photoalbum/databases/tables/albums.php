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
        
        $config->behaviors = array('orderable');

        $config->append(array(
            'filters' => array(
                'description' => array('html', 'tidy')
            ) 
        ));

        parent::_initialize($config);
    }
}
