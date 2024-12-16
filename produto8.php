<?php	include("cabecalho.php");	?>
<div	class="produto-back">
<div	class="container">
<div	class="produto">

			<h1>Livro Martyn o Detetive</h1>
			<p>por	apenas	R$	39,90</p>
			<form	action="checkoutlenda8.php" method="POST">
			<input	type="hidden" name="nome" value="Livro Martyn o Detetive">
<input	type="hidden" name="preco" value="39,90">
<fieldset	class="cores">
											<legend>Escolha	a	cor:</legend>
											<input	type="radio" name="cor" value="preto" id="preto" checked>
											<label	for="preto">
											<img src="img/livo1-preto.jfif" alt="cor do livro, preto ">
											</label>
											</fieldset>
<input	type="submit" class="comprar" value="Comprar">
	</form>
	</div>
<div	class="detalhes">
					<h2>Detalhes	do	produto</h2>
					<p>Acompanhe Martyn, um jovem detetive com talento 
					para desvendar mistérios, nesta fascinante aventura literária. Recheado de intrigas, suspense e reviravoltas, 
					este livro é um prato cheio para leitores que amam histórias cheias de surpresas.</p>
									
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
			<td>Livro Martyn o Detetive</td>
	</tr>
	<tr>
			<td>Material</td>
			<td>Papel</td>
	</tr>
	<tr>
			<td>Editora</td>
			<td> Lura Editorial   </td>
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