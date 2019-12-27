<h3 class="md-5">Editar usuário</h3>

<form method="post">
  <div class="form-group">
    <label for="usersEmail">Email</label>
    <input id="usersEmail" type="email" name="email" value="<?php echo $data['user']['email'];?>" class="form-control">
  </div>
  <div class="form-group">
    <label for="usersPassword">Password</label>
    <input id="usersPassword" type="password" name="password" value="" placeholder="Informe sua senha aqui ..." class="form-control">
  </div>

  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
</form>
<hr>
<a href="/admin/users/1" class="btn btn-secondary btn-sm">Voltar</a>