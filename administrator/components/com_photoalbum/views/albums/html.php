<?php 

/**
* 
*/
class ComPhotoalbumViewAlbumsHtml extends ComPhotoalbumViewHtml
{
    
    public function display()
    {
        $this->getToolbar()->append('config');

        return parent::display();
    }
}
