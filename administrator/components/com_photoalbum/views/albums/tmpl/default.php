<? defined('KOOWA') or die('Restricted access');?>

<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route()?>" method="get">
<table class="adminlist">
	<thead>
		<tr>
			<th width="5"><?= @text('Num'); ?></th>
			<th width="5"></th>
			<th>
				<?= @helper('grid.sort', array('column' => 'title')); ?>
			</th>
			<th width="100"><?= @helper('grid.sort', array('column' => 'enable')); ?>
            <th width="20"><?= @helper('grid.sort', array('column' => 'id')); ?></th>
		</tr>
		<tr>
			<td></td>
			<td><input type="checkbox" name="toggle" value="" onclick="checkAll(<?= count($albums); ?>);" /></td>
            <td></td>
			<td align="center"><?= @helper('admin::com.default.template.helper.listbox.enabled', array('name' => 'enabled', 'attribs' => array('onchange' => 'this.form.submit()'))); ?></td>
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
		<? foreach($albums as $album): ?>
		<tr class="row<?= $m; ?>">
			<td align="center">
				<?= $i + 1;?>
			</td>
			<td align="center">
				<?= @helper('grid.checkbox', array('row' => $album)); ?>
			</td>
			<td align="left">
				<span class="editLink hasTip" title="<?= @text('Edit Event');?>::<?= @escape($album->title);?>">
					<a href="<?= @route('view=album&id='.$album->id);?>">
						<?= @escape($album->title); ?>
					</a>
				</span>
			</td>
			<td align="center">
				<?= @helper('grid.enable', array('row' => $album)); ?>
			</td>
            <td align="center">
                <?= $album->id; ?>
            </td>
		</tr>
		<? $i = $i + 1; $m = (1 - $m);?>
		<? endforeach; ?>
	</tbody>
</table>
</form>


