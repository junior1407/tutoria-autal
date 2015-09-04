

<?php
$contador=0;


echo form_open('usuario/resultado');echo form_hidden('num',count($records));
foreach ($records as $row){
$contador++;
   echo form_hidden($contador,$row->id);

?>
<div class="well"> <span class="label label-primary">Questão  <?php echo sprintf('%02d',($contador))?> </span>

   <?php echo $row->enunciado;?>
    <p style="clear:both">
        <label>
            <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="a" required="true">
            a) <?php echo $row->a;?>

        </label> <br>
        <label>
            <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="b">
            b) <?php echo $row->b;?>

        </label><br>
        <label>
            <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="c">
            c) <?php echo $row->c;?>

        </label>  <br>
        <label>
            <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="d">
            d) <?php echo $row->d;?>

        </label><br>
        <label>
            <input type="radio" name="<?php echo 'quest'.$row->id;?>" value="e">
            e) <?php echo $row->e;?>

        </label> <br>

    </p>

</div>
<?php }

echo form_submit('submit','Submit');





echo form_close();
?>



