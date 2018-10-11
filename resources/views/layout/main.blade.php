<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <title>Storage Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="/css/custom.css" rel="stylesheet">
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ action('ProductsController@list') }}">Storage Management</a>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ action('ProductsController@list') }}">All Products</a></li>
                <li><a href="{{ action('ProductsController@new') }}">Add New</a></li>
            </ul>
        </div>
    </nav>
    <main class='container'>
        @yield('content')
    </main>
    <footer class="footer">
        <div class="container">
            <p>© Storage Management</p>
        </div>
      @yield('footer')
    </footer>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
