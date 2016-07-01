<div class="container" style=""margin-top:80px>
	<div class="jumbotron">
		<h2>Registro de produtos</h2>
	</div>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Numero de controle</th>
					<th>Nome do produto</th>
					<th>Preco do produto</th>
					<th>Opcao</th>

				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $data):?> 
					<tr>

						<td><?php echo $data['id']?></td>

						<td><?php echo $data['nome']?></td>

						<td><?php echo $data['preco']?></td>

						<td><a href="index.php?c=produto&a=produto&_id=<?php echo $data['id'] ?>" class= "btn btn-default">Editar</a>
						    <a href="index.php?c=produto&a=delete&_id=<?php echo $data['id'] ?>" class= "btn btn-danger">Excluir</a></td>


					</tr>	
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>		