<html>
    <head>
        <title>Login Page - JVLcode</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-3 bg-primary mt-4" >
                    <h2>Login </h2>
                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        {!! implode('',$errors->all('<li class="list-group-item bg-danger">:message</li>')) !!}
                    </ul>
                @endif
                    <form method="POST" action="/authenticate">
                        <div class="form-group">
                            <label for="">Email <input class="form-control" type="text" name="email"> </label>
                        </div>
                        <div class="form-group">
                            <label for="">Password <input class="form-control" type="password" name="password"> </label>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" class="btn btn-success" value="Login">
                        </div>
                        @csrf
                    </form>
                </div>
            </div>


        </div>
    </body>
</html>


