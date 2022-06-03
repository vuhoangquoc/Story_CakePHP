<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Slide[]|\Cake\Collection\CollectionInterface $slides
 */
?>
<div class="slides index content">
    <?= $this->Html->link(__('New Slide'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Slides') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('Image') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($slides as $slide): ?>
                <tr>
                    <td><?= $this->Number->format($slide->id) ?></td>
                    <td><?= h($slide->title) ?></td>
                    <!-- <td><?= h($slide->image) ?></td> -->
                    <td style="width:50px"><?= @$this->Html->image($slide->image) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $slide->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slide->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slide->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slide->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
