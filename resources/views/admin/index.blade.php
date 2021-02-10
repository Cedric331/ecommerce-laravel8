<x-app-layout>

   <div class="container-fluid my-5 py-5">
      <section>
        <div class="row">

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card primary-color white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="mb-0">Produits</p>
                </div>
                <div>
                  <i class="fas fa-shopping-bag fa-4x text-black-40"></i>
                </div>
              </div>
              <a href="{{ route('product-create') }}" class="card-footer footer-hover small text-center white-text border-0 p-2">Créer un produit<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card warning-color white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0">53 %</p>
                  <p class="mb-0">Bounce Rate</p>
                </div>
                <div>
                  <i class="fas fa-chart-bar fa-4x text-black-40"></i>
                </div>
              </div>
              <a class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card light-blue lighten-1 white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0">44</p>
                  <p class="mb-0">User Registrations</p>
                </div>
                <div>
                  <i class="fas fa-user-plus fa-4x text-black-40"></i>
                </div>
              </div>
              <a class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="card red accent-2 white-text">
              <div class="card-body d-flex justify-content-between align-items-center">
                <div>
                  <p class="h2-responsive font-weight-bold mt-n2 mb-0">65</p>
                  <p class="mb-0">Unique Visitors</p>
                </div>
                <div>
                  <i class="fas fa-chart-pie fa-4x text-black-40"></i>
                </div>
              </div>
              <a class="card-footer footer-hover small text-center white-text border-0 p-2">More info<i class="fas fa-arrow-circle-right pl-2"></i></a>
            </div>

          </div>

        </div>
      </section>
    </div>

</x-app-layout>