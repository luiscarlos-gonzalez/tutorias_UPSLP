	    	
	    <div class="span2">
	    	<div class="well">
		    	<ul class="nav nav-list">
				  <li class="nav-header">Administración</li>
				  <li class="active"><a href="<?php echo base_url() ?>">Tutores</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/alumnos">Alumnos</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/materias">Materias</a></li>
			 	</ul>
			</div>
	    </div>
	    <div class="span10">
	    	<div class="span5">
		    	<form class="form-horizontal" method="post" action="<?php echo base_url() ?>index.php/tutor/nuevo">
		    		<legend>Ingresa un nuevo tutor</legend>
		    		<?php echo validation_errors('<div class="alert alert-error">', '</div>'); ?>
		    		<div class="control-group">
			    		<label class="control-label" for="matricula">Matrícula</label>
			    		<div class="controls">
					      	<input type="text" id="matricula" value="<?php echo set_value('matricula'); ?>" name="matricula" placeholder="Matrícula">
					    </div>
					</div>
				    <div class="control-group">
			    		<label class="control-label" for="nombre">Nombre</label>
			    		<div class="controls">
					      	<input type="text" id="nombre" value="<?php echo set_value('nombre'); ?>" name="nombre" placeholder="Nombre">
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
	    		<legend>Todos los tutores</legend>
	    		<table class="table table-hover">
		    		<thead>
		    			<tr>
		    				<th>Matrícula</th>
		    				<th>Nombre</th>
		    				<th>Acciones</th>
		    			</tr>
	    			</thead>
	    			<tbody>
	    				<?php 
	    					foreach ($tutores as $tutor) {
	    						?>
	    						<tr>
	    							<td><?php echo $tutor->matricula ?></td>
	    							<td><?php echo $tutor->nombre ?></td>
	    							<td>
	    								<a class="borrar_tutor btn btn-danger" style="margin: 5px;" href="<?php echo base_url() ?>index.php/tutor/eliminar/<?php echo $tutor->matricula ?>">Borrar</a>
	    								<a class="editar_tutor btn btn-info" style="margin: 5px;" href="<?php echo base_url() ?>index.php/tutor/editar/<?php echo $tutor->matricula ?>">Editar</a></td>
	    						</tr>
	    						<?php
	    					}
	    				?>
	    			</tbody>
				</table>
	    	</div>