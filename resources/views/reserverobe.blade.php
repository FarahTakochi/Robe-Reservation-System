<!DOCTYPE html>
<html lang="en" and dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

    <div class ="robeheader">
      <h3> Convocation Robe for Graduands </h3>

  <section class="robe-intro">
    <div class="robeimage">
      <p>Robe </p>
	  </div>
    <div class="robetext">
      <h3>The IIUM Convocation Robe Set consist of 3 items, the robe, headgear and hood. </h3><br>
      <article>
      <h4> HEADGEAR</h4><br>
      <p> For undergraduate and master , the headgear ia a mortar board
        For clinical master and all PhD, the headgear is a beefeater.</p><br>
        <h4> ROBE </h4><br>
        <p> The robe is the same for all level and differentiated by stripes on the sleeves.</p><br>
        <h4> HOOD </h4><br>
        <p>The hood identifies the kulliyyah that a graduand belongs to. Each kulliyyah has its own unique colour and KICT hood's colour is green.  </p><br>
    </div>
  </article>
  </section>


    <div class="robestripes">
      <h3> Robe Stripes </h3>
    </div>

    <div class="stripesimage">
    </div>

    <div class="stripes-desc">
      <p> Triple Stripes - PhD & Clinical Masters&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Double Stripes - Masters&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        Single Stripes - Undergraduate
    </div>
    <section class="measurement">

      <div class="robesizes">
        <h3> Robe Sizes </h3>
      </div>





    <div class="robechart">
    </div>
</section>

<div class="size">
  <h3> Size List </h3>
</div>
  <section class="sizelist">
  <table >
      <tr>
          <th>Id</th>
          <th>Robe Size</th>
          <th>Availability</th>
          <th>Level</th>
      </tr>
      @foreach ($reserved_robes as $data)
      <tr>
          <td>{{$data['id']}}</td>
          <td>{{$data['size']}}</td>
          <td>{{$data['quantity']}}</td>
          <td>{{$data['level']}}</td>
      </tr>
      @endforeach
  </table>
  </section>

  <section class="reservebutton">
        <div class="link-to-reserverobe-wrapper">
             <a class="link-to-reserverobe" href="{{ route('reservation') }}">Reserve Now</a>
        </div>
  </section>



  <section class="footer">
    <p><a href="#"> KICT Official Website</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#"> KICT Official Instagram</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<a href="#"> kict@iium.edu.my</a></p>
    <p> © Designed for INFO 3305 Web Application Development. </p>
  </section>
  </x-app-layout>
  </body>
  </html>
