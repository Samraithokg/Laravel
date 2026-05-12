<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card p-4 shadow">
                <h2 class="text-center mb-4">Register</h2>

                <form method="POST" action="/register">
                    @csrf

                    <input type="text" name="name" class="form-control mb-3" placeholder="Name" required>

                    <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

                    <input type="password" name="password" class="form-control mb-3" placeholder="Password" required>

                    <button class="btn btn-primary w-100">Register</button>
                </form>

                <a href="/login" class="btn btn-link mt-3">Already Have Account?</a>
            </div>

        </div>
    </div>
</div>

</body>
</html>