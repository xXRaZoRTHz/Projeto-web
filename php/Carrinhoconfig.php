<?php

session_start();

?>
                    <!-- logica carrinho  para mostras itens-->
                    <?php
                        $items = array(['nome'=>'eutanasia','imagem'=>'item1.png','preco'=>'150'],
                                ['nome'=>'serviços de reprodução','imagem'=>'item2.jpg','preco'=>'325'],
                                ['nome'=>'Internação','imagem'=>'item3.png','preco'=>'100']);


                            foreach ($items as $key => $value) {
                        ?>
                        <div class="Produto">
                        <img srcs="<?php echo $value['imagem']?>"/>
                        <a href="?adicionar=<?php echo $key ?>"> Adicionar ao carrinho!</a>

                        </div>

                    <?php
                            }   
                    ?>

                    <?php
                        if(isset($_GET['adicionar'])){
                            //adicionar ao carrinho
                            $idProduto = (int) $_GET['adicionar'];
                            if(isset($items[$idProduto])){
                                if(isset($_SESSION['carrinho'][$idProduto])){
                                    $_SESSION['carrinho'][$idProduto]['quantidade']++;
                                }else{
                                    $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,'nome' =>$items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco']);
                                }
                                echo '<script>alert("O item foi adicionado ao carrinho");</script>';
                            }else{
                                die('Você não pode adicionar um item que não existe.');
                            }
                        }
                    ?>
                    <!-- fim da parte que mostra os items -->

                    <!-- Parte que salva os objetos -->
                    <h2 class="title">Carrinho</h2>

                        <?php
                        if (isset($_GET['remover'])) {
                            // Remover o item da sessão
                            unset($_SESSION['carrinho'][$_GET['remover']]);
                        }

                        foreach ($_SESSION['carrinho'] as $key => $value) {
                            echo '<div class="carrinho-item">';
                            echo '<P>Nome: '.$value['nome'].' | Quantidade: ' .$value['quantidade'].' | Preço: €'.($value['quantidade']*$value['preco']).',00';
                            echo ' | <a href="?remover='.$key.'">Remover</a></p>';
                            echo '<hr>';
                            echo '</div>';
                        }
                        ?>
                        <!-- fim da parte que mostra os valores, pode ser mudado o visual e colocado na pagina do carrinho-->