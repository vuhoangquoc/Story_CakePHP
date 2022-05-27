<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<!-- Hiển thị tên admin khi đăng nhập -->
<!-- <?= $username ?> -->

<div class="users index content container">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button btn btn-primary float-right']) ?>
    <h3 style="text-align:center"><?= __('Quản lý người dùng') ?></h3>



    <div class="col-lg-12 table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('username') ?></th>

                    <th scope="col"><?= $this->Paginator->sort('Quyền') ?></th>

                    <!-- <th scope="col"><?= $this->Paginator->sort('image') ?></th> -->

                    <th scope="col"><?= $this->Paginator->sort('date_created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('date_updated') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->username) ?></td>

                    <td>
                        <?php if($user->permission == 'admin'): ?>
                            <?= $this->Form->postLink(__('Admin'), ['action' => 'userPermission', $user->id, $user->permission], ['block' => true, 'confirm' => __('Hủy quyền Admin cho TK này # {0}?', $user->id)]) ?>
                        <?php else: ?>
                            <?= $this->Form->postLink(__('User'), ['action' => 'userPermission', $user->id, $user->permission], ['block' => true, 'confirm' => __('Cấp quyền Admin cho TK này # {0}?', $user->id)]) ?>
                        <?php endif; ?>
                    </td>

                    <!-- <td><?= @$this->Html->image($user->image) ?></td> -->

                    <td><?= h($user->date_created) ?></td>
                    <td><?= h($user->date_updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?= $this->Form->end() ?>
        <?= $this->fetch('postLink'); ?>
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
