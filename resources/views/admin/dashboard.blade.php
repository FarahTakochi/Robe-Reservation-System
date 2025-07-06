<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KICT Graduation Robe System</title>
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		crossorigin="anonymous">
</head>
<body>
    <div class="header">
        <div class="webheader">
        </div>
    </div>

    <x-app-layout>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="card-body border">

                    <h1 class="h3 pb-3 mb-3 border-bottom">Reservation Details</h1>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Matric No</th>
                          <th>Full Name</th>
                          <th>Programme</th>
                          <th>Level</th>
                          <th>Robe Size</th>
                          <th>Proof</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($reservation as $rd)
                          <tr>
                            <td>{{$rd->matric_no}}</td>
                            <td>{{$rd->name}}</td>
                            <td>{{$rd->programme}}</td>
                            <td>{{$rd->level}}</td>
                            <td>{{$rd->size}}</td>
                            <td>{{$rd->proof}}</td>
                            <td>{{$rd->status}}</td>
                            <td>
                              <a class="btn btn-warning" href="{{ url('admin/dashboard/edit/'.$rd->id) }}">Edit</a>
                              <a class="btn btn-danger" href="{{ url('admin/dashboard/delete/'.$rd->id) }}">Delete</a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
    </x-app-layout>
</body>
</html>