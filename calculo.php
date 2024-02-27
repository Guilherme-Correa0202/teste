<?php
$nome = $_GET['nome'];
$idade = $_GET['idade'];
$salario = $_GET['salario'];
$INSS = 0;
$IRNS = 0;
if($salario<=1.412){
    $INSS = $salario*0.075;
}
else{
    if($salario<= 2666.68){
        $INSS = $salario*0.09;    }
        else{
            if($salario<=4000.03){
                $INSS = $salario*0.12; 
            }
            else{
                if($salario<= 7786.02){
                   $INSS = $salario*0.14; 
                }
            }
        }
} 
if($idade < 65){
if($salario <=  2112){
    $IRNS = "Isento";
}
else{
    if($salario <=2826.65){
        $IRNS= ($salario - $INSS)* 0.075 - 158.40;
    }
    else{
        if($salario <=3751.05){
            $IRNS= ($salario - $INSS)* 0.15 - 370.40;
        }
        else{
            if($salario <=4664.68){
                $IRNS= ($salario - $INSS)* 0.225 - 651.73;
            }
            else{
                if($salario <=4664.68){
                    $IRNS= ($salario - $INSS)* 0.275 - 884.96;
                }
            }
        }
    }
}
}
else{
    $IRNS = "isento";
}
echo "INSS: R$". $INSS. "<BR>". "IRNS: ". $IRNS;
?>