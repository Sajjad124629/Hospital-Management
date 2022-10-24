

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

        <!-- partial -->
        <div style="width:100%" class="container-fluid page-body-wrapper">

            @if (session()->has('message'))

            <div class="bg-info p-4 alert alert-success" role="alert"  style="    width: 50%;

            top: 32px;
            position: fixed;

            margin-top: 52px;
            padding-top: 20px;">    <strong> {{session()->get('message')}}</strong></div>


                @endif

            {{-- Update success messege --}}
            <div style="width:100%"  class="container-fluid page-body-wrapper">

                @if (session()->has('update_success'))

                <div class="bg-info p-4 alert alert-success" role="alert"  style="    width: 50%;

                top: 32px;
                position: fixed;

                margin-top: 52px;
                padding-top: 20px;">    <strong> {{session()->get('update_success')}}</strong></div>


                    @endif

                    {{-- Delete Doctor SuccessFull --}}

                    <div class="container-fluid page-body-wrapper">

                        @if (session()->has('Delete_success'))

                        <div class="bg-info p-4 alert alert-danger" role="alert"  style="    width: 50%;

                        top: 32px;
                        position: fixed;

                        margin-top: 52px;
                        padding-top: 20px;">    <strong> {{session()->get('Delete_success')}}</strong></div>


                            @endif

            <div class="container pt-5">
                <h2 class="doctor-list">Doctor List:</h2>

                <table class="table table-striped sampleTable pt-4 ">
                  <thead>
                    <tr>
                      <th>S.N</th>
                      <th>Doctor name</th>
                      <th>Phone</th>
                      <th>Speciality</th>
                      <th>Room</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($doctroinfo as $doctroinfo)


                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$doctroinfo->name}}</td>
                      <td>{{$doctroinfo->phone}}</td>
                      <td>{{$doctroinfo->speciality}}</td>
                      <td>{{$doctroinfo->room}}</td>
                      <td><img src="doctorimage/{{$doctroinfo->image}}" alt=""></td>

                      <td><a href="/doctor_edit/{{$doctroinfo->id}}" class="btn btn-sm btn-info">Edit</a></td>
                      <td><a onclick="return confirm('Are You Sure To Delete This')" href="/doctor_delete/{{$doctroinfo->id}}" class="btn btn-sm btn-info">Delete</a></td>

                    </tr>

                    @endforeach
                  </tbody>
                </table>
              </div>
        </div>
       @include('admin.script')
  </body>
</html>
