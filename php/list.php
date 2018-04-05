<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Listado de Usuarios</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
</head>
<body>
	<?=
		require_once "Colegio.php";
		$db = new Database;
		$colegio = new Colegio($db);
		$colegios = $colegio->get();
	 ?>
 <div class="container">
            <div class="col-lg-12">
                <h2 class="text-center text-primary">Lista De Profesores</h2>
                <?php
                if( ! empty( $colegios ) )
                {
                ?>
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Sexo</th>
                    </tr>
                    <?php foreach( $colegios as $colegio )
                    {
                    ?>
                        <tr>
                            <td><?php echo $colegio->id_alumno_asignatura ?></td>
                            <td><?php echo $colegio->nombre ?></td>
                            <td><?php echo $colegio->nombre1 ?></td>
                            <td><?php echo $colegio->nivel ?></td>
                            <td><?php echo $colegio->total ?></td>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
                <?php
                }
                else
                {
                ?>
                <div class="alert alert-danger" style="margin-top: 100px">Any user has been registered</div>
                <?php
                }
                ?>
            </div>
        </div>
</body>
</html>