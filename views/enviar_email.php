<!DOCTYPE html>
<html>
    <body>

        <h2>Enviando em E-mail com Codeigniter</h2>
        <?php echo form_open('User/enviar_email'); ?>
        E-mail:<br>
        <input type="text" name="email"><br>
        <input type="submit" value="Enviar">

        <?php echo form_close(); ?>

    </body>
</html>

