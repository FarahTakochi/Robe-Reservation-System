<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>KICT Graduation Robe System</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="default.css">
        <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		      crossorigin="anonymous">

        <style>
        table {
          width: 50%;
          border: 1px solid;
          margin: 0 auto;
        }
        td {
          height: 50px;
          vertical-align: middle;
          padding: 20px;
          text-align: left;
        }
        </style>
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
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($reservation as $rd)
                          <tr>
                            <td>{{$rd->matric_no}}</td>
                            <td>{{$rd->name}}</td>
                            <td>{{$rd->programme}}</td>
                            <td>{{$rd->level}}</td>
                            <td>{{$rd->size}} <a class="btn btn-warning ms-3" href="{{ url('/dashboard/reservation/details/edit/'.$rd->id) }}">Edit</a> </td>
                            <td>{{$rd->proof}}</td>
                            <td>{{$rd->status}}</td>
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
