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


                <form action="/updateHomepage/{{$getdata->id}}" method="POST" enctype="multipart/form-data" class="needs-validation pt-5 pb-4" style="width: 45%" novalidate>
                     @csrf
                     @method('put')
                     <div class="form-group">
                     <label for="name">Home Title:</label>
                     <input type="text" value="{{$getdata->homeTitle}}"  class="form-control bg-transparent text-white" id="name" placeholder="Enter Home Title" name="title" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                   </div>
                   <div class="form-group">
                     <label for="number">Home Caption:</label>
                     <input type="text" value="{{$getdata->homeCaption}}" class="form-control bg-transparent text-white" id="number" placeholder="Enter Phone Number" name="caption" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                   </div>

                   <div class="form-group">
                     <label for="room">Body Title:</label>
                     <input type="text" value="{{$getdata->homeBodyTitle}}" class="form-control bg-transparent text-white" id="room" placeholder="Enter Body Title" name="bodytitle" required>
                     <div class="valid-feedback">Valid.</div>
                     <div class="invalid-feedback">Please fill out this field.</div>
                   </div>
                   <div class="form-group">
                    <label for="comment">Body Description:</label>
                    <textarea   style="color: white; height:200px" class="form-control" name="bodydescription" rows="50" id="comment" required>{{$getdata->homeBodydescription}}</textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>

                   <div class="form-group">
                     <label for="room">Old Image:</label>

                     <img height="150px" width="150px" src="bodyimage/{{$getdata->homeBodyImage}}" alt="">

                   </div>

                   <div class="input-group mb-3">

                     <div class="custom-file">
                         <label class="pr-2 pt-2">Body Image:</label>
                       <input   type="file" name="file" required>
                       <div class="valid-feedback">Valid.</div>
                       <div class="invalid-feedback">Please fill out this field.</div>
                     </div>
                   </div>

                   <button type="submit" class="btn btn-primary">Update</button>
                 </form>





            </div>

        </div>

     @include('admin.script')
</body>
</html>
