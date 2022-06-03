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
            <?= $this->Html->link(__('List Slides'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="slides form content">
            <?= $this->Form->create($slide, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Slide') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    // echo $this->Form->control('slideimage');
                    echo $this->Form->control('image', ['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
