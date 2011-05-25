<?php 

/**
* 
*/
class ComPhotoalbumViewPhotosHtml extends ComPhotoalbumViewHtml
{
    
    public function display()
    {
        $album = KFactory::get('admin::com.photoalbum.model.albums')->id(KRequest::get('get.album', 'int'))->getItem();

        $this->assign('album', $album);

        return parent::display();
    }
}
