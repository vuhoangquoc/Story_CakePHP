<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter $chapter
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Chapter'), ['action' => 'edit', $chapter->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Chapter'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Chapters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Chapter'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="chapters view content">
            <h3><?= h($chapter->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Article') ?></th>
                    <td><?= $chapter->has('article') ? $this->Html->link($chapter->article->title, ['controller' => 'Articles', 'action' => 'view', $chapter->article->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Chap') ?></th>
                    <td><?= h($chapter->chap) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <!-- <td><?= h($chapter->image) ?></td> -->
                    <td><?= @$this->Html->image($chapter->image, ['style' => 'max-width:50px;height:50px']) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($chapter->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($chapter->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($chapter->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Recap') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($chapter->recap)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
