<!DOCTYPE html>
<html lang="en">
<?php
include_once "inc/inc.sistema.php";
include_once RUTA_SISTEMA . "inc/header_sistema.php";

?>
<link rel="stylesheet" href="<?php RUTA_SISTEMA ?>css/style_login.css">
<!-- <img src="<?php RUTA_SISTEMA ?>img/img_login_bgr.png " class="img-responsive" alt="Image">

<img src="<?php RUTA_SISTEMA ?>img/logi_dos.png" class="img-responsive" alt="Image"> -->

<body>

<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">

<div class="row  ">

<form  style="" class="align-self-center-3">
<div class="form-row " role="group" aria-label="">

<div class="col form-group">
    <label for="formGroupExampleInput">Usuario</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el usuario">
  </div>
</div>

  <div class="form-row ">

  <div class="col  form-group">
    <label for="formGroupExampleInput2">Contraseña</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese la contraseña">
  </div>


  </div >

<div class="form-row ">

<div class=" col form-group" >
<button type="submit" class="btn btn-dark btn-block">Ingresar</button>

</div  >

</div>

<div class="form-row ">

<div class=" col form-group  " >
<button type="submit" class="btn btn-info btn-block" btn-block">Registrarse</button>

</div>

</div>


  </div>



</form>


</div>





</div>


<?php
// include_once("inc/inc.sistema.php");
include_once RUTA_SISTEMA . "inc/footer_sistema.php";

?>
</body>
</html>