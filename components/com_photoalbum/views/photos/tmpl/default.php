<? defined('KOOWA') or die('Restricted access');?>

<style>
#photoalbum .box {
    float: left;
    padding: 5px;
    margin: 2px;
    border: 1px solid #ccc;
}
</style>

<?= @helper('behavior.mootools'); ?>
<?= @helper('behavior.modal'); ?>

<div id="photoalbum">

<h3><?= $album->title; ?></h3>

<? foreach ($photos as $photo): ?>
    <? $filename = basename($photo->filename); ?>
    <? $base_path = dirname($photo->filename); ?>
    <? $thumb_large = $base_path.DS.'thumbs'.DS.'thumb_l_'.$filename; ?>
    <? $thumb_medium = $base_path.DS.'thumbs'.DS.'thumb_m_'.$filename; ?>
    <? $thumb_small = $base_path.DS.'thumbs'.DS.'thumb_s_'.$filename; ?>
    <div class="box">
        <?/*?><a href="media://com_photoalbum/photos/<?= $photo->filename;?>" class="modal"><?*/?>
            <a href="<?= @route('view=photos&album='.$album->id.'&layout=minimalistic&tmpl=component');?>" class="modal" rel="{handler: 'iframe', ajaxOptions: {method:'get'}}" >
            <img src="media://com_photoalbum/photos/<?= $thumb_medium; ?>">
        </a>
    </div>
<? endforeach; ?>

</div>