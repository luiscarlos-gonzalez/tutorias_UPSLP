		<div class="span2">
	    	<div class="well">
		    	<ul class="nav nav-list">
				  <li class="nav-header">Administración</li>
				  <li><a href="<?php echo base_url() ?>">Tutores</a></li>
				  <li class="active"><a href="<?php echo base_url() ?>index.php/upslp/alumnos">Alumnos</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/materias">Materias</a></li>
			 	</ul>
			</div>
	    </div>
	    <div class="span10">
	    	<div class="span5">
		    	<form class="form-horizontal" method="post" action="<?php echo base_url() ?>index.php/alumno/nuevo">
		    		<legend>Ingresa un nuevo alumno</legend>
		    		<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
		    		<div class="control-group">
			    		<label class="control-label" for="inputMatricula">Matrícula</label>
			    		<div class="controls">
					      	<input type="text" id="inputMatricula" name="matricula" placeholder="Matrícula">
					    </div>
					</div>
				    <div class="control-group">
			    		<label class="control-label" for="inputNombre">Nombre</label>
			    		<div class="controls">
					      	<input type="text" id="inputNombre" name="nombre" placeholder="Nombre">
					    </div>
				    </div>
				    <div class="control-group">
			    		<label class="control-label" for="inputCarrera">Carrera</label>
			    		<div class="controls">
					      	<input type="text" id="inputCarrera" name="carrera" placeholder="Carrera">
					    </div>
				    </div>
				    <div class="control-group">
			    		<label class="control-label" for="inputSemestre">Semestre</label>
			    		<div class="controls">
					      	<input type="text" id="inputSemestre" name="semestre" placeholder="Semestre">
					    </div>
				    </div>
				    <div class="control-group">
			    		<label class="control-label" for="inputGrupo">Grupo</label>
			    		<div class="controls">
					      	<input type="text" id="inputGrupo" name="grupo" placeholder="Grupo">
					    </div>
				    </div>
				    <div class="control-group">
			    		<label class="control-label" for="inputGrupo">Tutor</label>
			    		<div class="controls">
			    			<select name="matriculaTutor">
			    				<?php 
			    					foreach ($tutores as $tutor) {
			    						?>
			    						<option value="<?php echo $tutor->matricula ?>"><?php echo $tutor->nombre ?></option>
			    						<?php
			    					}
			    				?>
			    			</select>
					    </div>
				    </div>
				    <div class="control-group">
		    			<div class="controls">
		    				<button type="submit" class="btn">Registrar</button>
		    			</div>
				    </div>
	    		</form>
	    	</div>
	    	<div class="span7 well">
	    		<legend>Todos los alumnos</legend>
	    		<table class="table table-hover">
		    		<thead>
		    			<tr>
		    				<th>Matrícula</th>
		    				<th>Nombre</th>
		    				<th>Carrera</th>
		    				<th>Semestre</th>
		    				<th>Grupo</th>
		    				<th>Acciones</th>
		    			</tr>
	    			</thead>
	    			<tbody>
	    				<?php 
	    					foreach ($alumnos as $alumno) {
	    						?>
	    						<tr>
	    							<td><?php echo $alumno->matricula ?></td>
	    							<td><?php echo $alumno->nombre ?></td>
	    							<td><?php echo $alumno->carrera ?></td>
	    							<td><?php echo $alumno->semestre ?></td>
	    							<td><?php echo $alumno->grupo ?></td>
	    							<td>
	    								<a class="borrar_alumno btn btn-danger" style="margin: 5px;" href="<?php echo base_url() ?>index.php/alumno/eliminar/<?php echo $alumno->matricula ?>">Borrar</a>
	    								<a class="editar_alumno btn btn-info" style="margin: 5px;" href="<?php echo base_url() ?>index.php/alumno/editar/<?php echo $alumno->matricula ?>">Editar</a>
	    								<a class="btn btn-success" style="margin: 5px;" href="<?php echo base_url() ?>index.php/formatos/analisis_semetre_anterior/<?php echo $alumno->matricula ?>">Ver análisis del semestre anterior</a></td>
	    							</td>
	    						</tr>
	    						<?php
	    					}
	    				?>
	    			</tbody>
				</table>
	    	</div>