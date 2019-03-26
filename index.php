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
    <link href="css/index.css" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="https://img.icons8.com/metro/26/000000/memory-slot.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <style>
        body {font-family: "Lato", sans-serif}
        .mySlides {display: none}
    </style>
    <body>

        <!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->


        <!-- Page content -->
        <div class="w3-content" style="max-width:2000px">

            <!-- Automatic Slideshow Images -->
            <div class="mySlides w3-display-container w3-center">
                <img src="resources/IM1.jpg" style="width:100%">
                <div class="w3-display-topleft w3-container w3-text-black w3-padding-32 w3-hide-small"> 
                    <h3 class="letraPreta">Cabum!</h3>
                    <h3 class="letraPreta"><b>Tenha o melhor setup !!</b></h3>  
                </div>
            </div>
            <div class="mySlides w3-display-container w3-center">
                <img src="resources/IM2.jpg" style="width:100%">
                <div class="w3-display-topleft w3-container w3-text-black w3-padding-32 w3-hide-big">         
                </div>
            </div>
            

            <!-- The Band Section -->
            <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
                <h2 class="w3-wide">Cabum!</h2>
                <p class="w3-opacity"><i>O melhor Stup que você pode montar!</i></p>
                
                <div class="w3-row w3-padding-32">
                    
                    <a class="btn btn-primary" href="bCadastrarClientes.php" >Cadastre-se aqui</a><br/><br/>

                    <h3><b>Alguns produtos</b></h3><br/>
                    <div>
                    <div class="row" id="divVenda" align="left">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a><img class="card-img-top" src="resources/pc1.jpg" alt="" ></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p href="#">Pc Gamer Alfatec I7  <br/> 16gb 1tb Gtx 1070</p>
                                    </h4>
                                    <h5>R$2.899,99</h5>                                
                                </div>
                                <a class="btn btn-primary" onClick="alert('Comprado com sucesso!!'); return true">Comprar</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="divVenda" align="left">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a><img class="card-img-top" src="resources/pc2.jpg" alt="" ></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p href="#">PC Gamer EasyPC Extreme <br/>Intel Core i7 16GB </p>
                                    </h4>
                                    <h5>R$3.500,00</h5>                                
                                </div>
                                <a class="btn btn-primary" onClick="alert('Comprado com sucesso!!'); return true">Comprar</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="divVenda" align="left">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a><img class="card-img-top" src="resources/pc3.jpg" alt="" ></a>
                                <div class="card-body">
                                    <h4 class="card-title">
                                        <p href="#">PC GAMER HUNTER Intel I5 <br/>8gb DDR4 Fury Hd 1 TB </p>
                                    </h4>
                                    <h5>R$4.000,00</h5>                                
                                </div>
                                <a class="btn btn-primary" onClick="alert('Comprado com sucesso!!'); return true">Comprar</a>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                    
                    
                    
                    <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

            </div>
            <!-- /.row -->



        </div>
    </div>


    <!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
    <a target="_blank" class="fa fa-facebook-official w3-hover-opacity"></a>
    <a target="_blank" class="fa fa-instagram w3-hover-opacity"></a>
    <p href="" class="w3-medium">Powered by SENAI - Fundão</p>
</footer>

<script>
    // Automatic Slideshow - change image every 4 seconds
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {
            myIndex = 1
        }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 3500);
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }

    // When the user clicks anywhere outside of the modal, close it
    var modal = document.getElementById('ticketModal');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>



<?php
// put your code here
?>
</body>
</html>
