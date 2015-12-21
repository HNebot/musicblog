
    <ul class="nav nav-pills">
        <li role="presentation" ><?= $this->Html->link('Home', ['controller'=> 'Pages', 'action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('Add Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li role="presentation" ><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
        <li role="presentation"><?= $this->Html->link(__('List Parent Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li role="presentation" class="active"><?= $this->Html->link(__('New Parent Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
    </ul>
<div class="">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
            echo $this->Form->input('parent_id', [ 'class' => 'form-control','options' => $parentCategories, 'empty' => 'No parent category']);
            echo $this->Form->input('name',array('class' => 'form-control', 'placeholder' => 'Name category'));
            echo $this->Form->input('description', array('class' => 'form-control', 'placeholder' => 'Description', 'style' => 'resize:none', 'rows' => '5'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
