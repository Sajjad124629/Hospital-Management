

<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
  @include('admin.css')
  </head>

  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
          @include('admin.navbar')
          <div class="container-fluid page-body-wrapper">

            <div class="container d-flex  justify-content-center align-items-center">


                @if (session()->has('success'))

                <div class="bg-info p-4 alert alert-success" role="alert"  style="    width: 50%;
    
                top: 32px;
                position: fixed;
    
                margin-top: 52px;
                padding-top: 20px;">    <strong> {{session()->get('success')}}</strong></div>
    
    
                    @endif


                <form action="/sendemail/{{$appointment->id}}" method="POST"  class="needs-validation" style="width: 45%" novalidate>
                   @csrf
                    <div class="form-group">
                    <label for="name">Greeding:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="name"  name="greeding" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="number">Body:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="number"  name="body" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="room">Action Text:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="room"  name="actiontext" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="room">Action Url:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="room"  name="actionurl" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="room">End Part:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="room"  name="endpart" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
 

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

          </div>

       @include('admin.script')
  </body>
</html>
