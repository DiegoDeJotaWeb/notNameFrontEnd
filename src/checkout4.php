<?php include "superior.php";?>


    <div id="content">
        <div class="container">
            <div class="row">



                <div class="col-md-9">

                    <div class="card">
                        <form method="post" action="checkout4.php">
                            <h1>Checkout - Revisão do pedido</h1>
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><a href="#"><i class="fas fa-map-marker"></i><br>Endereço</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fas fa-truck"></i><br>Método de Entrega</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="far fa-money-bill-alt"></i><br>Método de pagamento</a>
                                </li>
                                <li class="active"><a href="#"><i class="fas fa-eye"></i><br>Revisão da encomenda</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Product</th>
                                                <th>Quantity</th>
                                                <th>Unit price</th>
                                                <th>Discount</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="" alt="Aqui vai a foto">
                                                    </a>
                                                </td>
                                                <td><a href="#">Nome do Produto 1</a>
                                                </td>
                                                <td>2</td>
                                                <td>R$123.00</td>
                                                <td>R$0.00</td>
                                                <td>R$246.00</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="#">
                                                        <img src="" alt="Aqui vai a foto">
                                                    </a>
                                                </td>
                                                <td><a href="#">Nome do Produto 2</a>
                                                </td>
                                                <td>1</td>
                                                <td>R$200.00</td>
                                                <td>R$0.00</td>
                                                <td>R$200.00</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="5">Total</th>
                                                <th>R$446.00</th>
                                            </tr>
                                        </tfoot>
                                    </table>

                                </div>

                            </div>


                            <div class="card-footer">
                                <div class="pull-left">
                                    <a href="checkout3.php" class="btn btn-default"><i class="fa fa-chevron-left"></i>Voltar ao método de pagamento</a>
                                </div>
                                <div class="pull-right">
                                    <button type="submit" class="btn btn-primary">Fazer um pedido<i class="fa fa-chevron-right"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>



                </div>


                <div class="col-md-3">

                    <div class="card">
                        <div class="card-header">
                            <h3>Resumo do pedido</h3>
                        </div>
                        <p class="text-muted">Envio e custos adicionais são calculados com base nos valores que você inseriu.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Subtotal do pedido</td>
                                        <th>R$446.00</th>
                                    </tr>
                                    <tr>
                                        <td>Envio e manipulação</td>
                                        <th>R$10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Imposto</td>
                                        <th>R$0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>R$456.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
    <?php include_once "inferior.php";?>
