<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Funco Jason</h1>
			<p>por	apenas	R$	99,90</p>
			<form	action="checkoutlenda.php" method="POST">
			<input	type="hidden" name="nome" value="Funco Jason">
<input	type="hidden" name="preco" value="99,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="cinza" id="cinza" checked>
											<label	for="cinza">
											<img src="img/produtos/funco1-cinza.png" alt="cor do funco pop, cinza">
											</label>
											<input	type="radio" name="cor" value="azul" id="azul">
											<label	for="azul">
											<img src="img/produtos/funco1-azul.png" alt="cor do funco pop, azul">
											</label>
											
</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>"Figura colecionável Funko Pop inspirada no icônico Jason Voorhees, da série de filmes Sexta-Feira 13. 
					Detalhes precisos da máscara de hóquei e facão característico,
					com acabamento de alta qualidade. Ideal para fãs de terror e colecionadores.</p>
									
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
			<td>Funko Pop Friday the 13th 26 Jason Voorhees Exclusive</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>plastico</td>
	</tr>
	<tr>
			<td>Cores</td>
			<td>Azul e cinza</td>
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
