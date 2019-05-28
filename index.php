<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Seguridad Web</title>
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="icon" type="image/png" href="img/16x16_logo.png" /> </head>

<body data-target="#myNavbar" oncontextmenu="return false">

    <nav   style="background-color:green; ">
        <div class="nav-wrapper " id='cabecera'>
            <!--    <a href="#" class="brand-logo">&nbsp;<img src="img/16x16_logo.png"></a>-->
            <ul class="left hide-on-med-and-down">
                <li>
                    <a href="#"><img src="img/16x16_logo.png"><span> </span>Home</a>
                </li>
                <li><a href="http://developeryenny.es/">Desarrolladora Web</a></li>
        <!-- <li><a href="modificaciones.php">Modificaciones</a></li>
        <li><a href="bajas.php">Bajas</a></li>
        <li><a href="listado.php">Listados</a></li>-->
            </ul>
            <ul id="slide-out" class="side-nav">
                <li><a href="http://developeryenny.esy.es/encriptar-mail/">Home</a></li>
                <li><a href="http://developeryenny.es/">Desarrolladora Web</a></li>
                <!--<li><a href="consultas.php">Consultas</a></li>
        <li><a href="modificaciones.php">Modificaciones</a></li>
        <li><a href="bajas.php">Bajas</a></li>
        <li><a href="listado.php">Listados</a></li>-->
            </ul> <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a> 
            </div>
    </nav>


    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br>
            <br>
            <h1 class="header center black-text">Seguridad Web</h1>
            <div class="row center">
                <h5 class="header col s12 light">Entra tu correo</h5> </div>
            <br>
            <br> </div>
    </div>
    
    
 <!----------------------------------------------------código php -------------------------------------------------------------                           
<?php
    
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    include_once 'inc/db.inc.php';
    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
     
       if ($conexion->connect_error) {
            die("Fallo al conectar con la BBDD: " . $conn->connect_error);
        } 

    mysqli_set_charset($conexion, "utf8");
    
    //paso el valor y lo guardo en $email
    $email=$_POST["email"];
    
    $code=$_POST["code"];
    
    //lo guardo en  $vector_email y lo guardo en un str_split
    
    $vector_email = str_split($email);
    
    //print_r($vector_email); //me imprime cada dato del vector
    echo "\n";
    
    //recorro el vector   $vector_email
    foreach ($vector_email  as &$valor) {

    //crea y ejecuta en MySQL query
    $sql=("Select Símbolo, NumeroHtml from encriptar where Símbolo REGEXP '^[&$valor.]'");
   
    $result = $conexion->query($sql);
/*      echo $valor;
        echo "<br/>";*/
        
    if ($result->num_rows > 0) {
        foreach($conexion->query($sql) as $row){
            $datos[]= array(
            'NumeroHtml'=> htmlentities($row['NumeroHtml']),
            );
            
        }
       /* echo htmlentities($row['NumeroHtml']);*/
       
        settype($code, "string"); //convierto a string la variable
        $code .=  htmlentities($row['NumeroHtml']);
 
  
    }else {
    
            echo  '<div class="card-panel #fafafa grey lighten-5">No se han encontrado resultados</div>';
            

        }
  
        
    }
        


  $conexion->close();  
         
   
}
?>   
 
-------------------------------------------------------------------------------------------------------------------->
    
    <div class="container">
        <div class="section">
            <div class="row">
                <form class="col s12" id="FormCode" name="datos" action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  required>
                        </div>
                        <div class="input-field col s12">
                            <textarea id="code" name="code" class="materialize-textarea" ><?php if (isset($_POST['code'])) echo $code; ?></textarea>
                            <label for="textarea1">Encoded E-mail Address:</label>
                        </div>
                        <div class="col s12">
                         <button class="waves-effect waves-light btn" type="submit" id="btnCode">CODE<i class="material-icons right">code</i></button>
                         <button class="waves-effect waves-light btn" id="btnReset">Reset<i class="material-icons right">clear</i></button>
                       </div>
                           
                    </div>
                </form>
            </div>
            <br>
            <br>

            
         
        </div>
    </div>
                          
    
                                
    
       <footer style="background-color:green; opacity:0.70; " class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Protege tu correo</h5>
                    <p class="grey-text text-lighten-4">Encripta tu correo y ponlo en tu página web.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Antispam Mail</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Evita los corres de los hackers</a></li>
                        <!--<li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>-->
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Romanos 12:21</h5>
                    <p  class="white-text">	No seas vencido por el mal, sino vence con el bien el mal.</p>
                    <ul>
            <li><a class="white-text" href="#!">Link 4</a></li>-->
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container"> Materialize <a class="black-text text-lighten-3" href=""> Copyright © derechos de la autora2017</a> </div>
        </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
    <script src="js/materialize.js"></script>
    
    <script>
        // Initialize collapse button
        $(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        //$('.collapsible').collapsible();
    </script>
    <script>
        $('#textarea1').val('New Text');
        $('#textarea1').trigger('autoresize');

    </script>
    
<script>
                      
    $(document).ready(function(){
    $("#btnReset").click(function(){
        $.ajax({
            /*url: "index.php",
            type: "post",
            data: $("#FormCode").serialize(),*/
            success: function(data){
                $("#email").val("");
                $("#code").val("");
   
            }
        });
        return false;
    });
});

</script> 
      
</body>


         


</html>