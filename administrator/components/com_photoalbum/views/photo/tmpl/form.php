<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='.$photo->id);?>" method="post" name="adminForm" id="adminForm">

<fieldset class="adminform">
    <legend><?= @text('Details'); ?></legend>
    <table class="admintable">
        <tr>
            <td class="key">
                <label for="title">
                    <?= @text('Title'); ?>
                </label>
            </td>
            <td>
                <input type="text" name="title" id="title" size="50" value="<?= $photo->title; ?>" />
            </td>
        </tr>
		<tr>
			<td class="key">
				<label for="album">
					<?= @text('Album'); ?>
				</label>
			</td>
			<td>
				<?= @helper('admin::com.photoalbum.template.helper.listbox.albums', array('name' => 'photoalbum_album_id', 'selected' => $photo->photoalbum_album_id)); ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<?= @text('Enabled'); ?>:
			</td>
			<td>
				<?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $photo->enabled)); ?>
			</td>
		</tr>
        <tr>
            <td class="key">
                <label for="filename">
                    <?= @text('Filename'); ?>
                </label>
            </td>
            <td>
                <input type="text" name="filename" id="filename" size="50" value="<?= $photo->filename; ?>" />
            </td>
        </tr>
		<tr>
			<td class="key">
				<label for="description">
					<?= @text( 'Description' ); ?>:
				</label>
			</td>
			<td>
				<?= @editor( array('name' => 'description', 'value' => $photo->description, 'width' => '580', 'height' => '200', 'cols' => '100', 'rows' => '20', 'buttons' => null, 'options' => array('theme' => 'simple'))); ?>
			</td>
		</tr>    
    </table>
</fieldset>

</form>