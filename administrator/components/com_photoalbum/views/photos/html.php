<?php 

/**
* 
*/
class ComPhotoalbumViewPhotosHtml extends ComPhotoalbumViewHtml
{
    
    public function display()
    {
        KFactory::get('admin::com.photoalbum.toolbar.photos')
            ->append('enable')
            ->append('disable')
            ->append('thumbnail')
            ->append('config');

        return parent::display();
    }
}
