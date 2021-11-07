<main>
    <section>
        <h1>Listagem das cidades</h1>
            <table border='3'>
                <tr>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Cep inicial</th>
                    <th>Cep Final</th>
                    <th>Deletar</th>    
                    <th>Editar</th>
                <tr>
                    <?php
                        include 'database.php';

                        //a função mysqli_fetch_array varre cada registro da tabela
                        // o nome da variavel foi pensada nessa caracteristica da função para facilitar o entendimento
                        while($linhaAtual = mysqli_fetch_array($consulta))
                        {
                            echo '<tr><td>'.$linhaAtual['nome'].'</td>';
                            echo '<td>'.$linhaAtual['estado'].'</td>';
                            echo '<td>'.$linhaAtual['cep_inicial'].'</td>';
                            echo '<td>'.$linhaAtual['cep_final'].'</td>';
                        ?>
                            <td><a href='deleta.php?id=<?php echo $linhaAtual['id'];?>'>Deletar</a></td>
                            <td><a href='cadastrar.php?editar=<?php echo $linhaAtual['id'];?>'>Editar</a></td></tr>
                        <?php
                        }
                        ?>                        
                    
            </table>


    </section>
</main>