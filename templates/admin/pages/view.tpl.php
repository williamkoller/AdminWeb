<h3 class="md-5">Detalhes da página</h3>

<div class="row">
    <div class="col-3">
        <dl class="row">
            <dt class="col-sm-4">Título</dt>
            <dd class="col-sm-8"><?php echo $data['page']['title'];?></dd>

            <dt class="col-sm-4">URL</dt>
            <dd class="col-sm-8">/<?php echo $data['page']['url'];?> - <a href="/<?php echo $data['page']['url'];?>" target="_blank">Abrir</a> </dd>

            <dt class="col-sm-4">Criado em</dt>
            <dd class="col-sm-8"><?php echo $data['page']['created'];?></dd>

            <dt class="col-sm-4">Atualizado em </dt>
            <dd class="col-sm-8"><?php echo $data['page']['updated'];?></dd>
        </dl>
    </div>
    <div class="col bg-light">
        <?php echo $data['page']['body'];?>
    </div>
</div>

<p>
    <a href="/admin/pages/<?php echo $data['page']['id'];?>/edit" class="btn btn-primary btn-sm">Editar</a>
    <a href="/admin/pages/<?php echo $data['page']['id'];?>/delete" class="btn btn-danger btn-sm confirm">Remover</a>
</p>

<a href="/admin/pages" class="btn btn-secondary btn-sm">Voltar</a>
