

<?php
$contador=0;



foreach ($records as $r){
    $contador++;

    echo '<br><br>';


 $row = $this->questao_model->getById($r['id_questao'])[0];


    ?>
    <div class="well<?php

    if ($r['marcada']!=($r['certa'])){
    echo' errada-questao';
    $certa = false;}
    ?>"> <span class="label label-primary">Questão  <?php echo sprintf('%02d',($contador))?> </span>

        <?php echo $row->enunciado;?>
        <p style="clear:both">
            <label class="<?php if ($certa==false){
                if ('a'==$r['certa']){
                    echo 'certa-alternativa';
                }

            }?>">
                <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="a" required="true"
                    <?php if ('a'==$r['marcada']){
                    echo 'checked';
                } ?>
                    >
                a) <?php echo $row->a;?>

            </label> <br>


            <label class="<?php if ($certa==false){
                if ('b'==$r['certa']){
                    echo 'certa-alternativa';
                }

            }?>">
                <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="b"  <?php if ('b'==$r['marcada']){
                    echo 'checked';
                } ?>>
                b) <?php echo $row->b;?>

            </label><br>
            <label class="<?php if ($certa==false){
                if ('c'==$r['certa']){
                    echo 'certa-alternativa';
                }

            }?>">
                <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="c"  <?php if ('c'==$r['marcada']){
                    echo 'checked';
                } ?>>
                c) <?php echo $row->c;?>

            </label>  <br>
            <label>
                <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="d"  <?php if ('d'==$r['marcada']){
                    echo 'checked';
                } ?>>
                d) <?php echo $row->d;?>

            </label><br>
            <label>
                <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="e"  <?php if ('e'==$r['marcada']){
                    echo 'checked';
                } ?>>
                e) <?php echo $row->e;?>

            </label> <br>

        </p>

    </div>
<?php }








?>



