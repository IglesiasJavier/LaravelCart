<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Carrito</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row mt-5 mb-5">
            <div class="col-6 ">
                <form method="POST" action="{{route('cart.store')}}">
                    @csrf
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" name="id" class="form-control" id="id">
                    </div>
                    <div class="form-group">
                        <label for="name">NOMBRE</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">PRECIO</label>
                        <input type="text" name="price" class="form-control" id="price">
                    </div>
                    <div class="form-group">
                        <label for="quantity">CANTIDAD</label>
                        <input type="text" name="quantity" class="form-control" id="quantity">
                    </div>
                    <div class="form-group">
                        <label for="color">COLOR</label>
                        <select class="form-control" name="color" id="color">
                            <option value="blanco">blanco</option>
                            <option value="azul"> azul</option>
                        </select>
                        <small class="form-text text-muted">Atributo</small>
                    </div>

                    <div class="form-group">
                        <label for="tamano">TAMAÑO</label>
                        <select name="tamano" class="form-control" id="tamano">
                            <option value="chico">Chico</option>
                            <option value="grande">Grande</option>
                        </select>
                        <small class="form-text text-muted">Atributo</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>