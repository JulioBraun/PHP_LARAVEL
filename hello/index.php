<?php require './functions/functions.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo final </title>
</head>
<body>
    <form action="/functions/functions.php" method="post">
<input type="text" name="NOME" id="" placeholder="Nome">
<input type="text" name="CPF" id="" placeholder="CPF">
<input type="email" name="EMAIL" id="" placeholder="Email">
<input type="submit" value="Enviar">
   <select name="" id="">
<option value="">selecione uma opção</option>
<?php foreach(selectClients() as $cliente):?>
    <option value=""><?php echo $cliente['NOME']?></option>
    <?php endforeach ?> 
    </select>
</form>
<div>
<h1>  Lista de Produtos</h1>
<ul>
    <?php foreach(selectProdutos() as $produto):?> 
    <li><?php echo $produto['DESCRICAO']?> ---- R$  <?php echo $produto['PRECOVENDA']?></li>  
    <?php endforeach ?>
</ul>
</div>
</body>
</html>