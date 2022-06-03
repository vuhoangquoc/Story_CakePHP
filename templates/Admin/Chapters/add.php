<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 * @var \Cake\Collection\CollectionInterface|string[] $articles
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapters form content">
            <?= $this->Form->create($chapter, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Chapter') ?></legend>
                <?php
                    echo $this->Form->control('article_id', ['options' => $articles]);
                    echo $this->Form->control('chap');
                    // echo $this->Form->control('recap');
                    echo $this->Form->control('image', ['type'=>'file', 'multiple' => 'multiple']);
                    // echo $this->Form->control('image', [
                    //     'type' => 'file',
                    //     // 'label' => __('Choose PDF Files'),
                    //     // 'accept' => 'application/pdf',
                    //     'multiple' => 'multiple',
                    //     //'name' => 'documents[]',
                    // ]);
                    // echo $this->Form->input('Image.1.image', array('type' => 'file'));
                    // echo $this->Form->input('Image.2.image', array('type' => 'file'));                
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
