<?php

use Database\Database;

 require_once "../src/views/header_nav.php"; ?>

<?php
    require_once "../src/model/Database.php";
    $db = new Database();

   $resultDb = $db->select(
        "SELECT * FROM pedidos;"
    );

    //var_dump($resultb);
    
?>
 <div class="text-center mt-4">
                <h2> Minha recarga </h2> <br> 
 </div>

 <div class="container text">
 <h6>Paulo André Rocha Donini <br> 03252000464510 </h6> <br><br><br>
 </div>

 <div class="container text">
 <h6>Saldo estimado ---------------------------------------------------------------------------------------------------------------------  Último uso </h6>
 </div> 

 <div class="container text">
 <h6> R$: ***,** ------------------------------------------------------------------------------------------------------------------------ 02/03/2022 13:34:32</h6> </div> <br>

 <div class="text-center">

 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg/280px-Link_pra_pagina_principal_da_Wikipedia-PT_em_codigo_QR_b.svg.png" alt="qrcode">
 </div> <br>



    <div class="row mb-4">
        <button type="button" class="btn btn-primary col-3 offset-3 col-4 offset-4" value="Enviar" onclick="window.location.href='recebe.php'" >Recarregar</button>
    </div>


 