<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style>
    img{
        width:20px;
    }
</style>
</head>
<body>
    <div class="container-fluid bg-primary text-white text-center">
        <p>
            <h2>INGRESO DE DATOS DEL ESTUDIANTE</h2>
        </p>
    </div>
    <div class="container">
       <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
        <form action="EstudianteController.php" method="post" class="border shadow p-3 mb-5 bg-body rounded">
            <p>
                <label for="apellidos">Apellidos</label>
                <input class="form-control" type="text" name="apellidos">
            </p>
            
            <p>
                <label for="nombre">Nombre</label>
            <input class="form-control" type="text" name="nombre">
            </p>
            
            <p>
                <label for="direccion">direccion</label>
                <input class="form-control" type="text" name="direccion">
            </p>
            
            <p>
                <label for="telefono">Telefono</label>
                <input class="form-control" type="number" name="telefono">
            </p>
            
            <p>
                <input class="btn bg-primary text-white" type="submit" value="Guardar Registro">
            </p>
        </form>
        </div>
        <div class="col-3"></div>
       </div>
    </div>
    <hr>
    <h3 class="text-center text-danger">LISTADO DE ESTUDIANTES</h3>
    <hr>
    <div class="container">
    <table class="table table-striped">
        <th>NOMBRE</th>
        <th>APELLIDOS</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "EstudianteModel.php";
        $Estudiante = new Estudiante();
        $ListaEstudiantes = $Estudiante->ListarEstudiantes();
        while($Estudiantes = mysqli_fetch_assoc($ListaEstudiantes))
        {?>
          <tr>
                <td>  <?php echo $Estudiantes['nombre'] ?> </td>
                <td>  <?php echo $Estudiantes['apellidos'] ?> </td>
                <td>  <?php echo $Estudiantes['direccion'] ?> </td>
                <td>  <?php echo $Estudiantes['telefono'] ?> </td>
                <td><a href="editar.html"><img src="editar.png" alt="Editar" title="Editar"></a></td>
                <td><a href="eliminar.html"><img src="eliminar.png" alt="Eliminar" title="Eliminar"></a></td>
          </tr>
          
       <?php } ?>
    
    </table>
    </div>
</body>
</html>