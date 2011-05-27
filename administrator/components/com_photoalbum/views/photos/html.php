<?php 

/**
* 
*/
class ComPhotoalbumViewPhotosHtml extends ComPhotoalbumViewHtml
{
    
    public function display()
    {
        KFactory::get('admin::com.photoalbum.toolbar.photos')
            ->append('createthumbnail');

        return parent::display();
    }
}
