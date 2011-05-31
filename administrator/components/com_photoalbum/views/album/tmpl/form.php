<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route('id='.$album->id); ?>" method="post" name="adminForm" id="adminForm">

<div class="col width-70">
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
                <input type="text" name="title" id="title" size="50" value="<?= $album->title; ?>" />
            </td>
        </tr>
		<tr>
			<td class="key">
				<?= @text( 'Enabled' ); ?>:
			</td>
			<td>
				<?= @helper('select.booleanlist', array('name' => 'enabled', 'selected' => $album->enabled)); ?>
			</td>
		</tr>
		<tr>
			<td class="key">
				<label for="description">
					<?= @text( 'Description' ); ?>:
				</label>
			</td>
			<td>
				<?= @editor( array('name' => 'description', 'value' => $album->description, 'width' => '580', 'height' => '200', 'cols' => '100', 'rows' => '20', 'buttons' => null, 'options' => array('theme' => 'simple'))); ?>
			</td>
		</tr>    
	</table>
</fieldset>
</div>

<div class="col width-30">
    <fieldset class="adminform">
        <legend><?= @text('Thumbnail Settings'); ?></legend>
        <table class="admintable">
            <tr>
                <td class="key">
                    <label for="thumb_large_width">
                        <?= @text('Large image width'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_large_width" id="thumb_large_width" size="25" value="<?= $album->thumb_large_width; ?>" />
                </td>
            </tr>
            <tr>
                <td class="key">
                    <label for="thumb_large_height">
                        <?= @text('Large image height'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_large_height" id="thumb_large_height" size="25" value="<?= $album->thumb_large_height; ?>" />
                </td>
            </tr>
            <tr>
                <td class="key">
                    <label for="thumb_medium">
                        <?= @text('Medium image width'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_medium_width" id="thumb_medium_width" size="25" value="<?= $album->thumb_medium_width; ?>" />
                </td>
            </tr>
            <tr>
                <td class="key">
                    <label for="thumb_medium_height">
                        <?= @text('Medium image height'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_medium_height" id="thumb_medium_height" size="25" value="<?= $album->thumb_medium_height; ?>" />
                </td>
            </tr>
            <tr>
                <td class="key">
                    <label for="thumb_small_width">
                        <?= @text('Small image width'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_small_width" id="thumb_small_width" size="25" value="<?= $album->thumb_small_width; ?>" />
                </td>
            </tr>
            <tr>
                <td class="key">
                    <label for="thumb_small_height">
                        <?= @text('Small image height'); ?>
                    </label>
                </td>
                <td>
                    <input type="text" name="thumb_small_height" id="thumb_small_height" size="25" value="<?= $album->thumb_small_height; ?>" />
                </td>
            </tr>
    	</table>
    </fieldset>
</div>

</form>
