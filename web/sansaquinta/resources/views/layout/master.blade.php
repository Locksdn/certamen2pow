<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sansaquinta</title>

    <link rel="stylesheet" href="https://bootswatch.com/5/darkly/bootstrap.css">
    
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Distribucion Sansaquinta</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarColor03">
                <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="registrar_lectura">Registrar Lectura</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mediciones_existentes">Mediciones Existentes</a>
            </div>
        </nav>
    </header>

    <main class="container-fluid">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://bootswatch.com/_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    @yield('javascript')
</body>
</html>