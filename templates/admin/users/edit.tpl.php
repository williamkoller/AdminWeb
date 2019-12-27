<h3 class="md-5">Editar usuário</h3>

<form method="post" action="/admin/users">
  <div class="form-group">
    <label for="usersEmail">Email</label>
    <input id="usersEmail" type="email" name="email" value="wkoller25@gmail.com" class="form-control">
  </div>
  <div class="form-group">
    <label for="usersPassword">Password</label>
    <input id="usersPassword" type="password" name="password" value="<h4>*****</h4>" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
</form>
<hr>
<a href="/admin/users/1" class="btn btn-secondary btn-sm">Voltar</a>