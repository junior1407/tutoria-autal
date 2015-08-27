
<?php

?>

<div class="col-md-7">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Busca de Questões</h2>
        <p style="text-indent: 50px; font-size: 14pt">Nessa área você poderá buscar questões por um critério para
            que possa editá-las ou excluí-las. Preencha o máximo de critérios possível para poder encontrar a questão que procura.</p>
     <!--   <form action=" method="post" class="form-horizontal" accept-charset="utf-8">  -->
        <?php $atributos= array('class' => 'form-horizontal');
        echo form_open('admin/exibeTabela', $atributos); ?>
            <div class="form-group form-inline row">
                <label for="campo_prova" class="col-sm-2 control-label small-label-form"> Prova</label>
                <div class="col-sm-2">
                    <select id="campo_prova"  name="prova" class="form-control">
                        <option selected value="empty"> Selecione uma opção </option>
                        <?php foreach($provas as $atual){?>
                        <option value="<?php echo $atual->prova;?>"><?php echo $atual->prova;?></option>
                        <?php }?>




                    </select>
                </div>
                <label for="campo_ano" class="col-sm-2 control-label small-label-form"> Ano</label>
                <div class="col-sm-6">
                    <select id="campo_ano"  name="ano" class="form-control">
                        <option selected value="empty"> Selecione uma opção </option>
                        <?php foreach($anos as $atual){  ?>
                            <option value="<?php echo $atual->ano;?>"><?php echo $atual->ano;?></option>

                        <?php } ?>
                    </select>
                </div>

            </div>


            <div class="form-group">
                <label for="campo_assunto" class="col-sm-2 control-label small-label-form"> Assunto</label>
                <div class="col-sm-10">

                    <select id="campo_assunto"  name="assunto" class="form-control">
                        <option value="empty" selected>-Selecione uma Opção-</option>
                        <?php foreach($assuntos as $atual){
                            ?>
                        <option value="<?php echo $atual->idassunto; ?>"> <?php echo $atual->nome; ?></option>
                        <?php } ?>






                    </select>


                </div>
            </div>



            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2 col-sm-offset-5">

                    <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-search"></span>  Pesquisar   </button>



                </div>
            </div>
            <!--       <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
                </div> -->
        </form>
    </div>
</div>


