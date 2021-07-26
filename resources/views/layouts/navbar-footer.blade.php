<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAICP | @yield('judul')</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/navbar-footer.css">
    @yield('css')
    
</head>
<body>
    
    <header>
        <div class="container">
            <div class="items">
                <a href="/" class="brand">
                    <img src="img/logo/1.png" alt="HOME" width="50rem" height="auto">
                </a>
                <ul>
                    <li><a href="/bidang">BIDANG</a></li>
                    <li><a href="/profil">PROFIL</a></li>
                </ul>
            </div>
            <div class="buttons">
                <form class="d-flex form">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <button type="button" class="btn btn-outline-danger ms-2">Logout</button>
            </div>
            <div class="buttons-small">
                <button type="button" class="btn btn-outline-danger ms-2">Logout</button>
            </div>
        </div>
    </header>
    
    @yield('contents')

    <!-- JS -->
    <script type="text/javascript" src="js/navbar.js"></script>
</body>