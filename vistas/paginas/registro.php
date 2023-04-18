<div>
    <form action="" method="post">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="registroNombre">

            <label for="email">Email</label>
            <input type="email" id="email" name="registroEmail">

            <label for="pwd">Contraseña</label>
            <input type="password" id="pwd" name="registroPassword">
        </div>

        <?php
        
        $registro = ControladorFormularios::ctrRegistro();
        
        ?>
        <input type="submit" value="enviar" class="enviar" >

    </form>
</div>