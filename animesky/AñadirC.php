<form id="Login" action="InformacionC.php" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" name="numerocap" placeholder="Numero del capitulo">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" required="required" name="numtempo" placeholder="Nº Temporadas">
        </div>
        <div class="form-group">
                <input type="text" class="form-control" required="required" name="titulocap" placeholder="Titulo ">
        </div>

        <div class="form-group">
                 <input type="text" class="form-control" required="required" name="sinopsis" placeholder="Sinopsis">
        </div>
        <div class="form-group">
                 <input type="text" class="form-control" required="required" name="duracion" placeholder="Duracion">
        
            </div>
            <div class="form-group">
                    <input type="text" class="form-control" required="required" name="valoracion" placeholder="Valoracion">
               </div>
              
               

        

        <button type="submit" class="btn btn-primary">Enviar</button>
        <input type="button" value="Volver" onclick="location='index.php'"    />


    </form