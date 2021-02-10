<x-app-layout>


   <div class="container my-5">

      <section class="dark-grey-text text-center">
        <h6 class="font-weight-normal text-uppercase font-small grey-text mb-4">Features</h6>
        <h3 class="font-weight-bold black-text mb-4 pb-2">Unique Factors</h3>
        <hr class="w-header">
        <p class="lead text-muted mx-auto mt-4 pt-2 mb-5">It's really easy to create a landing page for your awesome product.</p>

        <div class="row">
          <div class="col-md-4 mb-4">
            <a href="#!" class="card hoverable">
              <div class="card-body my-4">
                 <p><i class="fas fa-tablet-alt fa-2x text-muted"></i></p>
                <h5 class="black-text mb-0">Mes Commandes</h5>
              </div>
            </a>
          </div>

          <div class="col-md-4 mb-4">
            <a href="#!" class="card hoverable">
              <div class="card-body my-4">
                 <p><i class="fas fa-cogs fa-2x text-muted"></i></p>
                <h5 class="black-text mb-0">Mes Adresses</h5>
              </div>
            </a>
          </div>

          <div class="col-md-4 mb-4">
            <a href="#!" class="card hoverable">
              <div class="card-body my-4">
                 <p><i class="fas fa-pencil-ruler fa-2x text-muted"></i></p>
                <h5 class="black-text mb-0">Mes Informations</h5>
              </div>
            </a>
          </div>

          @can('admin')
          <div class="col-md-4 mb-4 mx-auto">
            <a href="{{ route('admin-index') }}" class="card hoverable">
              <div class="card-body my-4">
                 <p><i class="fas fa-recycle fa-2x text-muted"></i></p>
                <h5 class="black-text mb-0">Administration</h5>
              </div>
            </a>
          </div>
          @endcan

        </div>
       </section>
    </div>
</x-app-layout>