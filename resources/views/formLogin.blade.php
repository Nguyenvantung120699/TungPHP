<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-5 col-md-offset-4" style="border:1px #888888 solid; border-radius:20px;margin-top:5%">
            <div class="col-md-12 text-center">
                <h1>Login</h1>
            </div>
            <form class="border-bottom" Action="" style="padding:10%">
                <div class="form-group">
                    <label for="exampleInputEmail1">Account</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter account">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-danger">Login</button>
            </form>
            <div class="col-md-12 text-center">
                <p>Do not have an account?<a href="/tungT1904A_laravel/public/createAccount?">Sign Up!</a></p> 
            </div>
        </div>
    </div>
</body>
</html>