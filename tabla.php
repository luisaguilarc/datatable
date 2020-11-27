<?php 

require_once "clases/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT id_juego,
nombre,
anio,
empresa
from t_juegos";
$result=mysqli_query($conexion,$sql);
?>

<div>
	<table class="table table-hover table-condensend" id="iddatatable">
		<thead style="background-color: #33acff;color: white;font-weight: bold;">
			<tr >
				<td>Nombre</td>
				<td>Año</td>
				<td>Empresa</td>
				<td>Editar</td>
				<td>Eliminar</td>

			</tr>
		</thead>
		<tfoot style="background-color: #8773f5;color: white;font-weight: bold;">
			<tr>
				<td>Nombre</td>
				<td>Año</td>
				<td>Empresa</td>
				<td>Editar</td>
				<td>Eliminar</td>
				<td>
					<span class="btn btn-warning btn-xs">
						<span></span>
					</span>
				</td>
				<td>
					<span class="btn btn-warnig btn-xs">
						<span></span>
						
					</span>
				</td>
			</tr>
			
		</tfoot>
		<tbody>
<?php
	while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
					<td style="text-align: center">
						<span class="btn btn-warning btn-xs">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
					<td style="text-align: center">
						<span class="btn btn-danger btn-xs">
							<span class="fa fa-trash"></span>
						</span>
					</td>
				
			</tr>
			<?php 


}
			 ?>
		</tbody>
	</table>

</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('#iddatatable').DataTable();
} );
</script>