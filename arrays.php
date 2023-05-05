
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title>PEDROGAY</title>
    </head>
    <body>
        <section>
            <h1>ARRAYS</h1>
						<!-- É isso, acredito que funcione certinho. Agora sim kakaak -->
            <?php
								$arrPar  = []; 
                $arrImpar = [];
                for($incremento  = 0; $incremento <= 11; $incremento++){	
                  if($incremento % 2 == 0){
                  	$arrPar[$incremento] = $incremento; 
                	}else{
                  	$arrImpar[$incremento] = $incremento;
                  }
                
                }
                print_r($arrPar);
                echo"<br>";
                print_r($arrImpar)
						?>
        </section>
    </body>
</html>