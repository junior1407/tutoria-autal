
<?php $atual = $atual[0];?>

<div class="col-md-7">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Editar Questão</h2>
        <form action="<?php echo base_url("admin/atualizarQuestao");?>" method="post" class="form-horizontal" accept-charset="utf-8">
            <input type="hidden" name="id" value="<?php echo $atual->id;?>">
            <div class="form-group form-inline row">
                <label for="campo_prova" class="col-sm-2 control-label label-form"> Prova</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="campo_prova" name="prova" value="<?php echo $atual->prova;?>">
                </div>
                <label for="campo_ano" class="col-sm-2 control-label label-form"> Ano</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="campo_ano" name="ano" value="<?php echo $atual->ano;?>">
                </div>

            </div>


            <div class="form-group">
                <label for="campo_assunto" class="col-sm-2 control-label label-form"> Assunto</label>
                <div class="col-sm-10">

                    <select id="campo_assunto"  name="assunto" class="form-control">

                        <?php foreach($assuntos as $asatual){?>
                            <option value="<?php echo $asatual->idassunto;?>"
                                <?php if ($atual->id_assunto_questao==$asatual->idassunto){
                                    echo 'selected';
                                }  ?>

                                > <?php echo $asatual->nome;?></option>
                        <?php }?>



                    </select>


                </div>
            </div>

            <div class="form-group">
                <label for="campo_enunciado" class="col-sm-2 control-label label-form">Enunciado</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="enunciado" id="campo_enunciado" rows="6"><?php echo $atual->enunciado;?></textarea>
                </div>
            </div>

            <h3>Alternativas</h3>
            <div class="form-group">
                    <label class="col-sm-2 control-label label-form">a)</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="a" id="campo_alternativa_a" rows="2"><?php echo $atual->a;?></textarea>
                    </div>

            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label label-form">b)</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="b" id="campo_alternativa_b" rows="2"><?php echo $atual->b;?></textarea>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">c)</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="c" id="campo_alternativa_c" rows="2"><?php echo $atual->c;?></textarea>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">d)</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="d" id="campo_alternativa_d" rows="2"><?php echo $atual->d;?></textarea>
                </div>

            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">e)</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="e" id="campo_alternativa_e" rows="2"><?php echo $atual->e;?></textarea>
                </div>

            </div>


            <div class="form-group">
                <label for="campo_correta" class="col-sm-2 control-label label-form"> Correta</label>
                <div class="col-sm-10">

                    <select id="campo_correta"  name="correta" class="form-control">
                        <option value="a" <?php if ($atual->correta == 'a'){
                            echo 'selected';
                        } ?> > A</option>
                        <option value="b" <?php if ($atual->correta == 'b'){
                            echo 'selected';
                        } ?> > B</option>
                        <option value="c" <?php if ($atual->correta == 'c'){
                            echo 'selected';
                        } ?> > C</option>
                        <option value="d" <?php if ($atual->correta == 'd'){
                            echo 'selected';
                        } ?> > D</option>
                        <option value="e" <?php if ($atual->correta == 'e'){
                            echo 'selected';
                        } ?> > E</option>


                    </select>


                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-2 col-sm-offset-5">

                    <button type="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-floppy-open"></span>Salvar </button>



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
