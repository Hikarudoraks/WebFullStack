<section class="banner">
	
	<div class="container">
		<h1 class="text-center text-white titulo">Pagina de Teste do Banco de Dados</h1>
	</div>

</section>
<section></section>
<section class="criticas text-center">
	<!-- Campo de criação de Posts -->
	<div class="container">

		<h1 class="text-center mt-5">Crie seu Post</h1>

			<div class="row my-5">
			
				<div class="col-md-12 col-sm-12 col-12">
				
					<form name="formCadastro" method="POST">

						<!-- Nome -->
						<div class="form-group text-left">
							<label>Nome do Post<span class="text-danger">*</span></label><br>
							<input type="text" name="name" class="form-control border border-dark" placeholder="Digite seu Nome Completo">
						</div>
						<!-- Email -->
						<div class="form-group text-left">
							<label>Imagem ou vídeo</label><br>
							<input type="text" name="content" class="form-control border border-dark" placeholder="Coloque a url aqui!">
						</div>
						<!-- Critica -->
						<div class="form-group text-left">
							<label>Descrição<span class="text-danger">*</span></label><br>
							<textarea name="descricao" class="form-control border border-dark" placeholder="Deixe sua critica sobre o que devemos melhorar no nosso site."></textarea>
						</div>
				    	<div class="modal-footer">
							<div class="form-group btn-group">
								<div class="btn btn-success" id="btnSubmitCadastro" data-dismiss="modal" type="submit">Enviar</div>
				        		<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
							</div>
			    		</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>