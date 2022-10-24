

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


            {{-- Update success messege --}}
            <div style="width:100%"  class="container-fluid page-body-wrapper">




            <div class="container pt-5">
                <h2 class="doctor-list">Appointment List:</h2>

                <table class="table table-striped sampleTable pt-4 ">
                  <thead>
                    <tr>

                      <th>Customer Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Doctor Name</th>
                      <th>Date</th>
                      <th>Message</th>
                      <th>Status</th>
                      <th>Approved</th>
                      <th>Cancel</th>
                      <th>Send Mail</th>

                    </tr>
                  </thead>
                  <tbody>

                 @foreach ($appointmentdata as $appointmentDataAll)


                    <tr>

                      <td>{{$appointmentDataAll->name}}</td>
                      <td>{{$appointmentDataAll->email}}</td>
                      <td>{{$appointmentDataAll->phone}}</td>
                      <td>{{$appointmentDataAll->doctor}}</td>
                      <td>{{$appointmentDataAll->date}}</td>
                      <td>{{$appointmentDataAll->message}}</td>
                      <td>{{$appointmentDataAll->status}}</td>
                      <td><a class="btn btn-success" href="/approved/{{$appointmentDataAll->id}}">Approved</a></td>
                      <td><a class="btn btn-danger" href="/cancel/{{$appointmentDataAll->id}}">Cancel</a></td>
                      <td><a class="btn btn-danger" href="/appointmentdelete/{{$appointmentDataAll->id}}">Delete</a></td>
                      <td><a class="btn btn-primary" href="/emailview/{{$appointmentDataAll->id}}">Send Mail</a></td>

                    </tr>

                    @endforeach

                  </tbody>
                </table>
              </div>
        </div>
       @include('admin.script')
  </body>
</html>
