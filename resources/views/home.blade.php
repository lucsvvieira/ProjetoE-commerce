<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light pl-5 pr-5 mb-5">
        <a href="#" class="navbar-brand">Ecommerce</a>
        <div class="collapse navbar-collapse">
            <div class="navbar-nav">
                <a class="nav-link text-uppercase" href="#">home</a>
                <a class="nav-link" href="#">Categorias</a>
                <a class="nav-link" href="#">Cadastrar</a>
            </div>
        </div>
        <a href="#" class="btn btn-sm"><i class="fa fa-shopping-cart"></i></a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto1.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 1</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto2.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 2</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto3.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 3</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto4.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 4</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto5.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 5</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>

            <div class="col-3 mb-3">
                <div class="card">
                    <img src="{{ asset('images/produto6.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h6 class="card-title">Produto 6</h6>
                        <a href="#" class="btn btn-sm btn-secondary">Adicionar Item</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
