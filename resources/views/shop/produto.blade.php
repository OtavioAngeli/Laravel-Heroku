@extends('layout_base')
@section('pagina_titulo', 'Shop')
@section('pagina_conteudo')
<!-- Page Layout here -->
<div class="container position-ref full-height row">

    <div class="row header-promo">
        <div class="col s5">
            <img class="img-shop" src="https://www.terabyteshop.com.br/img/produtos/g/placa-de-video-galax-geforce-rtx-2080-ti-oc-white-11gb-28iulbucu4kw-gddr6-pci-exp_60577.jpg">
        </div>

        <div class="price-specs col s7">
            <p class="title-shop">RTX 2080 TI OC WHITE GALAX</p>
            <p class="status-produto-disponivel"><i class="large material-icons">check</i>Produto Disponível</p>
            <p class="status-produto-indisponivel"><i class="large material-icons">close</i>Produto Indisponível</p>

            <p class="preco-boleto "><i class="material-icons">credit_card</i>R$ 6.437,13</p>
            <p class="preco-parcela">à vista com 13% de desconto no boleto</p>

            <p class="preco-cartao"><i class="material-icons">credit_card</i>R$ 7.399,00</p>
            <p class="preco-parcela">12x de R$ 616,58 sem juros</p>
            
            <a class="add-cart light-green waves-effect waves-light btn"><i class="material-icons right">add_shopping_cart</i>Comprar</a>

        </div>
    </div>

    <div class="row">
        <div class="col s12">
            <ul class="tabs">
                <li class="tab col s3"><a href="#desc">Descrição</a></li>
                <li class="tab col s3"><a href="#specs">Especificação</a></li>
            </ul>
        </div>
        <div id="desc" class="col s12">
            <h4>Descrição</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        
        <div id="specs" class="col s12">
            <h4>Especificação</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>

</div>

@endsection
<!-- Compiled and minified JavaScript -->
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
<script type = "text/javascript" src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>           
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 
<script>
    $(document).ready(function(){
        $('.tabs').tabs();
    });
</script>