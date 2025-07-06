<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>KICT Graduation Robe System</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="default.css">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
		  crossorigin="anonymous">

    <style>
      .form {
        padding-top: 20px;
        padding-bottom: 50px;
      }
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
      td.btn {
        text-align: right;
      }
      .prg {
        padding-left: 10px;
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

          <h1 class="h3 pb-3 mb-3 border-bottom">Reservation Form</h1>


          <form action="reservation" method="post">
          @csrf
            <div class="mb-3 row">
              <label for="matric_no" class="col-sm-2 col-form-label">Matric No</label>
                <div class="col-sm-10">
                  <input type="text" name="matric_no" class="form-control" id="matric_no" required>
                </div>
            </div>

            <div class="mb-3 row">
              <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" name="name" class="form-control" id="name" required>
                </div>
            </div>

            <div class="mb-3 row">
              <label for="programme" class="col-sm-2 col-form-label">Programme</label>
                <div class="col-sm-10">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="programme" id="programme_bcs" value="BCS" required>
                    <label class="form-check-label" for="programme_bcs">BCS</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="programme" id="programme_bit" value="BIT">
                    <label class="form-check-label" for="programme_bit">BIT</label>
                  </div>
                </div>
            </div>

            <div class="mb-3 row">
              <label for="level" class="col-sm-2 col-form-label">Level</label>
                <div class="col-sm-10">
                    <select class="form-select" id="level" name="level" required>
                    <option disabled selected>Choose Level of Study</option>
                    <option value="Undergraduate">Undergraduate</option>
                    <option value="Masters">Masters</option>
                    <option value="PhD">PhD</option>
                  </select>
                </div>
            </div>

                      <div class="mb-3 row">
                        <label for="size" class="col-sm-2 col-form-label">Robe Size</label>
                        <div class="col-sm-10">
                          <select class="form-select" id="size" name="size" required>
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
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="proof" class="col-sm-2 col-form-label">Payment Slip</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="file" id="proof" name="proof" required>
                        </div>
                      </div>

                      <div class="mx-auto mt-5 row" style="width:10%">
                        <button class="btn btn-primary" type="submit" name="status" value="Pending">Reserve</button>
                      </div>

                    </form>
                  </div>
                </div>
            </div>

  </x-app-layout>
  </body>
</html>
