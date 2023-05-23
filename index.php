<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <title>Document</title>
</head>
<body>

    <!-- formulario -->
    <form>
        <div class="container formulario">
            <h1>Factura</h1>
                <div class="encabezadoFactura row">
                    <div class="mb-3 col-6">
                        <label for="nroFactura" class="form-label">Nro de factura</label>
                        <input type="number" class="form-control" id="nroFactura" name="nroFactura">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nombres" class="form-label">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="nroId" class="form-label">Nro de identidad</label>
                        <input type="number" class="form-control" id="nroId" name="nroId">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="fecha" name="fecha">
                    </div>
                </div>
                <div class="row productos">
                    <div class="mb-3 col-3">
                        <label for="nombreProducto" class="form-label">Nombre</label>
                        <input type="number" class="form-control" id="nombreProducto" name="nombreProducto">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="valorProducto" class="form-label">Valor</label>
                        <input type="text" class="form-control" id="valorProducto" name="valorProducto">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="cantidadProductos" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidadProductos" name="cantidadProductos">
                    </div>
                    <div class="mb-3 col-3">
                        <label for="totalValorProducto" class="form-label">Total</label>
                        <input type="date" class="form-control" id="totalValorProducto" name="totalValorProducto">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Añadir +</button>
        </div> 
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>