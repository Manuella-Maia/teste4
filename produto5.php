<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Livro Agatha Christie-O Misterioso Caso de Styles</h1>
			<p>por	apenas	R$	44,90</p>
			<form	action="checkoutlenda5.php" method="POST">
			<input	type="hidden" name="nome" value="Livro Agatha Christie-O Misterioso Caso de Styles">
<input	type="hidden" name="preco" value="44,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="verde" id="verde" checked>
											<label	for="verde">
											<img src="img/livro4-verde.jpg" alt="cor do livro, verde ">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Conheça o primeiro caso de Hercule Poirot! Em O Misterioso Caso de Styles, 
					Agatha Christie apresenta uma trama magistral com pistas escondidas e um desfecho surpreendente. 
					Um verdadeiro marco na literatura de mistério.</p>
									
<table>
<thead>
	<tr>
			<th>Característica</th>
			<th>Detalhe</th>
	</tr>
	</thead>
	<tbody>
	<tr>
			<td>Modelo</td>
			<td>Agatha Christie-O Misterioso Caso de Styles</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>Papel</td>
	</tr>
	<tr>
			<td>Editora</td>
			<td> Globo Livros </td>
	</tr>
</tbody>
</table>
</div>
</div>
<div vw class="enabled">
    <div vw-access-button class="active"></div>
    <div vw-plugin-wrapper>
      <div class="vw-plugin-top-wrapper"></div>
    </div>
  </div>
  <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
  <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
  </script>
</body> <!-- Fim do corpo da página -->
<?php	include("rodape.php");	?>
</body>
</html>