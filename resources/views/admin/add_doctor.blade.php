<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <style type="text/css">

        label{
            display: inline-block;
            width: 200px;
        }
    
    </style>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      
      @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" align="center" style="padding-top: 100px">
            <form action="">

                <div style="padding: 15px">
                    <label for="">Nom</label>
                    <input type="text" style="color: black" name="name" placeholder="nom du médecin">
                </div>

                <div style="padding: 15px">
                    <label for="">Numéro de téléphone</label>
                    <input type="number" style="color: black" name="number" placeholder="numéro de téléphone">
                </div>

                <div style="padding: 15px">
                    <label for="">Spécialité</label>
                    <select name="speciality" id="speciality" style="color: black; width: 200px">
                        <option>--selectionnez--</option>
                        <option value="">Dermatologue</option>
                        <option value="">Cardiologue</option>
                        <option value="">Ophtalmologue</option>
                        <option value="">Pneumologue</option>
                    </select>
                </div>

                <div style="padding: 15px">
                    <label for="">Salle No</label>
                    <input type="text" style="color: black" name="room" placeholder="salle du médecin">
                </div>

                <div style="padding: 15px">
                    <label for="">Photo</label>
                    <input type="file" name="file">
                </div>

                <div style="padding: 15px">

                    <input type="submit" class="btn btn-success">

                </div>
                


            </form>
        </div>

        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>