<form id="registro" action="registro.html" method="post">
        <div class="form-group">
            <input type="text" class="form-control" required="required" name="name" placeholder="Usuari">
        </div>

        <div class="form-group">
            <input type="password" class="form-control" required="required" name="password" placeholder="Contrasenya">
        </div>

        <div class="form-group">
          <div class="checkbox">
              <label><input type="checkbox" name="rememberMe" id="rememberMe" value="remember">
              Recorda'm en aquest ordinador
              </label>
          </div>
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

    </form