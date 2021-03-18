<div class="contact" id="content-contact">
	
	<section class="list">
		
		<div class="container">
			<table class="table table-bordered table-hover table-striped table-condensed table-dark">

				<tr class="text-center">
					<th>#</th>
					<th>produto</th>
					<th>valor</th>
					<th>codigo</th>
					<th>data</th>
					<th>fabricante</th>
					<th>editar</th>
					<th>excluir</th>
				</tr>

				<?php foreach($contacts as $info) {?>

					<tr class="text-center">
						<td><?php echo $info['id'];?></td>
						<td><?php echo $info['produto'];?></td>
						<td><?php echo $info['valor'];?></td>
						<td><?php echo $info['codigo'];?></td>
						<td><?php echo $info['data'];?></td>
						<td><?php echo $info['fabricante'];?></td>
						<td>
							<a href="<?php echo $url; ?>/contato/edit/<?php echo $info['id']; ?>">
								<div class="btn btn-primary"><i class="fas fa-edit"></i></div>
							</a>
						</td>

						<td>
							<a href="#">
								<div class="btn btn-danger" id="btnDelete" data-id="<?php echo $info['id']; ?>"><i class="fas fa-trash"></i></div>
							</a>
						</td>
					</tr>

				<?php } ?>
			</table>
		</div>

	</section>

</div>