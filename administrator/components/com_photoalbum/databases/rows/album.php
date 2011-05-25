<?php 

/**
* 
*/
class ComPhotoalbumDatabaseRowAlbum extends KDatabaseRowDefault
{
    
    public function countPhotos()
    {
        return KFactory::tmp('site::com.photoalbum.model.photos')
			->set('album', $this->id)
			->limit(null)
			->getTotal();		
    }
}
