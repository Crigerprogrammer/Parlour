<?php 
require ("conexion.php");

if(isset($_POST['cui'])){
    $cui = $_POST['cui'];
    $promocion = $_POST['promocion'];
    $movimiento = '1';
   
    $sql = "INSERT INTO MOV_SUSCRIPCIONES (CUI, COD_PROMOCION, COD_MOVIMIENTO)
            VALUES('".$cui."', '".$promocion."','".$movimiento."')";
    $statement = $conn->prepare($sql);

    if($statement->execute()){
        $mensaje = "COMPRA REGISTRADA";
        echo '<div class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Gracias por confiar en nosotros!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Compra realizada :) </p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">OK</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
            </div>
          </div>
        </div>
      </div>'
        
    }
}
