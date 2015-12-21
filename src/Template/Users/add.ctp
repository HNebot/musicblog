<ul class="nav nav-pills">
        <li role="presentation" ><?= $this->Html->link('Home', ['controller'=> 'Pages', 'action' => 'index']) ?></li>
        <li role="presentation" ><?= $this->Html->link('Articles', ['controller'=> 'Articles', 'action' => 'index']) ?></li>
 </ul>

<div class="users form">
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->input('password') ?>
        <?php if($user['username'] == 'admin2'){			
         $this->Form->input('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]);} ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>