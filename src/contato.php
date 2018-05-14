<?php include "superior.php";?>


    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Contato</li>
                        </ol>
                    </nav>

                </div>

                <div class="col-md-3">
                    <div class="card card-default sidebar-menu">

                        <div class="card-heading">
                            <h3 class="cardcard-title text-center">Titulo</h3>
                        </div>

                        <div class="card-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li>
                                    <a href="contato.php">Contato</a>
                                </li>
                                <li>
                                    <a href="faq.php">FAQ</a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="banner">
                            <a href="#">
                            <img src="assets/logo.png" alt="sales 2014" class="img-responsive">
                        </a>
                        </div>
                    </div>



                </div>


                <div class="col-md-9">


                    <div class="card" id="contact">
                        <h1>Contato</h1>

                        <p class="lead">Você está curioso sobre alguma coisa? Você tem algum tipo de problema com nossos produtos?</p>
                        <p>Por favor, não hesite em contactar-nos, o nosso centro de atendimento ao cliente está trabalhando para você 24/7.</p>

                        <hr>

                        <div class="row">
                            <div class="col-sm-4">
                                <h3><i class="fa fa-map-marker"></i> Endereço</h3>
                                <p>Rua tal
                                    <br>São Paulo - SP
                                    <br>nº 666
                                    <br>
                                    <strong>Brasil</strong>
                                </p>
                            </div>

                            <div class="col-sm-4">
                                <h3><i class="fa fa-phone"></i> Central de Atendimento</h3>
                                <p class="text-muted">Este número é gratuito se ligar para a Not, caso contrário, aconselhamos que utilize a forma de comunicação eletrónica.</p>
                                <p><strong>+11 9999 9999</strong>
                                </p>
                            </div>

                            <div class="col-sm-4">
                                <h3><i class="fa fa-envelope"></i>Suporte eletrônico</h3>
                                <p class="text-muted">Por favor, sinta-se livre para escrever um e-mail para nós.</p>
                                <p><strong><a href="mailto:">contato@not.com.br</a></strong></p>

                            </div>

                        </div>


                        <hr>

                        <div id="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5100311127194!2d-46.727594685445!3d-23.44206028474223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cefbbe9184af9f%3A0x785d4da8669f6671!2sEtec+Jaragu%C3%A1!5e0!3m2!1spt-BR!2sbr!4v1525977586152" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                        <hr>
                        <h2>Formulário de Contato</h2>

                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="primeiroNome">Primeiro nome</label>
                                        <input type="text" class="form-control" id="primeiroNome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="ultimoNome">Último nome</label>
                                        <input type="text" class="form-control" id="ultimoNome">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="assunto">Assunto</label>
                                        <input type="text" class="form-control" id="assunto">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mensagem">Mensagem</label>
                                        <textarea id="mensagem" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i>Enviar mensagem</button>

                                </div>
                            </div>

                        </form>


                    </div>

                </div>
            </div>

        </div>

    </div>


    <?php include_once "inferior.php";?>
