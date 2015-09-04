<div class="col-md-7" xmlns="http://www.w3.org/1999/html">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Editar Assuntos</h2>
        <p style="text-indent: 50px; font-size: 14pt">Nessa área você poderá editar questões.</p>

        <table class="table table-striped ">
            <tr>
                <th> id</th>

                <th> Nome</th>
                <th> Enunciado</th>

                <th> Ações</th>
            </tr>
            <?php foreach($assuntos as $atual){



            ?>
            <tr>

                <td><?php echo $atual->idassunto;?></td>

                <td><?php echo $atual->nome;?></td>
                <td><?php

                    echo substr($atual->descricao,0,120).' ...';

                    ?></td>

                <form action="<?php echo base_url("admin/EditarAssunto");?>" class=""  method="post"  >
                    <input type="hidden" name="cod" value="<?php echo $atual->idassunto; ?>">
                <td><button class="btn btn-sm paddingminimo " href="#"> <span class="glyphicon glyphicon-pencil"></span></button>
                  </form>
                <form action="<?php echo base_url("admin/DeleteAssunto");?>" class=""  method="post"  >

                    <input type="hidden" name="cod" value="<?php echo $atual->idassunto; ?>">
                    <button class="btn btn-sm paddingminimo" href="#"> <span class="glyphicon glyphicon-remove"></span></button>
                </form>


                </td>

            </tr>
            <?php }?>


        </table>



    </div>
</div>
