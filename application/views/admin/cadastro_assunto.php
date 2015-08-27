<div class="col-md-7">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Adicionar Assuntos</h2>
        <form action="<?php echo base_url("admin/processarAssunto");?>" method="post" class="form-horizontal" accept-charset="utf-8">
            <div class="form-group">
                <label for="campo_nome" class="col-sm-2 control-label label-form"> Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="campo_nome" name="nome">
                </div>

            </div>

            <div class="form-group">
                <label for="campo_descricao" class="col-sm-2 control-label label-form">Descrição</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="descricao" id="campo_descricao" rows="6"></textarea>
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
