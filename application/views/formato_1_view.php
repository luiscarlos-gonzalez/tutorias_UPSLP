		<div class="span2">
	    	<div class="well">
		    	<ul class="nav nav-list">
				  <li class="nav-header">Administración</li>
				  <li><a href="<?php echo base_url() ?>">Tutores</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/alumnos">Alumnos</a></li>
				  <li><a href="<?php echo base_url() ?>index.php/upslp/materias">Materias</a></li>
				  <li class="nav-header">Formatos</li>
				  <li class="active"><a href="<?php echo base_url() ?>index.php/formatos/analisis_semetre_anterior">Formato 1</a></li>
				  <li><a href="#">Formato 2</a></li>
			 	</ul>
			</div>
	    </div>
	    <div class="span10">
	    	<h1>Ánalisis del semestre anterior</h1>
	    	<p>
		    	<p><b>Nombre de Estudiante: </b><?php echo $alumno[0]->nombre; ?></p>
		    	<span><b>Carrera: </b><?php echo $alumno[0]->carrera; ?></span>
		    	<span><b>Semestre: </b><?php echo $alumno[0]->semestre; ?></span>
		    	<span><b>Grupo: </b><?php echo $alumno[0]->grupo; ?></span>
		    	<span><b>Fecha: </b></span>
	    	</p>
	    	<!-- <div class="well"> -->
		    	<table class="table table-hover">
		    		<thead>
		    			<th>Nombre de la materia cursada en  el semestre anterior</th>
		    			<th>Grado de dificultad (MD: muy difícil, D: difícil, N: normal, F: fácil, MF muy fácil)</th>
		    			<th>Preferencia (alta, media, baja)</th>
		    			<th>Tiempo dedicado (mucho,  suficiente, poco)</th>
		    			<th>Calificación Final del semestre anterior</th>
		    			<th>Anotar A (Aprobado) NA (No Acreditado)</th>
		    		</thead>
		    		<tbody>
		    			<?php foreach($kardex as $kard){ ?>
		    			<tr>
		    				<td><?php echo $kard->clave ?></td>
		    				<td>
		    					<select>
		    						<option>MD: muy difícil</option>
		    						<option>D: difícil</option>
		    						<option>N: normal</option>
		    						<option>N: normal</option>
		    						<option>F: fácil</option>
		    						<option>MF: muy fácil</option>
		    					</select>
		    				</td>
		    				<td>
		    					<select>
		    						<option>Alta</option>
		    						<option>Media</option>
		    						<option>Facil</option>
		    					</select>
		    				</td>
		    				<td>
		    					<select>
		    						<option>Mucho</option>
		    						<option>Suficiente</option>
		    						<option>Poco</option>
		    					</select>
		    				</td>
		    				<td><?php echo $kard->final ?></td>
		    				<td><?php echo $kard->status ?></td>
		    			</tr>
		    			<?php } ?>
		    		</tbody>
	    	</table>
	    <!-- </div> -->
	    <button type="submit" class="btn btn-success"> Guardar </button>