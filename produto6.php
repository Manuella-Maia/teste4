<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Livro Agatha Christie - O Mistério Sittaford</h1>
			<p>por	apenas	R$	49,90</p>
			<form	action="checkoutlendas6.php" method="POST">
			<input	type="hidden" name="nome" value="Livro Agatha Christie - O Mistério Sittaford">
<input	type="hidden" name="preco" value="49,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="azul" id="azul" checked>
											<label	for="azul">
											<img src="img/livro3-azul.jfif" alt="cor do livro, azul ">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Prepare-se para mais uma trama envolvente da Rainha do Crime! 
					O Mistério Sittaford combina personagens cativantes e um enredo cheio de reviravoltas, 
					garantindo horas de leitura empolgante. Ideal para os amantes de romances policiais.</p>
									
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
			<td> Harper Collins </td>
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