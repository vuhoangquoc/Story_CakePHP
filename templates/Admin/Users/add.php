<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row container d-sm-flex justify-content-center">
    <!-- <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside> -->
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('email');
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    // ảnh
                    echo $this->Form->control('image_file',['type'=>'file']);
                    echo $this->Form->control('date_created');
                    echo $this->Form->control('date_updated');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class' => 'button btn btn-primary']) ?>
            <?= $this->Form->end() ?>
        </div>

    </div>
</div>
