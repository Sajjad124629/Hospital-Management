<div class="page-section">
    <div class="container">
      <h1 style="font-size: 2.5rem" class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">

        @foreach ($doctor as $doctros)


        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img  src="doctorimage/{{$doctros->image}}" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$doctros->name}}</p>
              <span class="text-sm text-grey">{{$doctros->speciality}}</span>
            </div>
          </div>
        </div>


        @endforeach


      </div>
    </div>
  </div>
