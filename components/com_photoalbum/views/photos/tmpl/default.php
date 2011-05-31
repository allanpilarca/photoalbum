<? defined('KOOWA') or die('Restricted access');?>

<style>
#photoalbum .box {
    float: left;
    padding: 10px;
    margin: 5px;
    border: 1px solid #ccc;
}

#photoalbum .box img { padding: 5px; box-shadow: 0 0 5px #222;}

.photo-title, .photo-description {
    display: block;
}
.photo-title {
    font-weight: bold;
    padding: 3px 0;
    text-align: center;
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

<div id="photoalbum">

<h3><?= $album->title; ?></h3>

<? if ($album->description): ?>
<div class="description">
    <?= $album->description; ?>
</div>
<? endif; ?>

<? foreach ($photos as $photo): ?>
    <div class="box">
        <a href="media://com_photoalbum/photos/<?= $photo->filename; ?>" title="<?= $photo->title;?>" alt="<?= $photo->description; ?>">
            <img src="media://com_photoalbum/photos/<?= $photo->thumb_medium; ?>" />
        </a>
        <? if ($photo->title): ?>
        <span class="photo-title"><?= $photo->title; ?></span>
        <? endif; ?>
        <? if ($photo->description): ?>
        <span class="photo-description"></span>
        <? endif; ?>
    </div>
<? endforeach; ?>

</div>