


<div class="container users index content" style="width:350px">
    <?= $this->Form->create(); ?>
    <h3 class="text-center text-info">Login</h3>
    <div class="form-group">
        <?= $this->Form->control('username', ['label' => false, 'class' => 'form-control']); ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('password', ['label' => false, 'class' => 'form-control']); ?></p>
    </div>
    <div class="form-group">
        <?= $this->Form->button('Login', ['class' => 'btn btn-success form-control']); ?>
    </div>
    <?= $this->Form->end(); ?>
</div>