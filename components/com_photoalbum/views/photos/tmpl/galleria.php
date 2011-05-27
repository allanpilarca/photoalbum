<? defined('KOOWA') or die('Restricted access');?>

<style>
    /* This rule is read by Galleria to define the gallery height: */
    #galleria{height:300px;width: 600px;}    
</style>

<!-- load jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js" />

<!-- load Galleria -->
<script src="media://com_photoalbum/galleria/galleria-1.2.3.min.js" />

<script>

// Load the classic theme
Galleria.loadTheme('media/com_photoalbum/galleria/themes/classic/galleria.classic.js');
//Galleria.loadTheme('media/com_photoalbum/galleria/themes/mytheme/galleria.mytheme.js');

// Initialize Galleria
jQuery.noConflict()(function() {
    jQuery('#galleria').galleria({
        lightbox: true
    });    
});


</script>

<div id="galleria">
    <? foreach ($photos as $photo): ?>
        <a href="media://com_photoalbum/photos/<?= $photo->filename;?>">
        	<img title="<?= $photo->title;?>" alt="<?= $photo->description;?>" src="media://com_photoalbum/photos/<?= $photo->thumb_small;?>" />
            <p>hello world</p>
    	</a>
    <? endforeach; ?>
</div>
