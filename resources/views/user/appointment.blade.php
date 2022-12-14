<div class="page-section">
    <div class="container">
      <h1 style="font-size: 26px; font-weight: bold;" id="letconsult" class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form " action="/appointment" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" name="email" class="form-control" placeholder="Email address..">

          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor" id="departement" class="custom-select">
                <option >---Select Doctor---</option>
                @foreach ( $doctor as $doctors )
              <option value="{{$doctors->name}}">{{$doctors->name}} ---Speciality---{{$doctors->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="number" name="number" class="form-control" placeholder="Phone Number.." required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" style="background: #00D9A5;" class="btn st btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div>
 <!-- .page-section -->
