<?php include ("includes/header.php")?>
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Crear Clientes</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Crear Cliente</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="funciones/inservehiculo.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    </div>
								<div class="register-top-grid">
										<h3>INFORMACION PERSONAL</h3>
                    </div>
                    <div>
                    <div class="form-group">
                      <label>Numero de identificacion</label>
                      <input class="form-control" type="text" placeholder="Ingresar numero de identificacion" >
                    </div>
										<div>
                    <div class="form-group">
                    <div class="form-group">
                      <label>Nombres</label>
                      <input class="form-control" type="text" placeholder="Ingresar nombres">
                    </div>
                    <div class="form-group">
                      <label>Apellidos</label>
                      <input class="form-control" type="text" placeholder="Ingresar apellidos">
                    </div>    
										<div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">Direccion de correo electronico</label>
                    <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Ingrese correo electronico"><small class="form-text text-muted" id="emailHelp"></small>
                  </div>
                    </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelect1">Tipo de cliente</label>
                    <select class="form-control" id="exampleSelect1">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div>
                  <div class="form-group">
                      <label>Numero de telefono</label>
                      <input class="form-control" type="text" placeholder="Ingresar Numero de telefono" >
                    </div>
                    <div>
                  <div class="form-group  ">
                      <label>Direccion domiciliaria</label>
                      <input class="form-control" type="text" placeholder="Ingresar direccion" >
                    </div>

									
								
						</form>
					</div>
		   </div>
	  </div>
                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all"  id="">Crear</button>
                    <button class="btn btn-secundary" type="submit-all"  id="">Cancelar</button>
                    </div>
                </form>
              </div>
            </div>
            

          </div>
        </div>
      </div>
    </main>

    

<?php include ("includes/footer.php")?>
