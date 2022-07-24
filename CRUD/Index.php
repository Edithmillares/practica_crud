<?php include("Conexion.php") ?>

<?php include("includes/header.php") ?>

<div class="container bg-color">
    <div class="row">
        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) { ?>

                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php session_unset();
            } ?>

            <div class="card card-body">
                <form action="Save.php" method="POST">
                    <div class="form-group">
                        <input type="tel" name="ru" class="form-control" placeholder="RU universitario" autofocus>
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="text" name="apellido" class="form-control" placeholder="Apellido" autofocus>
                    </div>
                    </br>
                    <div class="form-group">
                        <input type="text" name="Carrera" class="form-control" placeholder="Carrera" autofocus>
                    </div>

                    <br>

                    <input type="submit" class="btn btn-success btn-block" name="btncrear" value="Crear">
                </form>

            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>RU</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Carrera</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM estudiante";
                    $result_tabla = mysqli_query($con, $query);

                    while ($mostrar = mysqli_fetch_array($result_tabla)) { ?>
                        <tr>
                            <td><?php echo $mostrar['Id'] ?></td>
                            <td><?php echo $mostrar['RU'] ?></td>
                            <td><?php echo $mostrar['Nombre'] ?></td>
                            <td><?php echo $mostrar['Apellido'] ?></td>
                            <td><?php echo $mostrar['Carrera'] ?></td>
                            <td>
                                <a href="Edit.php?ide=<?php echo $mostrar['Id'] ?>" class="btn btn-secondary"><i class="fas fa-marker"></i>
                                </a>
                                <a href="Delete.php?idd=<?php echo $mostrar['Id'] ?>" class="btn btn-danger">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>