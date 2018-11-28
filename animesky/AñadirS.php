<form id="Login" action="InformacionS.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" name="nombre" placeholder="Nombre de la serie">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" required="required" name="info" placeholder="Descripcion de la serie">
        </div>
        <div class="form-group">
                <input type="text" class="form-control" required="required" name="idioma" placeholder="Idioma ">
        </div>

        <div class="form-group">
                 <input type="text" class="form-control" required="required" name="valor" placeholder="Valoracion de la serie">
        </div>
        <div class="form-group">
                 <input type="text" class="form-control" required="required" name="genero" placeholder="Genero de la serie">
        
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" required="required" name="fechai" placeholder="Fecha de inicio">
               </div>
               <div class="form-group">
                    <input type="text" class="form-control" required="required" name="fechaf" placeholder="Fecha de clausura">
           
               </div>

        

        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" value="Volver" onclick="location='index.php'"    />


    </form