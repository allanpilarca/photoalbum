<?php 

/**
* 
*/
class ComPhotoalbumDatabaseRowPhoto extends KDatabaseRowDefault
{
    
    public function __get($column)
	{

        if ($column == 'thumb_small' OR $column == 'thumb_medium' OR $column == 'thumb_large') {
            $filename = basename($this->_data['filename']);
            $base_path = dirname($this->_data['filename']);
            $thumb_small = $base_path.DS.'thumbs'.DS.'small_'.$filename;
            $thumb_medium = $base_path.DS.'thumbs'.DS.'medium_'.$filename;
            $thumb_large = $base_path.DS.'thumbs'.DS.'large_'.$filename;
        }

		if ($column == 'thumb_small') {
			$this->_data['thumb_small'] = $thumb_small;
		}
		
		if ($column == 'thumb_medium') {
			$this->_data['thumb_medium'] = $thumb_medium;
		}

        if ($column == 'thumb_large') {
			$this->_data['thumb_large'] = $thumb_large;
		}		

		return parent::__get($column);
	}
}
