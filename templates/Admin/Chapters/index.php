<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Chapter[]|\Cake\Collection\CollectionInterface $chapters
 */
?>
<div class="chapters index content">
    <?= $this->Html->link(__('New Chapter'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Chapters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('article_id') ?></th>
                    <th><?= $this->Paginator->sort('chap') ?></th>
                    <th><?= $this->Paginator->sort('contentimage') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($chapters as $chapter): ?>
                <tr>
                    <td><?= $this->Number->format($chapter->id) ?></td>
                    <td><?= $chapter->has('article') ? $this->Html->link($chapter->article->title, ['controller' => 'Articles', 'action' => 'view', $chapter->article->id]) : '' ?></td>
                    <td><?= h($chapter->chap) ?></td>
                    <td><?= h($chapter->contentimage) ?></td>
                    <td><?= h($chapter->created) ?></td>
                    <td><?= h($chapter->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $chapter->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chapter->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chapter->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chapter->id)]) ?>
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
