<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Livro Sherloock Holmes - O Cão dos Baskerville</h1>
			<p>por	apenas	R$	49,90</p>
			<form	action="checkoutlendas7.php" method="POST">
			<input	type="hidden" name="nome" value="Livro Sherloock Holmes - O Cão dos Baskerville">
<input	type="hidden" name="preco" value="49,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="amarelo" id="amarelo" checked>
											<label	for="amarelo">
											<img src="img/livro2-amarelo.jfif" alt="cor do livro, amarelo ">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Um clássico imperdível da literatura policial! Em O Cão dos Baskerville, 
					Sherlock Holmes e Dr. Watson enfrentam um mistério envolvente nos pântanos da Inglaterra. 
					Um livro que combina inteligência, suspense e uma trama fascinante.</p>
									
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
			<td>Livro Sherloock Holmes - O Cão dos Baskerville</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>Papel</td>
	</tr>
	<tr>
			<td>Editora</td>
			<td> Principis </td>
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