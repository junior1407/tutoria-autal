<div class="col-md-7" xmlns="http://www.w3.org/1999/html">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Editar Questões</h2>
        <p style="text-indent: 50px; font-size: 14pt">Nessa área você poderá editar questões.</p>

        <table class="table table-striped ">
            <tr>
                <th> id</th>
                <th> Prova</th>
                <th> Ano</th>
                <th> Enunciado</th>
                <th>Assunto</th>
                <th> Ações</th>
            </tr>
            <?php foreach($questoes as $atual){



            ?>
            <tr>

                <td><?php echo $atual->id;?></td>
                <td><?php echo $atual->prova;?></td>
                <td><?php echo $atual->ano;?></td>
                <td><?php echo substr($atual->enunciado,0,40);?></td>
                <td> <?php $this->Assunto_model->getNomeAssuntoById($atual->id_assunto_questao); ?></td>
                <form action="<?php echo base_url("admin/EditarQuestao");?>" class=""  method="post"  >
                    <input type="hidden" name="cod" value="<?php echo $atual->id; ?>">
                <td><button class="btn btn-sm paddingminimo " href="#"> <span class="glyphicon glyphicon-pencil"></span></button>
                  </form>
                <form action="<?php echo base_url("admin/DeleteQuestao");?>" class=""  method="post"  >

                    <input type="hidden" name="cod" value="<?php echo $atual->id; ?>">
                    <button class="btn btn-sm paddingminimo" href="#"> <span class="glyphicon glyphicon-remove"></span></button>
                </form>

                <form action="<?php echo base_url("admin/ExibeQuestaoIsolada");?>" class=""  method="get"  >
                <input type="hidden" name="cod" value="<?php echo $atual->id; ?>">
                    <button class="btn btn-sm paddingminimo" href="#"> <span class="glyphicon glyphicon-eye-open"></span></button>
                </td>
                    </form>
            </tr>
            <?php }?>


        </table>



    </div>
</div>
