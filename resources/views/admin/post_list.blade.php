

<!DOCTYPE html>
<html lang="en">
  <head>
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')
      <!-- partial -->
          @include('admin.navbar')





                    {{-- Delete Doctor SuccessFull --}}

                    <div class="container-fluid page-body-wrapper">

                        @if (session()->has('success'))

                        <div class="bg-info p-4 alert alert-success" role="alert"  style="    width: 50%;

                        top: 32px;
                        position: fixed;

                        margin-top: 52px;
                        padding-top: 20px;">    <strong> {{session()->get('success')}}</strong></div>


                            @endif



            <div class="container pt-5">
                <h2 class="doctor-list">Post List:</h2>

                <table class="table table-striped pt-4 ">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>News Title</th>
                      <th>Post Category</th>
                      <th>Post By</th>
                      <th>News Type</th>
                      <th>Post Date</th>
                      <th>Thumnail Image</th>
                      <th>Admin Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($postdata as $postdatas)



                    <tr>
                       <td>{{$loop->index+1}}</td>
                      <td>{{$postdatas->newstitle}}</td>
                      <td>{{$postdatas->postcategory}}</td>
                      <td>{{$postdatas->postby}}</td>
                      <td>{{$postdatas->newstype}}</td>
                      <td>{{$postdatas->date}}</td>
                      <td><img src="postthumbnail/{{$postdatas->thumnail}}" alt=""></td>
                      <td><img src="adminimage/{{$postdatas->adminimage}}" alt=""></td>

                      <td><a href="/postedit/{{$postdatas->id}}" class="btn btn-sm btn-info">Edit</a></td>
                      <td><a  href="" class="btn btn-sm btn-info">Delete</a></td>

                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
       @include('admin.script')
  </body>
</html>

