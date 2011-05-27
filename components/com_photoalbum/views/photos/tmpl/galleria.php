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
        <? $filename = basename($photo->filename); ?>
        <? $base_path = dirname($photo->filename); ?>
        <? $thumb_large = $base_path.DS.'thumbs'.DS.'thumb_l_'.$filename; ?>
        <? $thumb_medium = $base_path.DS.'thumbs'.DS.'thumb_m_'.$filename; ?>
        <? $thumb_small = $base_path.DS.'thumbs'.DS.'thumb_s_'.$filename; ?>

        <a href="media://com_photoalbum/photos/<?= $photo->filename;?>">
        	<img title="<?= $photo->title;?>" alt="Tortor tristique sit aliquet mid tincidunt turpis! Integer a magnis odio scelerisque et! Phasellus? Hac tristique in augue nec, mid lacus! Vel massa eu porttitor magna pid integer nisi. Integer. Parturient tincidunt quis tincidunt et! Montes elementum, urna porta. Amet! Enim lacus. Scelerisque mattis dapibus! Est sit ac ac eros amet? Diam amet, adipiscing placerat ac duis tincidunt auctor eu. <?= $photo->description;?>" src="media://com_photoalbum/photos/<?= $thumb_small;?>" />
            <p>hello world</p>
    	</a>
    <? endforeach; ?>
</div>
