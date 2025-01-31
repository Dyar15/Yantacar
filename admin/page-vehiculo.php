<?php

    require_once 'config/config.php';
    require_once 'config/clase_sql.php';

    # Objeto para heredar | La variable $clase_cli hereda todo de la Clase_sql
    $clase_ve = new Clase_sql();
    $result_mod = $clase_ve-> ConsultaModelos();
?>
<?php 
include ("includes/header.php")
?>

<main class="app-content">

      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Formulario publicar Vehiculo</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Vehiculo</li>
          <li class="breadcrumb-item"><a href="#">Publicar Vehiculo</a></li>
        </ul>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="tile">
            <div class="row">
              <div class="col-lg-12">
                <form action="funciones/inservehiculo.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label class="col-form-label" for="nummatricula">Ingrese numero de matricula</label>
                        <input class="form-control text-uppercase" type="text" name="nummatricula" id="nummatricula" placeholder="AAA 0123" required>
                                <div class="invalid-feedback">Campo vacío Ingrese matricula</div>

                   </div>
                   <div class="form-group">
                    <label for="nommodelo">Modelo</label>
                    <select class="form-control" name="nommodelo" id="nommodelo">
                    <?php while($fic = $result_mod->fetch_assoc()){?>
                        <option value="<?php echo $fic['NOM_MOD']?>"><?php echo $fic['NOM_MOD']?></option>
                    <?php } ?>
                                                    
                    </select>
                  </div>
                  <div class="form-group">
                        <label class="col-form-label" for="kvehiculo">Ingrese kilometraje vehiculo</label>
                        <input class="form-control" type="text" name="kvehiculo" id="kvehiculo" placeholder="Kilometraje" required>
                                <div class="invalid-feedback">Campo vacío Ingrese vehiculo</div>
                   </div>
                   <div class="form-group">
                        <label class="col-form-label" for="cvehiculo">Ingrese color Vehiculo</label>
                        <input class="form-control" type="text" name="cvehiculo" id="cvehiculo" placeholder="Color" required>
                                <div class="invalid-feedback">Campo vacío Ingrese Color</div>
                   </div>
                    <div class="form-group">
                    <h5 >Seleccionar imagen</h5>
                        <input type="file" name="file" id="file" accept=".jpg,.png,.jpeg" >
                        <p></p>
                        <div id="preview" class="styleImage"></div>
                    </div>
                    <div class="tile-footer">
                    <button class="btn btn-primary" type="submit-all"  id="">Enviar</button>
                    </div>
              </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </main>
<script>
  document.getElementById('file').onchange=function(e){
    let reader=new FileReader();
    reader.readAsDataURL(e.target.files[0]);
    reader.onload=function(){
        let preview=document.getElementById('preview');
            image=document.createElement('img');
            image.src=reader.result;
            image.style.width="200px";
            preview.innerHTML='';
            preview.append(image);
    }
}
</script>
<?php include ("includes/footer.php")?>
