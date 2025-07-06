<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KICT Graduation Robe System</title>
  </head>
  <body>
    
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
                          <tr>
                            <td>{{$rd->matric_no}}</td>
                            <td>{{$rd->name}}</td>
                            <td>{{$rd->programme}}</td>
                            <td>{{$rd->level}}</td>
                            <td>
                              <form action="{{ url('/dashboard/reservation/details/update/'.$rd->id) }}" method="post">
                                @csrf
                                <select id="size" name="size" required>
                                  <option disabled selected>Choose Robe Size</option>
                                  <option value="XS">XS</option>
                                  <option value="S">S</option>
                                  <option value="M">M</option>
                                  <option value="L">L</option>
                                  <option value="XL">XL</option>
                                  <option value="XXL">XXL</option>
                                  <option value="XXXL">XXXL</option>
                                  <option value="XXXXL">XXXXL</option>
                                </select>
                                <button type="submit" class="btn btn-primary">Save</button>
                              </form>
                            </td>
                            <td>{{$rd->proof}}</td>
                            <td>{{$rd->status}}</td>
                          </tr>
                        </tbody>
                    </table>

                  </div>
                </div>
            </div>
        </div>
    </x-app-layout>

  </body>

</html>
