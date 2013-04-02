<h2>Atualizar noticia</h2>

<?php echo form_open('news/editar/'.$news['id']) ?>

	<label for="title">Title</label> 
	<input type="input" name="title" value="<?php echo $news['title'] ?>" /><br />

	<label for="text">Text</label>
	<textarea name="text"><?php echo $news['text'] ?></textarea><br />
	
	<input type="submit" name="submit" value="Salvar" /> 

</form>