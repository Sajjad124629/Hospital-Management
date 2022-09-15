

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





                <form action="/update_doctor/{{$doctor_edit->id}}" method="POST" enctype="multipart/form-data" class="needs-validation" style="width: 45%" novalidate>
                   @csrf
                   @method('put')
                    <div class="form-group">
                    <label for="name">Dortor Name:</label>
                    <input type="text" value="{{$doctor_edit->name}}"  class="form-control bg-transparent text-white" id="name" placeholder="Enter Doctor Name" name="name" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="number">Phone Number:</label>
                    <input type="number" value="{{$doctor_edit->phone}}" class="form-control bg-transparent text-white" id="number" placeholder="Enter Phone Number" name="number" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="name">Speciality:</label>
                    <div class="input-group mb-3 bg-transparent text-white" >
                      <select  name="speciality"  class="custom-select bg-transparent text-white" id="inputGroupSelect02">
                        <option  class="chnage" selected >Choose...</option>
                        <option @if ($doctor_edit->speciality=='skin') selected @endif  class="chnage" value="skin">Skin
                        </option>
                        <option @if ($doctor_edit->speciality=='heart') selected @endif   class="chnage" value="heart">Heard</option>
                        <option @if ($doctor_edit->speciality=='eye') selected @endif   class="chnage" value="eye">Eye</option>
                        <option @if ($doctor_edit->speciality=='nose') selected @endif  class="chnage" value="nose">Nose</option>
                      </select>
                      <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Select</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="room">Room Number:</label>
                    <input type="text" value="{{$doctor_edit->room}}" class="form-control bg-transparent text-white" id="room" placeholder="Enter Room Number" name="room" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                  <div class="form-group">
                    <label for="room">Old Image:</label>

                    <img height="150px" width="150px" src="doctorimage/{{$doctor_edit->image}}" alt="">

                  </div>

                  <div class="input-group mb-3">

                    <div class="custom-file">
                        <label class="pr-2 pt-2">Doctor image:</label>
                      <input   type="file" name="file" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>

          </div>

       @include('admin.script')
  </body>
</html>
