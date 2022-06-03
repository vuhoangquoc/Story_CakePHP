<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide $slide
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $slide->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Slides'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="slides form content">
            <?= $this->Form->create($slide, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Edit Slide') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    // echo $this->Form->control('slideimage');
                    echo $this->Form->control('change_image', ['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
