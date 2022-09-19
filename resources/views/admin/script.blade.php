<!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{asset('admin')}}/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('admin')}}/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{asset('admin')}}/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <script src="{{asset('admin')}}/assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin')}}/assets/js/off-canvas.js"></script>
    <script src="{{asset('admin')}}/assets/js/hoverable-collapse.js"></script>
    <script src="{{asset('admin')}}/assets/js/misc.js"></script>
    <script src="{{asset('admin')}}/assets/js/settings.js"></script>
    <script src="{{asset('admin')}}/assets/js/todolist.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('admin')}}/assets/js/dashboard.js"></script>

    <!-- End custom js for this page -->

    <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>

<script>
    $('#summernote').summernote({
      placeholder: 'Description',
      tabsize: 3,
      height: 400,
      width:750
    });
  </script>
