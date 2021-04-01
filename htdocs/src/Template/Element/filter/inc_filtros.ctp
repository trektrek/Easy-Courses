<form action="/levels/filter" id="filter" method="get">
	<div class="row" id="filtros">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-2">
					<label for="curso">Selecione o curso</label>
				</div>
				<div class="col-md-3">
					<select name="id" id="curso" class="form-control">
						<?php $id=$this->request->getQuery('id')?>
						<?php foreach($courses as $course):?>
						<option value="<?= $course['id_course']?>" <?= ($course->id_course==$id)? 'selected' : '' ?>> <?= $course->name?> </option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="col-md-1">
					<div class="col-md-2">
						<label for="lv">Level</label>
					</div>
				</div>
				<div class="col-md-2">
					<select name="lv" id="lv" class="form-control">
						<?php $lv=$this->request->getQuery('lv')?>
						<?php foreach($levels as $level):?>
						<option value="<?= $level->id_level?>" <?= ($level->id_level==$lv)? 'selected' : '' ?>><?= $level->id_level?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary form-control btn-sm">Filtrar Níveis</button>
				</div>
				<div class="col-md-2 text-right">
					<label for="filter_curse">Filtrar Curso</label>
					<input type="checkbox" value="0" id="filter_curse">
				</div>
			</div>
		</div>
		
	</div>
</form>