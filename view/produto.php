<div class="container">
<div class="jumbotron">
<h2>Formulario de cadastro de produtos</h2>
</div>
			<form action="index.php?c=produto&a=salvar_produto" method="post">
			<input type="hidden" name="txtid" value="<?php echo $data['id']!= 0? $data['id']:"0"?>"/>
			
			
			<div class="form-group">
			<label for="name" class="col-sm-2 control-label"for="txt_nome"> Nome do produto</label>
			<div class="col-sm-10">
			<input type="text" value="<?php echo $data['nome']?>" class="form-control"  name="txt_nome" pattern="[a-z\s]+$" required placeholder="Digite o nome do produto" value="">
			</div>
			</div>
			<br>
			
			<div class="form-group">
			<label for="name" class="col-sm-2 control-label"for="txt_preco"> Preco do produto</label>
			<div class="col-sm-10">
			<input type="text" value="<?php echo $data['preco']?>" class="form-control"  name="txt_preco"  pattern="[0-9]+$" required placeholder="Digite o preco do produto" value="">
			</div>
			</div>			
			


			<div class="form-group">
				<div class="col-sm-10 col-sm-offset-2">
					<input type="submit" name="submit"  value="Salvar" class="btn btn-primary">
			</div>
			</div>
			

		</form>
	</div>	
</div>