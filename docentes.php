<?php 
include " include/conexión.php ";
incluir " incluir/busquedas.php ";
include " include/verificar_sesion.php ";
?>
<!DOCTYPEhtml >
< html  lang =" es " >
  < cabeza >
    < meta  http-equiv =" Tipo de contenido " content =" text/html; charset=UTF-8 " >
    <!-- Meta, título, CSS, favicons, etc. -->
    < juego de caracteres meta  =" utf-8 " >
    < meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >
    < meta  name =" viewport " content =" ancho=ancho-del-dispositivo, escala-inicial=1 " >
    < título > ¡Docentes! | </ título >
    <!-- Arranque -->
    < link  href =" Gentella/proveedores/bootstrap/dist/css/bootstrap.min.css " rel =" hoja de estilo " >
    <!-- Fuente Impresionante -->
    < link  href =" Gentella/vendors/font-awesome/css/font-awesome.min.css " rel =" hoja de estilo " >
    <!-- NProgreso -->
    < link  href =" Gentella/proveedores/nprogress/nprogress.css " rel =" hoja de estilo " >
    <!-- Verificar -->
    < link  href =" Gentella/vendors/iCheck/skins/flat/green.css " rel =" hoja de estilo " >
    <!-- Tablas de datos -->
    < link  href =" Gentella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css " rel =" hoja de estilo " >
    < link  href =" Gentella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css " rel =" hoja de estilo " >
    < link  href =" Gentella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css " rel =" hoja de estilo " >
    < link  href =" Gentella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css " rel =" hoja de estilo " >
    < link  href =" Gentella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css " rel =" hoja de estilo " >

    <!-- Estilo de tema personalizado -->
    < link  href =" Gentella/build/css/custom.min.css " rel =" hoja de estilo " >
  </ cabeza >
  < clase de cuerpo  =" nav-md " >
    < div  class =" cuerpo del contenedor " >
      < clase div  =" contenedor_principal " >
        <?php  incluye " incluir/menu.php " ?>  
        <!-- Menú en la parte superior -->
        <!-- contenido de la página -->
        < div  clase =" right_col " rol =" principal " >
        < div  clase =" fila " >
              < clase div  =" col-md-12 col-sm-12 col-xs-12 " >
                < clase div  =" x_panel " >
                  < clase div  =" x_title " >
                    < h2 > Relación de Docentes </ h2 >
                    < ul  class =" nav navbar-right " >
                      < li >
                        < a  href =" RegistroDocente.php " class =" btn btn-success " > Agregar Nuevo </ a >
                      </ li >
                    </ ul >
                    < div  clase =" solución clara " > </ div >
                  </ div >
                  < clase div  =" contenido_x " >
                    
                    < table  id =" ejemplo " class =" table table-rayed table-bordered " >
                      < cabeza >
                        < tr >
                          < th > Identificación </ th >
                          < th > DNI </ th >
                          < th > APELLIDOS Y NOMBRES </ th >
                          < th > FECHA DE NACIMIENTO </ th >
                          < th > DIRECCION </ th >
                          < th > CORREO </ th >
                          < th > TELÉFONO </ th >
                          < th > DNI GENERO </ th >
                          < th > NIVEL DE EDUCACION </ th >
                          < th > CONDICION LABORAL </ th >
                          < th > ID DE CARGA </ th >
                          < th > Acciones </ th >
                        </ tr >
                      </ cabeza >
                      < cuerpo >
                        <?php 
                        $ b_docente = mostrarDocente( $ conexion );
                        while ( $ res_b_docente = mysqli_fetch_array ( $ b_docente )) {
                        ?>
                        < tr >
                          < td > <?php  echo  $ res_b_docente [ 'id' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'dni' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'apellidos_nombres' ];  ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'fecha_nac' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'direccion' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'correo' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'telefono' ];  ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'id_genero' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'nivel_educacion' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'cond_laboral' ]; ?> </ td >
                          < td > <?php  echo  $ res_b_docente [ 'id_cargo' ]; ?> </ td >
                          < td >
                            < a  href =" EditarDocente.php?id= <?php  echo  $ res_b_docente [ 'id' ]; ?> " class =" btn btn-primary " > Editar </ a >
                            < a  href =" OperacionEliminar/EliminarDocente.php?id= <?php  echo  $ res_b_docente [ 'id' ]; ?> " class =" btn btn-danger " > Eliminar </ a >
                          </ td >
                        </ tr >
                        <?php
                        }
                        ?>
                        
                      </ tcuerpo >
                    </ mesa >
                  </ div >
                </ div >
              </ div >
          </ div >
        </ div >
        <!-- /contenido de la página -->
        <!-- contenido del pie de página -->
        < pie de página >
          < div  class =" tirar a la derecha " >
            Gentelella - Plantilla de administración Bootstrap por < a  href =" https://colorlib.com " > Colorlib </ a >
          </ div >
          < div  clase =" solución clara " > </ div >
        </ pie de página >
        <!-- /contenido del pie de página -->
      </ div >
    </ div >
    
    <!-- jQuery -->
    < script  src =" Gentella/vendors/jquery/dist/jquery.min.js " > </ script >
    <!-- Arranque -->
    < script  src =" Gentella/vendors/bootstrap/dist/js/bootstrap.min.js " > </ script >
    <!-- Clic rápido -->
    < script  src =" Gentella/vendors/fastclick/lib/fastclick.js " > </ script >
    <!-- NProgreso -->
    < script  src =" Gentella/proveedores/nprogress/nprogress.js " > </ script >
    <!-- Verificar -->
    < script  src =" Gentella/proveedores/iCheck/icheck.min.js " > </ script >
    <!-- Tablas de datos -->
    < script  src =" Gentella/vendors/datatables.net/js/jquery.dataTables.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-buttons/js/buttons.flash.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-buttons/js/buttons.html5.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-buttons/js/buttons.print.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js " > </ script >
    < script  src =" Gentella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js " > </ script >
    < script  src =" Gentella/vendors/jszip/dist/jszip.min.js " > </ script >
    < script  src =" Gentella/vendors/pdfmake/build/pdfmake.min.js " > </ script >
    < script  src =" Gentella/vendors/pdfmake/build/vfs_fonts.js " > </ script >

    <!-- Scripts de temas personalizados -->
    < script  src =" Gentella/build/js/custom.min.js " > </ script >
    < guión >
    $ ( documento ) . listo ( función ( )  {
    $ ( '#ejemplo' ) . tabla de datos ( {
      "idioma" : {
    "procesando" : "Procesando..." ,
    "lengthMenu" : "Mostrar _MENU_ registros" ,
    "zeroRecords" : "No se encontraron resultados" ,
    "emptyTable" : "Ningún dato disponible en esta tabla" ,
    "sInfo" : "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros" ,
    "infoEmpty" : "Mostrando registros del 0 al 0 de un total de 0 registros" ,
    "infoFiltered" : "(filtrado de un total de _MAX_ registros)" ,
    "buscar" : "Buscar:" ,
    "infoMiles" : "," ,
    "loadingRecords" : "Cargando..." ,
    "paginar" : {
        "primero" : "Primero" ,
        "último" : "Último" ,
        "siguiente" : "Siguiente" ,
        "anterior" : "Anterior"
    } ,
      }
    } ) ;

    }  ) ;
    </ guión >
  </ cuerpo >
</ html >