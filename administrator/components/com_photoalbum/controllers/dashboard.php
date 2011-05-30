<?php 

/**
* 
*/
class ComPhotoalbumControllerDashboard extends ComDefaultControllerView
{

    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'request' => array('layout' => 'default')
        ));
        
        parent::_initialize($config);
    }
}
