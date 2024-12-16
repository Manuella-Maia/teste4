<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Funco do Pânico</h1>
			<p>por	apenas	R$	89,90</p>
			<form	action="checkoutlenda2.php" method="POST">
			<input	type="hidden" name="nome" value="Funco do Pânico">
<input	type="hidden" name="preco" value="89,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="preto" id="preto" checked>
											<label	for="preto">
											<img src="img/produtos/funco2-preto.png" alt="cor do funco pop, preto">
											</label>
											<input	type="radio" name="cor" value="roza" id="roza">
											<label	for="roza">
											<img src="img/produtos/funco2-roza.png" alt="cor do funco pop, roza">
											</label>
											
</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Adicione o icônico Ghostface à sua coleção com este Funko Pop! Rico em detalhes e com acabamento impecável,
					é a peça perfeita para fãs de filmes de terror e colecionadores de cultura pop..</p>
									
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
			<td>Funko Pop do Pânico</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>plastico</td>
	</tr>
	<tr>
			<td>Cores</td>
			<td>Preto e Rosa</td>
	</tr>
	<tr>
			<td>Marca</td>
			<td>Funko - Marcas</td>
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
