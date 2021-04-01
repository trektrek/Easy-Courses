<?php
$id=$this->request->getQuery('id');
$lv=$this->request->getQuery('lv');
?>
<div class="row">
	<div class="col-md-12" id="header">
		<div class="row">
			<div class="col-md-6 text-left">
				Níveis de Curso
			</div>
			<div class="col-md-6 text-right">
				<a href="/courses">
					X
				</a>
			</div>
		</div>
	</div>
	<div class="col-md-12" id="header2">
		<div class="row">
			<ul id="navegacao1">
				<li>
					<a href="/levels/filter/<?= ($id!='')? '?id='.$id : "" ?>">
						<i class="fas fa-arrow-alt-to-left"></i>
					</a>
				</li>
				<li>
					<a href="/levels/filter/<?= ($id!='')? '?id='.$id : "" ?>">
						<i class="fas fa-arrow-alt-left"></i>
					</a>
				</li>
				<li>
					<a href="/levels/filter/<?= ($id!='')? '?id='.$id : "" ?>">
						<i class="fas fa-arrow-alt-right"></i>
					</a>
				</li>
				<li>
					<a href="/levels/filter/<?= ($id!='')? '?id='.$id : "" ?>">
						<i class="fas fa-arrow-alt-to-right"></i>
					</a>
				</li>
			</ul>
			<ul id="navegacao2">
				<li>
					<a href="/courses/add">
						<i class="far fa-file-plus"></i><br>
						Incluir
					</a>
				</li>
				<li>
					<?php $id=$this->request->getQuery('id');?>
					<a href="/courses/edit/<?= $id ?>" >
						<i class="far fa-edit"></i><br>
						Alterar
					</a>
				</li>
				<li>
					<a href="#">
						<i class="far fa-save"></i><br>
						Salvar
					</a>
				</li>
			</ul>
			<ul id="navegacao3">
				<li>
					<a href="#">
						<i class="far fa-align-slash"></i><br>
						Cancelar
					</a>
				</li>
				<li>
					<a href="#">
						<i class="far fa-trash-alt"></i><br>
						Excluir
					</a>
				</li>
			</ul>
			<ul id="navegacao4">
				<li>
					<a href="/">
						<i class="fas fa-sign-out-alt"></i><br>
						Sair
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>