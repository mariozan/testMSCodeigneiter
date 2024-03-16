<!-- application/views/header.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Título de tu página</title>
    <!-- Agrega la referencia al archivo CSS de Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/bootstrap.css'); ?>" ></script>

</head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Mi Sitio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php if(session('role') == "recluiter"): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('vacancies/create'); ?>">Crear Vacante</a>
                    </li>
                    <?php endif; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url('vacancies'); ?>">Ver Vacantes</a>
                    </li>
                </ul>
                
            </div>
            <ul class="navbar-nav ml-auto"> <!-- Aquí se alinea a la derecha -->
                <li class="nav-item">
                <?php if(session('role')): ?>
                    <a class="nav-link" href="<?php echo base_url('logout'); ?>">Logout</a>                    
                <?php else: ?>
                    <a class="nav-link" href="<?php echo base_url('/'); ?>">Login</a>
                <?php endif; ?>
                </li>
                <li class="nav-item">
                    <?php if(session('role')): ?>
                        <a class="nav-link" href="<?php 
                            $url = 'user/' . session('id') . '/edit';
                            echo base_url($url); ?>">Usuario</a>
                    <?php else: ?>
                        <a class="nav-link" href="<?php echo base_url('user'); ?>">Registrarse</a>
                    <?php endif; ?>
                </li>
            </ul>
        </div>
    </nav>
