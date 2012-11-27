
	    <div class="span2">
	    	<div class="well">
		    	<ul class="nav nav-list">
				  <li class="nav-header">Administración</li>
				  <li><a href="<?php echo base_url() ?>">Tutores</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/alumnos">Alumnos</a></li>
				  <li class="active"><a href="<?php echo base_url() ?>index.php/upslp/materias">Materias</a></li>
			 	</ul>
			</div>
	    </div>
	    <div class="span10">
	    	<div class="span5">
		    	<form class="form-horizontal"  method="post" action="<?php echo base_url() ?>index.php/materia/nuevo">
		    		<legend>Ingresa un nuevo alumno</legend>
		    		<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
		    		<div class="control-group">
			    		<label class="control-label" for="inputClave">Clave</label>
			    		<div class="controls">
					      	<input type="text" name="clave" id="inputClave" placeholder="Clave">
					    </div>
					</div>
				    <div class="control-group">
			    		<label class="control-label" for="inputNombre">Nombre</label>
			    		<div class="controls">
					      	<input type="text" name="nombre" id="inputNombre" placeholder="Nombre">
					    </div>
				    </div>
				    <div class="control-group">
			    		<label class="control-label" for="inputSemestre">Semestre</label>
			    		<div class="controls">
					      	<input type="text" name="semestre" id="inputSemestre" placeholder="Semestre">
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
		    				<th>Clave</th>
		    				<th>Nombre</th>
		    				<th>Semestre</th>
		    				<th>Acciones</th>
		    			</tr>
	    			</thead>
	    			<tbody>
	    				<?php 
	    					foreach ($materias as $materia) {
	    						?>
	    						<tr>
	    							<td><?php echo $materia->clave ?></td>
	    							<td><?php echo $materia->nombre ?></td>
	    							<td><?php echo $materia->semestre ?></td>
	    							<td>
	    								<a class="btn btn-danger" style="margin: 5px;" href="<?php echo base_url() ?>index.php/materia/eliminar/<?php echo $materia->clave ?>">Borrar</a>
	    								<a class="btn btn-info" style="margin: 5px;" href="<?php echo base_url() ?>index.php/materia/editar/<?php echo $materia->clave ?>">Editar</a></td>
	    						</tr>
	    						<?php
	    					}
	    				?>
	    			</tbody>
				</table>
	    	</div>