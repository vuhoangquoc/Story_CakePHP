<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 * @var string[]|\Cake\Collection\CollectionInterface $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chapter->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapters form content">
            <?= $this->Form->create($chapter) ?>
            <fieldset>
                <legend><?= __('Edit Chapter') ?></legend>
                <?php
                    echo $this->Form->control('article_id', ['options' => $articles]);
                    echo $this->Form->control('chap');
                    echo $this->Form->control('recap');
                    echo $this->Form->control('contentimage');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>