 <!-- Main jumbotron for a primary marketing message or call to action -->
<hr class="featurette-divider">
<?php $pos = 0 ?>
<?php foreach ($articles as $article): ?>
      <?php if($pos == 0): ?>
        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?><span class="text-muted"></span></h2>
            <p class="lead"><?= substr($article->body, 0, 5). '...'?></p>
            <p><?=$this->Html->link("View details", array('action' => 'view', $article->id), array('class' => 'btn btn-default', 'escape' =>false))?></p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="\musicblog\webroot\img\catalyst.png" alt="Generic placeholder image">
          </div>
        </div>
        <?php $pos = 1 ?>
      <?php else: ?>
        <div class="row featurette">
                  <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading"><?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?><span class="text-muted"></span></h2>
                    <p class="lead"><?= substr($article->body, 0, 5). '...'?></p>
                    <p><?=$this->Html->link("View details", array('action' => 'view', $article->id), array('class' => 'btn btn-default', 'escape' =>false))?></p>
                  </div>
                  <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive center-block" src="\musicblog\webroot\img\catalyst.png" alt="Generic placeholder image">
                  </div>
                </div>
                <?php $pos = 0 ?>
      <?php endif; ?>          
      <hr class="featurette-divider">
<?php endforeach; ?>