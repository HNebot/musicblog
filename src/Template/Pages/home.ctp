
  <ul class="nav nav-pills">
        <li role="presentation" class="active"><?= $this->Html->link('Home', ['action' => '']) ?></li>
        <li role="presentation" ><?= $this->Html->link('Articles', ['controller'=> 'Articles', 'action' => 'index']) ?></li>
        <li role="presentation" ><?= $this->Html->link('Add Article', ['controller'=> 'Articles', 'action' => 'add']) ?></li>
    </ul> 