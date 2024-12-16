<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Caneca do Pânico</h1>
			<p>por	apenas	R$	59,90</p>
			<form	action="checkoutlenda3.php" method="POST">
			<input	type="hidden" name="nome" value="Caneca do Pânico">
<input	type="hidden" name="preco" value="59,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="preto" id="preto" checked>
											<label	for="preto">
											<img src="img/produtos/canecapanico-preto.png" alt="cor da caneca, preto">
											</label>
											<input	type="radio" name="cor" value="azul" id="azul">
											<label	for="azul">
											<img src="img/produtos/canecapanico-azul.png" alt="cor da caneca, azul">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Perfeita para os fãs do icônico filme de terror,
					a caneca do Pânico é ideal para começar o dia com um toque de suspense.
					Feita com material resistente e estampada com o famoso Ghostface, 
					essa peça é indispensável para amantes de histórias assustadoras.

</p>
									
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
			<td>Caneca Personalizada do Pânico</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>Cerâmica</td>
	</tr>
	<tr>
			<td>Cor</td>
			<td>Preto e Azul</td>
	</tr>
	<tr>
			<td>Marca</td>
			<td>Canecas MM</td>
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
