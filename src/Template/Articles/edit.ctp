<ul class="nav nav-pills">
        <li role="presentation" ><?= $this->Html->link('Home', ['controller'=> 'Pages', 'action' => 'index']) ?></li>
        <li role="presentation" ><?= $this->Html->link('Articles', ['controller'=> 'Articles', 'action' => 'index']) ?></li>
         <?php if($user['username'] == 'admin2'):?>
        <li role="presentation" ><?= $this->Html->link('Add Article', ['controller'=> 'Articles', 'action' => 'add']) ?></li>
        <?php endif; ?>
 </ul>


<h1>Add Article</h1>

<?php echo $this->Form->create($article);?>

    <p><?= $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title article')); ?></p>

    <p><?= $this->Form->input('body', array('class' => 'form-control', 'placeholder' => 'Body article', 'style' => 'resize:none', 'rows' => '15')); ?></p>


   	<p><?=$this->Form->button("Save", array('class' => 'btn btn-success', 'escape' =>false))?></p>

<?php echo $this->Form->end();?>