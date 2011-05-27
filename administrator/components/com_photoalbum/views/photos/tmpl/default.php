<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route()?>" method="get">
<table class="adminlist">
	<thead>
		<tr>
			<th width="5"><?= @text('Num'); ?></th>
			<th width="5"></th>
            <th width="100"><?= @text('Thumbnail'); ?></th>
            <th><?= @helper('grid.sort', array('column' => 'title')); ?></th>
			<th><?= @text('filename'); ?></th>
            <th><?= @text('Category'); ?></th>
			<th width="80"><?= @helper('grid.sort', array('column' => 'enable')); ?>
            <th width="80"><?= @helper('grid.sort', array('column' => 'order')); ?></th>
            <th width="20"><?= @helper('grid.sort', array('column' => 'id')); ?></th>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count($photos); ?>);" /></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
			<td align="center"><?= @helper('admin::com.default.template.helper.listbox.enabled', array('name' => 'enabled', 'attribs' => array('onchange' => 'this.form.submit()'))); ?></td>
            <td></td>
            <td></td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="10">
				<?= @helper('paginator.pagination', array('total' => $total)); ?>
			</td>
		</tr>
	</tfoot>
	<tbody>
		<? $i = 0; $m = 0; ?>
		<? foreach($photos as $photo): ?>
		<tr class="row<?= $m; ?>">
			<td align="center">
				<?= $i + 1;?>
			</td>
			<td align="center">
				<?= @helper('grid.checkbox', array('row' => $photo)); ?>
			</td>
            <td align="center">
                <img src="media://com_photoalbum/photos/<?=$photo->thumb_small; ?>" title="<?= $photo->title;?>" alt="Thumbnail" />
            </td>
			<td align="left">
				<span class="editLink hasTip" title="<?= @text('Edit Event');?>::<?= @escape($photo->title);?>">
					<a href="<?= @route('view=photo&id='.$photo->id);?>">
						<?= @escape($photo->title); ?>
					</a>
				</span>
			</td>
            <td>
                <?= $photo->filename; ?>
            </td>
            <td>
                <?= $photo->album_title; ?>
            </td>
			<td align="center">
				<?= @helper('grid.enable', array('row' => $photo)); ?>
			</td>
			<td align="center">
				<?= @helper('grid.order', array('row' => $photo)); ?>
			</td>            
            <td align="center">
                <?= $photo->id; ?>
            </td>
		</tr>
		<? $i = $i + 1; $m = (1 - $m);?>
		<? endforeach; ?>
	</tbody>
</table>
</form>


