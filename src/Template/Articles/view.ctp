<!-- File: src/Template/Articles/view.ctp -->
<ul class="nav nav-pills">
        <li role="presentation" ><?= $this->Html->link('Home', ['controller'=> 'Pages', 'action' => 'index']) ?></li>
        <li role="presentation" class="active"><?= $this->Html->link('Articles', ['controller'=> 'Articles', 'action' => 'index']) ?></li>
        <?php if($user['username'] == 'admin2'):?>
        <li role="presentation" ><?= $this->Html->link('Add Article', ['controller'=> 'Articles', 'action' => 'add']) ?></li>
        <?php endif; ?>
 </ul>

<h1><?= h($article->title) ?></h1>
<p>

  <?= h($article->category->name) ?>
            
</p>
<p><?= h($article->body) ?></p>
<p><small>Created: <?= $article->created->format(DATE_RFC850) ?></small></p>
<p><?php if($user['username'] == 'admin2'):?>
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
<?php endif; ?>
</p>

<script>
    $(".confirm").confirm({
      text: "Are you sure you want to delete that comment?",
      title: "Confirmation required",
      confirm: function(button) {
          
      },
      cancel: function(button) {
          // nothing to do
      },
      confirmButton: "Yes I am",
      cancelButton: "No",
      post: true,
      confirmButtonClass: "btn-danger",
      cancelButtonClass: "btn-default",
      dialogClass: "modal-dialog modal-lg" // Bootstrap classes for large modal
  });
    </script>
