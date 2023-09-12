<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Settings</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col md-6 col-md-offset-3">
                <h4>Settings</h4><br>
                <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $LoggedUserInfo['name'] }}</td>
                            <td>{{ $LoggedUserInfo['email'] }}</td>
                            <td><a href="{{ route('auth.logout') }}">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
                <ul>
                    <li><a href="/admin/dashboard"></a>Dashboard</li>
                    <li><a href="/admin/profile"></a>Profile</li>
                    <li><a href="/admin/staff"></a>Staff</li>
                    <li><a href="/admin/settings"></a>Settings</li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
