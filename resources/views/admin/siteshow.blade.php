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

            <div class="container pt-5 pb-5 d-flex  justify-content-center align-items-center">

               <div class="container">
                <div class="content-wrap">
                    <div class="image-wrap">
                        <img style="height: 460px; width: 100%;" src="assets/img/bg_image_1.jpg" alt="">
                     </div>

                     <div class="sitecontent text-center">
                        <p>{{$getdata->homeCaption}}</p>
                        <h1>{{$getdata->homeTitle}}</h1>
                     </div>
                </div>
                <div class="container">
                    <div class="row btnst">
                        <div class="col-md-6">
                            <div class="left-text">
                                <h1 class="text-center">{{$getdata->homeBodyTitle}}</h1>
                                <p>{{$getdata->homeBodydescription}}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="imagest">
                                <img src="bodyimage/{{$getdata->homeBodyImage}}" alt="">
                            </div>


                        </div>

                        <a href="/siteContent/{{$getdata->id}}" class="btn btn-primary">Edit Content</a>
                    </div>
                </div>

               </div>






            </div>


        </div>

     @include('admin.script')
</body>
</html>
