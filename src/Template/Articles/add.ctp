<h1>Add Article</h1>

<?php echo $this->Form->create($article);?>

    <p><?= $this->Form->input('title', array('class' => 'form-control', 'placeholder' => 'Title article')); ?></p>

    <p><?= $this->Form->input('body', array('class' => 'form-control', 'placeholder' => 'Body article', 'style' => 'resize:none', 'rows' => '15')); ?></p>


   	<p><?=$this->Form->button("Save", array('class' => 'btn btn-success', 'escape' =>false))?></p>

<?php echo $this->Form->end();?>