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

        $config->append(array(
            'filters' => array(
                'description' => array('html', 'tidy')
            ) 
        ));

        parent::_initialize($config);
    }
}
