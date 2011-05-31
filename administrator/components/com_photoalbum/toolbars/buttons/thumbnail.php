<?php

class ComPhotoalbumToolbarButtonThumbnail extends KToolbarButtonPost
{

    public function __construct(KConfig $config)
    {
        $config->icon = 'icon-32-thumbnails';
        $config->text = 'Create Thumbnails';

        KFactory::get('lib.joomla.document')->addStyleDeclaration('.toolbar .icon-32-thumbnails { background-image: url('.JURI::root().'media/com_photoalbum/images/icons/thumbnails.png); }');

        parent::__construct($config);
    }

    public function getOnClick()
    {
        $option = KRequest::get('get.option', 'cmd');
        $view   = KRequest::get('get.view', 'cmd');
        $token  = JUtility::getToken();
        $json   = "{method:'post', url:'index.php?option=$option&view=$view&'+id, params:{action:'createthumbnails', _token:'$token'}}";

        $msg    = JText::_('Please select an item from the list');

        return 'var id = Koowa.Grid.getIdQuery();'
            .'if(id){new Koowa.Form('.$json.').submit();} '
            .'else { alert(\''.$msg.'\'); return false; }';
    }
}