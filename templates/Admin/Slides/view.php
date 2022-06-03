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
            <?= $this->Html->link(__('Edit Slide'), ['action' => 'edit', $slide->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Slide'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Slides'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Slide'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="slides view content">
            <h3><?= h($slide->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($slide->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <!-- <td><?= h($slide->slideimage) ?></td> -->
                    <td><?= @$this->Html->image($slide->image, ['style' => 'max-width:50px;height:50px']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($slide->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
