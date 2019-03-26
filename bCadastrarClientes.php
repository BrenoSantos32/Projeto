<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html lang="pt">
    <title>Cabum!</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="libs/bs/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="css/cssUser.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="shortcut icon" href="https://img.icons8.com/metro/26/000000/memory-slot.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>




    <!-- Page content -->
    <div class="w3-content" style="max-width:2000px;margin-top:0px">



        <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="leftMenu">
            <button onclick="closeLeftMenu()" class="w3-bar-item w3-button w3-large">Fechar &times;</button>
            <a href="index.php" class="w3-bar-item w3-button">Início</a>
            <a href="bClientesCadastrados.php" class="w3-bar-item w3-button">Clientes cadastrados</a>
            <a href="bEditarClientes.php" class="w3-bar-item w3-button">Editar clientes</a>
            <a href="bExcluirClientes.php" class="w3-bar-item w3-button">Excluir clientes</a>
         
        </div>


        <div class="w3-teal">
            <button id="aaa" class="w3-button w3-teal w3-xlarge w3-left " onclick="openLeftMenu()">&#9776;</button>
            <div class="w3-container">
                <h1>Cadastrar usuário</h1>
            </div>
        </div>

        <script>
            function openLeftMenu() {
                document.getElementById("leftMenu").style.display = "block";
            }
            function closeLeftMenu() {
                document.getElementById("leftMenu").style.display = "none";
            }

            function openRightMenu() {
                document.getElementById("rightMenu").style.display = "block";
            }
            function closeRightMenu() {
                document.getElementById("rightMenu").style.display = "none";
            }
        </script>



        <div class="formulario">
            <br/>
            <h2 id="former" align="center">Formulário</h2>
            <form action="" method="post">

                <div class="form-group">
                    <label for="lblDataCadastro" id="title">Data de cadastro</label>
                    <input type="text"
                           class="form-control iptDataCadastro"
                           id="former"
                           name="dataCadastro"
                </div>

                <div class="form-group">
                    <label for="lblDataNascimento" id="title">Data de Nascimento</label>
                    <input type="text"
                           class="form-control iptDataNascimento"
                           id="former"
                           name="dataNascimento"
                </div>

                <div class="form-group">
                    <label for="lblNome" id="title">Nome</label>
                    <input type="text"
                           class="form-control iptNome"
                           id="former"
                           name="nome"
                </div>

                <div class="form-group">
                    <label for="lblRg" id="title">Rg</label>
                    <input type="text"
                           class="form-control iptRg"
                           id="former"
                           name="rg"
                </div>

                <div class="form-group">
                    <label for="lblTelefone" id="title">Telefone</label>
                    <input type="text"
                           class="form-control iptTelefone"
                           id="former"
                           name="telefone"
                </div>

                <div class="form-group">
                    <label for="lblEmail" id="title">Email</label>
                    <input type="text"
                           class="form-control iptEmail"
                           id="former"
                           name="email"
                </div>

                <div class="form-group">
                    <label for="lblEndereco" id="title">Endereço</label>
                    <input type="text"
                           class="form-control iptEndereco"
                           id="former"
                           name="endereco"
                </div>

                <div class="form-group">
                    <label for="lblBairro" id="title">Bairro</label>
                    <input type="text"
                           class="form-control iptBairro"
                           id="former"
                           name="bairro"
                </div>

                <div class="form-group">
                    <label for="lblCidade" id="title">Cidade</label>
                    <input type="text"
                           class="form-control iptCidade"
                           id="former"
                           name="cidade"
                </div>

                <div class="form-group">
                    <label for="lblEstado" id="title">Estado</label>
                    <input type="text"
                           class="form-control iptEstado"
                           id="former"
                           name="estado"
                </div>

                <div class="form-group">
                    <label for="lblPais" id="title">Pais</label>
                    <input type="text"
                           class="form-control iptPais"
                           id="former"
                           name="pais"

                </div><br/>

                <div class="form-group">
                    <button type="submit"
                            id="enviar"
                            class="btn btn-primary"
                            name="enviar">Enviar </button>
                </div>

            </form>
        </div>
    </div>




    <div class="quadroResposta" style=" margin-left: 5px; width: 700px; ">
        <?php
        require_once('class/classCliente.php');
        $objCliente = new classCliente();

        if (isset($_POST['enviar'])) {


            $objCliente->setDataCadastro($_POST['dataCadastro']);
            $objCliente->setDataNascimento($_POST['dataNascimento']);
            $objCliente->setNome($_POST['nome']);
            $objCliente->setRg($_POST['rg']);
            $objCliente->setTelefone($_POST['telefone']);
            $objCliente->setEmail($_POST['email']);
            $objCliente->setEndereco($_POST['endereco']);
            $objCliente->setCidade($_POST['cidade']);
            $objCliente->setBairro($_POST['bairro']);
            $objCliente->setEstado($_POST['estado']);
            $objCliente->setPais($_POST['pais']);

            $objCliente->inserirCliente($objCliente);
        }
        $tableCliente = $objCliente->retCliente();
        $max = sizeof($tableCliente);

        echo '<hr/>';
        for ($i = 0; $i < $max; $i++) {
            echo"Código do cliente: " . $tableCliente[$i]["codCliente"];
            echo"<br/> Dia do cadastro: " . $tableCliente[$i]["dataCadastro"];
            echo"<br/> Data de nascimento: " . $tableCliente[$i]["dataNascimento"];
            echo"<br/> Nome: " . $tableCliente[$i]["nome"];
            echo"<br/> RG: " . $tableCliente[$i]["rg"];
            echo"<br/> Telefone: " . $tableCliente[$i]["telefone"];
            echo"<br/> E-mail: " . $tableCliente[$i]["email"];
            echo"<br/> Endereço: " . $tableCliente[$i]["endereco"];
            echo"<br/> Bairro: " . $tableCliente[$i]["bairro"];
            echo"<br/> Cidade: " . $tableCliente[$i]["cidade"];
            echo"<br/> Estado: " . $tableCliente[$i]["estado"];
            echo"<br/> País: " . $tableCliente[$i]["pais"] . "<hr/>";
        }
        echo '';
        ?>            
    </div>
</div>



<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <a href="https://www.facebook.com/caocarinhobh" target="_blank" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a href="https://www.instagram.com/caocarinhobh/" target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
    <p href="" class="w3-medium">Powered by SENAI - Fundão</p>
</footer>



<script>
</script>

</body>
</html>



<?php
// put your code here
?>
</body>
</html>


