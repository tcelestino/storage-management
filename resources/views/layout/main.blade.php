<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Storage Management</title>
    <link href='/css/app.css' rel='stylesheet' />
    <link href="/css/custom.css" rel="stylesheet">
    @yield('head')
</head>
<body>
    <main class='container'>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/products">Storage Management</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/products">Products</a></li>
                </ul>

            </div>
        </nav>
        @yield('content')
    </main>
    <footer class="footer">
      <p>© Storage Management</p>
      @yield('footer')
    </footer>
</body>
</html>
