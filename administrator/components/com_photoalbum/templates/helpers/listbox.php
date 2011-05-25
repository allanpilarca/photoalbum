<?php

/**
* 
*/
class ComPhotoalbumTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{

	public function albums($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model' 	=> 'albums',
			'name' 		=> 'photoalbum_album_id',
			'value'		=> 'id',
			'text'		=> 'title'
		));

		return parent::_listbox($config);
	}
}
