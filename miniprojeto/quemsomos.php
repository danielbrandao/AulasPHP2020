<h2>QUEM SOMOS</h2>
<div>
	<?php 
	// Trazendo dados da tabela Página
	$query = mysqli_query($conexao, "SELECT * FROM paginas WHERE id = 1");
	
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['conteudo'];
    }
	?>
	

</div>