<?php require_once "../src/views/header.php"; ?>
<link rel="stylesheet" type="text/css" href="../public/assets/css/style.css" />
<div class="login-center">
  
<h1> Advarced Transporte Voucher </h1> 

    <form method="post" action="receba.php" >
        <div class="form-group">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-10 offset-lg-1 col-sm-12">
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email" required/>
                    <br> 
                    <input type="pass" class="form-control" name="pass" placeholder="Digite sua senha" required/>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <!--<div class="col-6 offeset-3"> -->
                    <input type="submit" value="Enviar dados" class="btn btn-success col-lg-5 offset-lg-1 col-sm-12" />
                    &nbsp;
                    <input type="reset" value="Limpar dados" class="btn btn-warning col-lg-5 col-sm-12" />
                    <br><br>
                    <a href="receba.php">entrar como visitante</a>
                </div>      
            </div>
        </div>  
    </form> 
</div>

<?php require_once "../src/views/footer.php"; ?>

