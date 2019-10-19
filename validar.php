<?php 

include ("conecto.php");
$usr = $_POST["usuario"];
$clave = $_POST["pass"];

$url =$_SERVER['HTTP_REFERER'];


 $sql= "select * from usuario where usuario = '$usr' and sts = 'APR'";
                    $rc = mysqli_query($mysql,$sql);
                     if($row = mysqli_fetch_array($rc)){

                     	$clv = $row["clave"];
                     	if($clv == $clave){
                     		$id = $row["id"];
                     		$nom = $row["nombre"];
                     		$usro= $row["usuario"];
                     		$empr = $row["empresa"];
                     		$perf = $row["perfil"];


                     		session_start();

            				$_SESSION["nom"] = $nom;
            				$_SESSION["perfil"] = $perf;
            				$_SESSION["id"] = $id;
            				$_SESSION["empresa"] = $empr;	
            				$_SESSION["id"] = $id;
                          // header("location: admin.php");
                        if($perf == 1){
            					header("location: bienvenido.php");
                        }
                        elseif($perf == 2){
                           header("location: User.php");
                        }
                        else{
                            header("location: index.html");
                        }


                     	}
                     	else{

                     		echo"<script>alert ('Clave no coincide');
					window.location.href='$url';	
										 </script>";
                     	}
                     }
                     else{

                     		echo"<script>alert ('Usuario no Existe');
					window.location.href='$url';	
										 </script>";

                     }


?>