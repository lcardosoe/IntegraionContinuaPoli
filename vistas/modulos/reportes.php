<?php

if($_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

 <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->

    <section class="content-header">

      <h1>

        Reporte de Venta

      </h1>

      <ol class="breadcrumb">

        <li><a href="inicio"><i class="fa fa-dashboard"></i>Inico</a></li>
        <li class="active">Reporte de Venta</li>

      </ol>
      
    </section>

    <section class="content">

      <div class="box">

        <div class="box-header with-border">

        <div class="input-group">

          <button type="button" class="btn btn-default" id="daterange-btn2">
           
            <span>
              <i class="fa fa-calendar"></i> Rango de fecha
            </span>

            <i class="fa fa-caret-down"></i>

          </button>

        </div>

          <?php

           if(isset($_GET["fechaInicial"])){


            echo' <a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';
            
           }else{

             echo' <a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';

           }



          ?>

          <div class="box-tools pull-right">
            
            <button class="btn btn-success" style="margin-top: 5px;">Descargar reporte en Ecxel</button>
          </div>

        </div>

             </a>

        <div class="box-body">

          <div class="row">
            
            <div class="col-xs-12">
               
               <?php

                 include "reportes/grafico-ventas.php";

               ?>

            </div>

            <div class="col-md-6 col-xs-12">
              
              <?php

                 include "reportes/productos-mas-vendidos.php";

               ?>

            </div>

            <div class="col-md-6 col-xs-12">
              
              <?php

                 include "reportes/vendedores.php";

               ?>

            </div> 


            <div class="col-md-6 col-xs-12">
              
              <?php

                 include "reportes/compradores.php";

               ?>

            </div>                       

          </div>
          

        </div>

        
      </div>
      

    </section>
    
  </div>
  