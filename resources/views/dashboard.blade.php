<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="d-flex justify-content-between mb-4">
        <h2>Truck Management System</h2>

        <a href="/logout" class="btn btn-danger">Logout</a>
    </div>

    <div class="card p-4 mb-4">
        <h4>Add Truck</h4>

        <form method="POST" action="/add-truck">
            @csrf

            <div class="row">

                <div class="col-md-3">
                    <input type="text" name="truck_name" class="form-control" placeholder="Truck Name" required>
                </div>

                <div class="col-md-3">
                    <input type="text" name="driver_name" class="form-control" placeholder="Driver Name" required>
                </div>

                <div class="col-md-3">
                    <input type="text" name="truck_number" class="form-control" placeholder="Truck Number" required>
                </div>

                <div class="col-md-3">
                    <input type="text" name="route" class="form-control" placeholder="Route" required>
                </div>

            </div>

            <button class="btn btn-primary mt-3">Add Truck</button>
        </form>
    </div>

    <div class="card p-4">

        <h4>All Trucks</h4>

        <table class="table table-bordered mt-3">
            <tr>
                <th>ID</th>
                <th>Truck</th>
                <th>Driver</th>
                <th>Number</th>
                <th>Route</th>
                <th>Action</th>
            </tr>

            @foreach($trucks as $truck)
            <tr>
                <td>{{ $truck->id }}</td>
                <td>{{ $truck->truck_name }}</td>
                <td>{{ $truck->driver_name }}</td>
                <td>{{ $truck->truck_number }}</td>
                <td>{{ $truck->route }}</td>

                <td>
                    <a href="/delete-truck/{{ $truck->id }}" class="btn btn-danger btn-sm">
                        Delete
                    </a>
                </td>
            </tr>
            @endforeach

        </table>

    </div>

</div>

</body>
</html>