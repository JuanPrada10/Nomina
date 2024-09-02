<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomina</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/customStyles.css">

</head>

<body id="body">
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <!-- <img src="https://cdn-icons-png.flaticon.com/128/1672/1672215.png" width="30px" height="30px"> -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active h3">Proyecto Nomina <span class="sr-only">(current)</span></a>
            </div>

        </div>
    </nav>


    <div class="container main-container">
        <div class="header-container">
            <h2>Nomina</h2>
        </div>
        <div class="row">
            <div id="content" class="col-lg-12">
                <form action="./rep.php" method='get'>
                    <table class="table table-borderless">
                        <div>
                            <thead class="table-header">
                                <tr>
                                    <td class="font-weight-bold text-center">Nombre</td>
                                    <td class="font-weight-bold text-center">Centro de costo</td>
                                    <td class="font-weight-bold text-center">Cargo</td>
                                    <td class="font-weight-bold text-center">No. Identificacion</td>
                                    <td class="font-weight-bold text-center">Sueldo</td>
                                    <td class="font-weight-bold text-center">Dias laborados</td>
                                </tr>
                            </thead>
                        </div>
                        <tbody>
                            <?php




                            for ($i = 0; $i < 3; $i++) {
                                echo "<tr class='bg-custom'>
            <td><input class='form-control' type='text' name='nomb[]'></td>
            <td><input class='form-control' type='text' name='cent[]'></td>
            <td><input class='form-control' type='text' name='carg[]'></td>
            <td><input class='form-control' type='number' name='id[]'></td>
            <td><input class='form-control' type='number' name='suel[]'></td>
            <td><input class='form-control' type='number' name='dias[]'></td>
        </tr>";
                            } ?>


                        </tbody>
                    </table>
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                    <input class="btn btn-primary" type='submit' value='Enviar'>
                    <input class="btn btn-info" type='reset' value='Reset'>
                </form>
            </div>
        </div>

    </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>