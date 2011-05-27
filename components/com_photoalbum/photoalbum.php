<?php

// Check if Koowa is active
if(!defined('KOOWA')) {
    JError::raiseWarning(0, JText::_("Koowa wasn't found. Please install the Koowa plugin and enable it."));
    return;
}

KFactory::map('site::com.photoalbum.model.albums', 'admin::com.photoalbum.model.albums');
KFactory::map('site::com.photoalbum.model.photos', 'admin::com.photoalbum.model.photos');

KFactory::map('site::com.photoalbum.database.row.photo', 'admin::com.photoalbum.database.row.photo');

// Create the controller dispatcher
echo KFactory::get('site::com.photoalbum.dispatcher')->dispatch();
