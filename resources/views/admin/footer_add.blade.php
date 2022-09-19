
<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

        @include('admin.sidebar')
        <!-- partial -->
            @include('admin.navbar')

    <div class="container-fluid page-body-wrapper">

        <div class="container d-flex  justify-content-center align-items-center">





            <form action="/" method="POST" enctype="multipart/form-data" class="needs-validation" style="width: 45%" novalidate>
               @csrf
                <div class="form-group">
                <label for="name">title Name:</label>
                <input type="text" class="form-control bg-transparent text-white" id="" placeholder="Enter Doctor Name" name="title" required>
                <div class="valid-feedback">Valid.</div>
                <div class="invalid-feedback">Please fill out this field.</div>
              </div>
              <div class="form-group">
                <label for="number">Description:</label>
                <textarea name="description" id="summernote" cols="50" rows="20"></textarea>
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
