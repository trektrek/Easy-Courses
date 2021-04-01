<div class="row">
	<div class="col-md-12" id="curso_details">
		<table class="table table-bordered table-striped">
			<tr>
				<th><a href="#">Ativo<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Curso Id<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Descricao<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Prox. Nivel<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Equiv1<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Equiv2<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Equiv3<i class="fas fa-caret-down"></i></a></th>
				<th><a href="#">Equiv4<i class="fas fa-caret-down"></i></a></th>
			</tr>
			<?php foreach($levels as $level) :?>
			<tr>
				<td><?= $level->active ?></td>
				<td><?= $level->course_id ?></td>
				<td><?= $level->description ?></td>
				<td><?= $level->next_level ?></td>
				<td><?= $level->equiv1 ?></td>
				<td><?= $level->equiv2 ?></td>
				<td><?= $level->equiv3 ?></td>
				<td><?= $level->equiv4 ?></td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>