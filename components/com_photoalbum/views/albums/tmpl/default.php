<? defined('KOOWA') or die('Restricted access');?>

<style>
#photoalbum .box {
    float: left;
    padding: 10px;
    margin: 2px;
    border: 1px solid #ccc;
}
.albums .title {
    display: block;
}    

.albums img {
    padding: 3px;
    box-shadow: 0 0 5px #222;
}

.albums .image {
    display: block;
    text-align: center;
    margin-bottom: 10px;
}
</style>

<div id="photoalbum">

<h3><?= @text('Photo Albums'); ?></h3>

<? foreach ($albums as $album): ?>
    <? $link = @route('view=photos&album='.$album->id); ?>
    <? $photo = $album->getRandomPhoto(); ?>
    <? $photo_count = $album->countPhotos(); ?>
    <div class="albums box">
        <a href="<?= $link;?>" class="image">
            <img src="media://com_photoalbum/photos/<?= $photo->thumb_small; ?>" />
        </a>
        <a href="<?= $link;?>">
            <span class="title"><?= $album->title; ?></span>
            <small><?= $photo_count; ?> <?= @text('Photo'.($photo_count > 1 ? 's' : '')); ?></small>
        </a>
    </div>
<? endforeach; ?>

</div>

<div style="clear:both"></div>
