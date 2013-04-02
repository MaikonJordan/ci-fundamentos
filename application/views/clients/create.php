<h2>Create a clients item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create') ?>

	<label for="nome">Nome</label> 
	<input type="input" name="nome" /><br />

	<label for="Cidade">Cidade</label> 
	<input type="input" name="city" /><br />

	
	<input type="submit" name="submit" value="Cadastrar novo usuário" /> 

</form>
