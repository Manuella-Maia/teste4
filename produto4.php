<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Caneca do Jason</h1>
			<p>por	apenas	R$	59,90</p>
			<form	action="checkoutlendas4.php" method="POST">
			<input	type="hidden" name="nome" value="Caneca do Jason">
<input	type="hidden" name="preco" value="59,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="preto" id="preto" checked>
											<label	for="preto">
											<img src="img/caneca2-preto.webp" alt="cor da caneca, preto ">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Celebre o lendário assassino de Crystal Lake com a caneca do Jason! 
					Com um design exclusivo inspirado na máscara do personagem de Sexta-Feira 13,
					esta caneca une estilo e funcionalidade para fãs do gênero slasher.</p>
									
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
			<td>Caneca Personalizada do Jason</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>Cerâmica</td>
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
