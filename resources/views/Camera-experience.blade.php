@extends('layout')

@section ('content')
  <section class="jumbotron" id="aboutmeheader2">
    <div class="container">
      <h2> Camera-Operator Experience </h2>
    </div>
  </section>

  <section>
    <div class="'col-sm-6" id="sportsectie">
      <h1>Football, Hockey, Motorsport, Basketball, Tennis</h1>
      <img id="sportfoto"
        src="img/Fortuna-Werkzaamheden.jpeg">
    </div>
  </section>

  <section>
    <div class="'col-sm-6" id="studiosectie">
      <h1>Talkshows, News Programs, Talent Shows and more</h1>
      <img id="studiofoto"
        src="img/Dimi-werkzaamheden.jpeg">
    </div>
  </section>

  <section>
    <div class="'col-sm-6" id="customers">
      <h1>Customers</h1>
      <a href="https://nl.emglive.com"> <img style="margin-left: 300px"
          src="https://assets-eu-01.kc-usercontent.com/a4c7d73b-51db-0101-fe3f-307314650983/eb746310-a832-490e-ab4a-209237baf9a4/EMG_Logo_RGB_White_ROB_Website.png"></a>
      <a href="https://www.datisallus.nl"> <img style="margin-left: 10px"
          src="data:image/png;base64,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"></a>
      <a href="https://www.nepworldwide.nl"> <img
          src="https://www.localheroes.world/wp-content/uploads/2019/02/logo-NEP-1.png"></a>
      <a href="https://dutchmulticam.nl"> <img style="height: 200px; margin-left:20px; margin-bottom:150px;"
          src="https://dutchmulticam.nl/wp-content/uploads/2017/01/dmc-logo-txt-sm.png"></a>
      <a href="https://www.vidiled.nl"> <img style="height:200px; margin-left:50px; width:500px;"
          src="https://www.rkcwaalwijk.nl/fileadmin/user_upload/Logo_Vidiled_CMYK.jpg"></a>
    </div>
  </section>

@endsection
