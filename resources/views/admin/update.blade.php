<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <div class="card-body border">

                    <h1 class="h3 pb-3 mb-3 border-bottom">Reservation Form</h1>


                    <form action="{{ url('admin/dashboard/update/'.$rd->id) }}" method="post">
                      @csrf
                      <div class="mb-3 row">
                        <label for="matric_no" class="col-sm-2 col-form-label">Matric No</label>
                        <div class="col-sm-10">
                          <input type="text" name="matric_no" class="form-control" id="matric_no" value="{{$rd->matric_no}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Full Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" id="name" value="{{$rd->name}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="programme" class="col-sm-2 col-form-label">Programme</label>
                        <div class="col-sm-10">
                          <input type="text" name="programme" class="form-control" id="programme" value="{{$rd->programme}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="level" class="col-sm-2 col-form-label">Level</label>
                        <div class="col-sm-10">
                          <input type="text" name="level" class="form-control" id="level" value="{{$rd->level}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="size" class="col-sm-2 col-form-label">Size</label>
                        <div class="col-sm-10">
                          <input type="text" name="size" class="form-control" id="size" value="{{$rd->size}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="proof" class="col-sm-2 col-form-label">Payment Slip</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" id="proof" name="proof" value="{{$rd->proof}}" disabled>
                        </div>
                      </div>

                      <div class="mb-3 row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <select id="size" name="status" required>
                            <option value="{{$rd->status}}" hidden>{{$rd->status}}</option>
                            <option value="Pending">Pending</option>
                            <option value="Approved">Approved</option>
                            <option value="Rejected">Rejected</option>
                          </select>
                        </div>
                      </div>

                      <div class="mx-auto mt-5 row" style="width:15%">
                        <button class="btn btn-primary" type="submit">Save Changes</button>
                      </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
    </x-app-layout>

  </body>

</html>
