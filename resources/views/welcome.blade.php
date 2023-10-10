<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YoPrint App</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container">
            <header>
                <div class="px-3 py-2">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <router-link to="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="https://www.yoprint.com/wp-content/uploads/2017/12/yoprint-logo.png" style="height:60px;"/>
                    </router-link>
                    </div>
                </div>
                </div>
            </header>

            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <file-upload></file-upload>
                    </div>
                </div>
            </div>
            <div class="card mt-4">
                <div class="card-body">
                    <div class="container-fluid">
                        <file-upload-history></file-upload-history>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
