<h3 class="md-5">Detalhes dos usuários</h3>

<dl class="row">
  <dt class="col-sm-3">Email</dt>
  <dd class="col-sm-9"><?php echo $data['user']['email']; ?></dd>
  
  <dt class="col-sm-3">Criando em</dt>
  <dd class="col-sm-9"><?php echo $data['user']['created']; ?></dd>

  <dt class="col-sm-3">Atualizado em</dt>
  <dd class="col-sm-9"><?php echo $data['user']['updated']; ?></dd>
</dl>

<p>
  <a href="/admin/users/<?php echo $data['user']['id']; ?>/edit" class="btn btn-primary btn-sm">Editar</a>
  <a href="/admin/users/<?php echo $data['user']['id']; ?>/delete" class="btn btn-danger btn-sm confirm">Remover</a>

</p>
<a href="/admin/users" class="btn btn-secondary btn-sm">Voltar</a>