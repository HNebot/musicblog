<!-- File: src/Template/Articles/view.ctp -->
<ul class="nav nav-pills">
        <li role="presentation" ><?= $this->Html->link('Home', ['controller'=> 'Pages', 'action' => 'index']) ?></li>
        <li role="presentation" class="active"><?= $this->Html->link('Articles', ['controller'=> 'Articles', 'action' => 'index']) ?></li>
        <li role="presentation" ><?= $this->Html->link('Add Article', ['controller'=> 'Articles', 'action' => 'add']) ?></li>
 </ul>

<h1><?= h($article->title) ?></h1>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p>
	<table>
		<tr>
			<td>
				<?=$this->Html->link("Edit article", array('action' => 'edit', $article->id), array('class' => 'btn btn-success', 'escape' =>false))?> &nbsp;&nbsp;
			</td>

			<td>
				<?= $this->Form->postLink( 'Delete article', ['action' => 'delete', $article->id], array('confirm' => 'Are you sure?','class' => 'btn btn-danger', 'escape' =>false))?>
			</td>
		</tr>
	</table>
</p>
