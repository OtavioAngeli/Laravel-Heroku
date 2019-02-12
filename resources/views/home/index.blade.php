@extends('layout_base')
@section('pagina_titulo', 'Home')
@section('pagina_conteudo')
    <div class="position-ref full-height">
        <div class="content">

            <div class="row">
                <div class="col s4">
                    <div class="center promo">
                        <img class="img-promo" src="https://www.terabyteshop.com.br/img/produtos/g/placa-de-video-galax-geforce-rtx-2080-ti-oc-white-11gb-28iulbucu4kw-gddr6-pci-exp_60577.jpg">
                        <p class="promo-caption title-promo">Pruumo RTX 2080 TI</p>
                        <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
                        <a href="{{ url('shop/id_produto') }}" class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i>Comprar</a>
                    </div>
                </div>
                <div class="col s4">
                    <div class="center promo">
                        <img class="img-promo" src="https://www.terabyteshop.com.br/img/produtos/g/placa-de-video-gigabyte-geforce-rtx-2070-gaming-oc-8gb-gv-n2070gaming-oc-8gc-gddr6-pci-exp_64414.png">
                        <p class="promo-caption title-promo">Pruumo RTX 2070</p>
                        <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
                        <a href="{{ url('shop/id_produto') }}" class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i>Comprar</a>
                    </div>
                </div>
                <div class="col s4">
                    <div class="center promo">
                        <img class="img-promo" src="https://www.terabyteshop.com.br/img/produtos/g/placa-de-video-msi-geforce-rtx-2060-gaming-z-6gb-gddr6-pci-exp_63573.jpg">
                        <p class="promo-caption title-promo">Pruumo RTX 2060</p>
                        <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
                        <a href="{{ url('shop/id_produto') }}" class="waves-effect waves-light btn"><i class="material-icons right">shopping_cart</i>Comprar</a>
                    </div>
                </div>
            </div>    
        </div>
    </div>
@endsection