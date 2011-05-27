<? defined('KOOWA') or die('Restricted access');?>

<style>
#photoalbum .box {
    float: left;
    padding: 5px;
    margin: 2px;
    border: 1px solid #ccc;
}
</style>

<script src="media://com_photoalbum/lightbox/js/jquery.js" />
<script src="media://com_photoalbum/lightbox/js/jquery.lightbox-0.5.js" />
<style src="media://com_photoalbum/lightbox/css/jquery.lightbox-0.5.css" />
<script>
jQuery.noConflict()(function() {
    jQuery('.box a').lightBox({
        imageLoading: 'media://com_photoalbum/lightbox/images/lightbox-ico-loading.gif',
    	imageBtnClose: 'media://com_photoalbum/lightbox/images/lightbox-btn-close.gif',
    	imageBtnPrev: 'media://com_photoalbum/lightbox/images/lightbox-btn-prev.gif',
    	imageBtnNext: 'media://com_photoalbum/lightbox/images/lightbox-btn-next.gif',
    });
});    
</script>


<? /* ?>
<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>
<? */ ?>

<div id="photoalbum">

<h3><?= $album->title; ?></h3>

<? foreach ($photos as $photo): ?>
    <? $filename = basename($photo->filename); ?>
    <? $base_path = dirname($photo->filename); ?>
    <? $thumb_large = $base_path.DS.'thumbs'.DS.'thumb_l_'.$filename; ?>
    <? $thumb_medium = $base_path.DS.'thumbs'.DS.'thumb_m_'.$filename; ?>
    <? $thumb_small = $base_path.DS.'thumbs'.DS.'thumb_s_'.$filename; ?>
    <? /* ?>
    <div class="box">
            <a href="<?= @route('view=photos&album='.$album->id.'&layout=galleria&tmpl=component');?>" class="modal" rel="{handler: 'iframe', size: {y: 300}, ajaxOptions: {method:'get'}}" >
            <img src="media://com_photoalbum/photos/<?= $thumb_medium; ?>">
        </a>
    </div>
    <? */ ?>
    <div class="box">
            <a href="media://com_photoalbum/photos/<?= $photo->filename; ?>" >
            <img src="media://com_photoalbum/photos/<?= $thumb_medium; ?>" />
        </a>
    </div>
<? endforeach; ?>

</div>