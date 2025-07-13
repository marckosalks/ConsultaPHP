<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consulta de remessa</title>
    <!-- icones Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Styles css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar-filtros.css') }}">


</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg  bg-secondary" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active">Home</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- button de pesquisa -->
    <div class="alinhar-busca">
        <button type="submit" class="btn btn-secondary btn-search">
            <i class="bi bi-search teste"></i>
        </button>
    </div>

    <!-- component importado -->
    <x-sidebar-filtros />

    <!-- table -->
    <div class="ajuste-tab">
        <table class="table table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Shop ID</th>
                    <th>Pedido ID</th>
                    <th>QR Code</th>
                    <th>Status</th>
                    <th>Criado</th>
                    <th>Mensagem</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>337523306</td>
                    <td>2506228F8S0M0</td>
                    <td>BR253622624689N</td>
                    <td>COMPLETED</td>
                    <td>2025-06-30 00:12:47</td>
                    <td></td>

                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>451446974</td>
                    <td>25062PTC6UBV65</td>
                    <td></td>
                    <td>CANCELLED</td>
                    <td>2025-06-30 00:12:46</td>
                    <td>CANCELADO</td>

                </tr>
                <tr>
                    <td><input type="checkbox" /></td>
                    <td>397030999</td>
                    <td>250630U6GD71F4</td>
                    <td></td>
                    <td>CANCELLED</td>
                    <td>2025-06-30 00:12:41</td>
                    <td>CANCELADO</td>

                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>
