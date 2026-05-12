<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card p-4 shadow">
                <h2 class="text-center mb-4">Login</h2>

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="/login">
                    @csrf

                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                    <button class="btn btn-success w-100">Login</button>
                </form>

                <a href="/register" class="btn btn-link mt-3">Create Account</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>