<div class="col-md-7">
    <div class="conteudo-principal">
        <h2 class="titulo-principal"> Adicionar Questões</h2>
        <form action="http://localhost/tutoria/inicio/processar" method="post" class="form-horizontal" accept-charset="utf-8">
            <div class="form-group form-inline row">
                <label for="campo_prova" class="col-sm-2 control-label label-form"> Prova</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" id="campo_prova" name="prova">
                </div>
                <label for="campo_ano" class="col-sm-2 control-label label-form"> Ano</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="campo_ano" name="ano">
                </div>

            </div>


            <div class="form-group">
                <label for="campo_assunto" class="col-sm-2 control-label label-form"> Assunto</label>
                <div class="col-sm-10">

                    <select id="campo_assunto"  name="assunto" class="form-control">
                        <option value="1"> Análise Combinatória</option>
                        <option value="2"> Teoria dos Numeros</option>
                        <option value="3"> Geometria</option>
                        <option value="4"> Álgebra</option>



                    </select>


                </div>
            </div>

            <div class="form-group">
                <label for="campo_enunciado" class="col-sm-2 control-label label-form">Enunciado</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="enunciado" id="campo_enunciado" rows="4"></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">Imagens</label>
                <div class="col-sm-3">
                    <input class="form-control " placeholder="Digite o link da imagem" name="enunciado_link1"
                           id="campo_enunciado_link1">
                </div>
                <div class="col-sm-3">
                    <input class="form-control" placeholder="Digite o link da imagem" name="enunciado_link2"
                           id="campo_enunciado_link2">
                </div>
                <div class="col-sm-3">
                    <input class="form-control" placeholder="Digite o link da imagem" name="enunciado_link3"
                           id="campo_enunciado_link3">
                </div>
            </div>
            <h3>Alternativas</h3>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">a)</label>
                <div class="col-sm-3">
                    <input class="form-control" name="a" placeholder="Digite o link da imagem" id="campo_alternativa_a">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Digite o link da imagem(se houver)"
                           name="alternativa_a_link" id="campo_alternativa_a_link">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">b)</label>
                <div class="col-sm-3">
                    <input class="form-control " name="b" placeholder="Digite o link da imagem" id="campo_alternativa_b">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Digite o link da imagem(se houver)"
                           name="alternativa_b_link" id="campo_alternativa_b_link">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">c)</label>
                <div class="col-sm-3">
                    <input class="form-control" name="c" placeholder="Digite o link da imagem" id="campo_alternativa_c">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Digite o link da imagem(se houver)"
                           name="alternativa_c_link" id="campo_alternativa_c_link">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">d)</label>
                <div class="col-sm-3">
                    <input class="form-control " name="d" placeholder="Digite o link da imagem" id="campo_alternativa_d">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Digite o link da imagem(se houver)"
                           name="alternativa_d_link" id="campo_alternativa_d_link">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label label-form">e)</label>
                <div class="col-sm-3">
                    <input class="form-control " name="e" placeholder="Digite o link da imagem" id="campo_alternativa_e">
                </div>
                <div class="col-sm-5">
                    <input class="form-control" placeholder="Digite o link da imagem(se houver)"
                           name="alternativa_e_link" id="campo_alternativa_e_link">
                </div>
            </div>



            <div class="form-group">
                <label for="campo_correta" class="col-sm-2 control-label label-form"> Correnta</label>
                <div class="col-sm-10">

                    <select id="campo_correta"  name="correta" class="form-control">
                        <option value="a"> A</option>
                        <option value="b"> B</option>
                        <option value="c"> C</option>
                        <option value="d"> D</option>
                        <option value="e"> E</option>


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
