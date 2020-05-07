<h2>PRODUTOS</h2>
<?php 
	
	$query = mysqli_query($conexao, "SELECT * FROM paginas WHERE nome = 'Produtos'");
    // Litando valores retornados da tabela "paginas"
    while($tabela = mysqli_fetch_array($query)){
        echo $tabela['conteudo'];
    }
?>