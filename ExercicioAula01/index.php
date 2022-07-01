<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

include "./services/TabelaPrecos.php"; // Pega dados
include "./services/Message.php"; // Pega dados
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Mercearia do MrXacx</title>
        <meta charset="UTF-8">
        <meta name="author" content="MrXacx">
        <meta name="description" content="O código deve imprimir o valor total gasto na compra">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body class="bg-dark">
        <style>
            * {
                font-size: 13px;
                font-family: verdana;
                font: ##E9F1F7;
                margin: 0;

            }
            
            html{
                /* background-color: #713E5A; */
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center; 
            }
            .product{
                margin-bottom: 30px;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
            }
            .small{
                width: 160px;
            }
            h1{
                margin-top: 30px;
                color: #fefefe;
            }
            #forms{
                /* width: 60%; */
                height: 100%;
                border: 2px solide black;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center; 
                /* background-color: #4E6E58; */
            }
            .icon {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin-bottom: 10px;
            }
            .col{
                padding: 50px 0;
                width: 250px;
                margin-left: 10px;
            }
            .col:nth-child(3){
                margin-right: 10px;
            }
            /* Bootstrap */


        </style>

        <h1 class="product">Carrinho de compras</h1>


        <form id="forms" class="border bg-light" action="services/Service.php" method="get">

            <div class="product">
                <label>Data de entrega: </label>
                <input class="form-control small" type="date" name="date">
            </div>
            <div class="container product">
                <div class="row">
                    <div class="col product">
                        <img class="icon" src="assets/img/tomato.jpg" alt="Tomate">
                        <label>
                            <?php
                            echo "Tomate: R$ " . $valor["tomato"]; // Exibe valor de TabelaPrecos.php
                            ?>
                        </label>
                        <input class="form-control small" type="text" placeholder="Insira a quantidade" name="tomato">
                    </div>

                    <div class="col product">
                        <img class="icon" src="assets/img/potato.jpg" alt="Batata">
                        <label>
                            <?php
                            echo "Batata: R$ " . $valor["potato"]; // Exibe valor de TabelaPrecos.php
                            ?>
                        </label>
                        <input class="form-control small" type="text" placeholder="Insira a quantidade" name="potato">
                    </div>
                    <div class="col product">
                        <img class="icon" src="assets/img/watermelon.jpg" alt="Melancia">
                        <label>
                            <?php
                            echo "Melancia: R$ " . $valor["watermelon"]; // Exibe valor de TabelaPrecos.php
                            ?>
                        </label>
                        <input class="form-control small" type="text" placeholder="Insira a quantidade" name="watermelon">
                    </div>
                </div>
            </div>

            <div class="product">
                <input class="small btn btn-success" type="submit">
            </div>
            <div class="alert alert-success" >
            <?php
            echo obterMessage();
            ?>
            </div>
        </form>
    </body>
</html>