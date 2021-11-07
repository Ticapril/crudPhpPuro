<?php if(!isset($_GET['editar'])){ ?>
<main>
    <h1>Cadastrar Cidade</h1>
    <div>
        <form method="POST" action="processa.php">
            <label>Nome da Cidade</label>
            <input type="text" name="cidade"/>
            <label>Nome do Estado</label>
            <input type="text" name="estado"/>
            <label>Cep inicial</label>
            <input type="number" name="cep_inicial"/>
            <label>Cep Final</label>
            <input type="number" name="cep_final"/>
            <input type="submit" value="Enviar"/>
        </form>
    </div>
<main>
<?php } else { ?>
    <?php
        include 'database.php';
        $query = 'SELECT * FROM cidades';
        $consultaEdicao = mysqli_query($conexao, $query);
        while($linhaAtual = mysqli_fetch_array($consultaEdicao)) 
    {?>
    <?php if($linhaAtual['id'] == $_GET['editar']){ ?>
            <main>
                <h1>Editar Cidade</h1>
                <div>
                    <form method="POST" action="editar.php">
                        <input type="hidden" name="id" value="<?php echo $linhaAtual['id']; ?>"/>
                        <label>Nome da Cidade</label>
                        <input type="text" name="cidade" value="<?php echo $linhaAtual['nome'];?>"/>
                        <label>Nome do Estado</label>
                        <input type="text" name="estado" value="<?php echo $linhaAtual['estado'];?>"/>
                        <label>Cep inicial</label>
                        <input type="number" name="cep_inicial" value="<?php echo $linhaAtual['cep_inicial'];?>"/>
                        <label>Cep Final</label>
                        <input type="number" name="cep_final" value="<?php echo $linhaAtual['cep_final'];?>"/>
                        <input type="submit" value="Enviar"/>
                
                    </form>
                </div>
            <main>
    <?php } ?>
<?php } ?>
<?php } ?>