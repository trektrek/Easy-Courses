
<div class="row" >
	<div class="col-md-12" id="details">
		<div class="row">
			<?php foreach($level as $detail):?>
			<div class="col-md-1">
				<label for="nivel">Nivel</label>
			</div>
			<div class="col-md-1">
				<select name="nivel" id="nivel" class="form-control" disabled>
						<option value="<?= $detail['id_level'] ?>"><?= $detail['id_level'] ?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="name">Nome</label>
			</div>
			<div class="col-md-6">
				<input type="text" id="name" name="name" class="form-control" value="<?= $detail['description'] ?>">
			</div>
			<div class="col-md-1">
				<label for="ordem">Ordem</label>
			</div>
			<div class="col-md-2">
				<select name="" id="ordem" class="form-control">
					<option value="<?= $detail['order'] ?>"><?= $detail['order'] ?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="livro">Livro</label>
			</div>
			<div class="col-md-11">
				<input class="form-control" type="text" name='livro' value="<?= $detail['book']?>">
			</div>
			
			<div class="col-md-1">
				<label for="ativo">Ativo</label>
			</div>
			<div class="col-md-2">
				<select name="ativo" id="ativo" class="form-control">
					<option value="<?= $detail['active']?>"><?= ($detail['active']==1)? "Sim" :"Não" ?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="certificado">Certificado</label>
			</div>
			<div class="col-md-2">
				<select name="certificado" id="certificado" class="form-control">
					<option value="<?= $detail['certificate']?>"><?= ($detail['certificate']==1)? "Sim" : "Não"?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="cargahora">Carga/Hr</label>
			</div>
			<div class="col-md-2">
				<input type="text" id="cargahora" name="cargahora" value="<?= $detail['hour_load']?>" class="form-control">
			</div>
			<div class="col-md-1">
				<label for="iniciante">Iniciante</label>
			</div>
			<div class="col-md-2">
				<select name="iniciante" id="iniciane" class="form-control">
					<option value="<?= $detail['beginner'] ?>"><?= ($detail['beginner']==1)? "Sim" : "Não" ?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="idadeini">Idade Inic.</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="idadeini" id="idadeini" value="<?= $detail['min_age']?>" class="form-control">
			</div>
			<div class="col-md-1">
				<label for="idadefim">Idade final</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="idadefim" id="idadefim" value="<?= $detail['max_age'] ?>" class="form-control">
			</div>
			<div class="col-md-1">
				<label for="idade">Idade</label>
			</div>
			<div class="col-md-5">
				<input type="text" name="idade" id="idade" value="<?= $detail['age']?>" class="form-control" disabled>
			</div>
			<div class="col-md-1">
				<label for="faltareprova">Falta rep</label>
			</div>
			<div class="col-md-2">
				<select name="faltareprova" id="faltareprova" class="form-control">
					<option value="<?= $detail['abs_reprove']?>"><?= ($detail['abs_reprove']==1)? "Sim": "Não"?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="notareprova">Nota rep</label>
			</div>
			<div class="col-md-2">
				<select name="notareprova" id="notareprova" class="form-control">
					<option value="<?= $detail['note_reprove'] ?>"><?= ($detail['note_reprove']==1)?"Sim":"Não" ?></option>
				</select>
			</div>
			<div class="col-md-1">
				<label for="modalidade">Modalidade</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="modalidade" id="modalidade" value="<?= $detail['modality']?>" class="form-control">
			</div>
			<div class="col-md-1">
				<label for="curso">Curso</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="curso" id="curso" value="<?= $detail['course_id']?>" class="form-control" disabled>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
