<? defined('KOOWA') or die('Restricted access');?>

<style>
#photoalbum .box {
    float: left;
    padding: 5px;
    margin: 2px;
    border: 1px solid #ccc;
}
.albums .title {
    display: block;
    text-align: center;
}    
</style>

<div id="photoalbum">

<h3><?= @text('Photo Albums'); ?></h3>

<? foreach ($albums as $album): ?>
    <div class="albums box">
        <a href="<?= @route('view=photos&album='.$album->id); ?>">
        <img src="media://com_photoalbum/images/dashboard/icons/album.png" />
        <span class="title"><?= $album->title; ?>(<?= $album->countPhotos(); ?>)</span>
        </a>
    </div>
<? endforeach; ?>

</div>