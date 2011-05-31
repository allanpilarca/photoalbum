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

    // Need to improved this code.
    public function getRandomPhoto()
    {
        $photos = KFactory::tmp('site::com.photoalbum.model.photos')
            ->set('album', $this->id)
            ->sort('RAND()')
            ->limit(1)
            ->getList();

        $photo = new stdclass;
        foreach ($photos as $p) {
            $photo = $p;
        }

        return $photo;
    }
}
