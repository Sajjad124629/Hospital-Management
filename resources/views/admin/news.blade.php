

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



                <form action="/news_post" method="POST" enctype="multipart/form-data" class="needs-validation" style="width: 45%" novalidate>
                   @csrf
                    <div class="form-group">
                    <label for="name">News Title:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="name" placeholder="Enter News Title" name="newstitle" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="number">Post Category:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="number" placeholder="Enter Post Category" name="postcategory"  required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="number">Post By:</label>
                    <input type="text" class="form-control bg-transparent text-white" id="number" placeholder="Enter Post Category" name="postby"  required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="name">News Type:</label>
                    <div class="input-group mb-3 bg-transparent text-white" >
                      <select name="newstype" class="custom-select bg-transparent text-white" id="inputGroupSelect02">
                        <option  class="chnage"  selected >Choose...</option>
                        <option  class="chnage" value="letestnews">Latest News</option>
                        <option  class="chnage" value="oldnews">Old News</option>

                      </select>
                      <div class="input-group-append">
                        <label class="input-group-text" for="inputGroupSelect02">Select</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="room">Post Date:</label>
                    <input type="date" class="form-control bg-transparent text-white" id="room" placeholder="Enter Your Date" name="date" required>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="form-group">
                    <label for="comment">Description:</label>
                    <textarea  style="color: white; height:200px" class="form-control" name="description" rows="50" id="comment" required></textarea>
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Please fill out this field.</div>
                  </div>
                  <div class="input-group mb-3">

                    <div class="custom-file">
                        <label class="pr-2 pt-2">Thumnail image:</label>
                      <input type="file" name="thumnail" required>
                      <div class="valid-feedback">Valid.</div>
                      <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                  </div>

                  <div class="input-group mb-3">

                    <div class="custom-file">
                        <label class="pr-2 pt-2">Admin Image:</label>
                      <input type="file" name="adminimage" required>
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
