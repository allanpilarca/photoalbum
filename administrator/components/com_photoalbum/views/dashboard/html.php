<?php 

/**
* 
*/
class ComPhotoalbumViewDashboardHtml extends ComPhotoalbumViewHtml
{
    
    public function display()
    {
        KRequest::set('get.hidemainmenu', 0);

        $this->getToolbar()->reset();

        return parent::display();
    }
}
