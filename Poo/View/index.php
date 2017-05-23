<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
<a href="mostrarCartaoTravel.php">Travel</a>
<a href="../mostrarTelefone.php">Travel</a>
            <?php
                include_once '../Model/Veiculo.php';
                //require 'Model/Veiculo.php';
                
                $carro = new Veiculo("Gol","branco",2015);

                $carro->ligar();
                
                echo "<h3> Mostrando os metodos</h3>";
                $carro->acelerar();

                echo "<h3> Mostrando com var_dump</h3>";
                var_dump($carro);

                echo "<h3> Mostrando com print_r</h3>";
                print_r($carro);
                
                $moto = new Veiculo("R1","preta",2017);
                
            
                $moto->ligar();

                echo "<h3> Mostrando com var_dump</h3>";
                var_dump($moto);

                echo "<h3> Mostrando com print_r</h3>";
                print_r($moto);
                
                echo "<h3>Mostrando com echo</h3>";
                
                echo "Eu tenho um carro modelo {$carro->getNome()}, Cor {$carro->getCor()}, Ano{$carro->getAno()}, Botao {$carro->getBotao()}";
                
                echo "Eu tenho uma moto modelo {$moto->getNome()}, Cor {$moto->getCor()}, Ano{$moto->getAno()}, Botao {$moto->getBotao()}";
                
                
                $onibus = new Veiculo("escolar","amarelo",2017);
                
                echo "<h3>Mostrando com var_dump </h3>";
                var_dump($onibus);
                
                echo "<h3>Mostrando com print_r</h3>";
                print_r($onibus);
                
                echo "<h3>Mostrando o obejto onibus com echo</h3>";
                echo "Eu tenho um onibus modelo {$onibus->getNome()}, Cor {$onibus->getCor()}, Ano{$onibus->getAno()}, Botao{$onibus->getBotao()}";
                
            ?>
        </pre>
    </body>
</html>
