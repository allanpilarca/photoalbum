<?php

/**
* 
*/
class ComPhotoalbumModelPhotos extends KModelTable
{
    
    public function __construct(KConfig $config)
    {
        parent::__construct($config);
        
        $this->_state
            ->insert('album', 'int');
    }

    protected function _buildQueryColumns(KDatabaseQuery $query)
    {
        parent::_buildQueryColumns($query);
        
        $query->select('albums.title AS album_title');
    }

    protected function _buildQueryJoins(KDatabaseQuery $query)
    {
        parent::_buildQueryJoins($query);
        
        $query->join('LEFT', 'photoalbum_albums AS albums', 'tbl.photoalbum_album_id=albums.photoalbum_album_id');
    }

    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        $state = $this->_state;

        if ($state->album) {
            $query->where('tbl.photoalbum_album_id', '=', $state->album);
        }

        return parent::_buildQueryWhere($query);
    }
}
