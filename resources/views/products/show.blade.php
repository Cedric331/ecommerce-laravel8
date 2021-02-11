<x-app-layout>
   
   <div class="container my-5 z-depth-1">
      <section class="text-center">
    
        <div class="row">
          <div class="col-lg-7">
            <div id="carousel-thumb1" class="carousel slide carousel-fade carousel-thumbnails mb-5 pb-4" data-ride="carousel">
              <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <img src="{{ asset('storage/products/'.$product->image) }}" class="mx-auto carousel d-block w-100 imageProduct" alt="...">
                   </div>
                  @foreach ($product->images as $image )
                 <div class="carousel-item">
                   <img src="{{ asset('storage/products/'.$image->image) }}" class="d-block w-100" alt="...">
                 </div>
                 @endforeach
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
               </button>
             </div>
              <!--/.Slides-->
            </div>
            <!--/.Carousel Wrapper-->
            <hr>
            <div class="col-md-12 mb-4">
               <div class="row">
                  @foreach ($product->images as $image)
                  <div class="col-md-4 p-2 zoom">
                          <img src="{{ asset('storage/products/'.$image->image) }}"
                            class="img-fluid">
                  </div>
                  @endforeach
            </div>
            </div>
          </div>
    
          <div class="col-lg-5 text-center text-md-left">
    
            <h2 class="h2-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">{{ $product->name }}</h2>
    
            <h3 class="h3-responsive text-center text-md-left mb-5 ml-xl-0 ml-4">
              <span class="red-text font-weight-bold mt-2">
                <strong>Prix : {{$product->price}} €</strong>
              </span>
            </h3>
    
            <div class="font-weight-normal">
              <p class="ml-xl-0 ml-4">
               {{$product->description}}
              </p>
              <div class="mt-5">
                <div class="row mt-3 mb-4">
                  <div class="col-md-12 text-center text-md-left text-md-right">
                     <cart-add-component product="{{ $product->id }}"></cart-add-component>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
</x-app-layout>
