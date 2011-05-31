<?php 

/**
* 
*/
class ComPhotoalbumControllerPhoto extends ComDefaultControllerDefault
{
    
    protected function _actionCreatethumbnails(KCommandContext $context)
    {
        jimport('joomla.filesystem.file');
        jimport('joomla.filesystem.folder');

        $ids = KRequest::get('get.id', 'int');
        $images = KFactory::get('admin::com.photoalbum.model.photos')->set('id', $ids)->getList();

        foreach ($images as $image) {
            $path = JPATH_ROOT.DS.'media/com_photoalbum/photos/';
            $filename = $path.$image->filename;
            $thumb_small = $path.$image->thumb_small;
            $thumb_medium = $path.$image->thumb_medium;
            $thumb_large = $path.$image->thumb_large;

            $directory = dirname($thumb_small);
            
            if (!JFolder::exists($directory)) {
                JFolder::create($directory);
            }

            // Small thumbnail
            if (!ComPhotoalbumHelperPhoto::createThumbnail($filename, $thumb_small, 50, 50)) {

            }

            // Medium thumbnail 
            if (!ComPhotoalbumHelperPhoto::createThumbnail($filename, $thumb_medium, 100, 100)) {
                
            }
            // Large thumbnail
            if (!ComPhotoalbumHelperPhoto::createThumbnail($filename, $thumb_large, 640, 480, false)) {
                
            }
        }
    }

}
