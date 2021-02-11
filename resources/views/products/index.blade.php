<x-app-layout>

<div class="container mt-5">
   <section class="dark-grey-text text-center">
     <h3 class="font-weight-bold mb-4 pb-2">Nos Produits</h3>
     <div class="row">
      @foreach ($products as $product )
       <div class="col-lg-3 col-md-6 mb-4 d-flex align-items-stretch">
         <div class="card align-items-center">
           <div class="view overlay">
             <img src="{{ asset('storage/products/'.$product->image) }}" class="card-img-top"
               alt="{{ $product->name }}">
           </div>

           <div class="card-body text-center">
             <a href="{{ route('products-show', ['product' => $product->id]) }}" class="grey-text">
               <h4>{{ $product->name }}</h4>
             </a>
             <h5 class="font-weight-bold blue-text mb-0">
               <strong>{{ $product->price }} €</strong>
             </h5>
           </div>
           <cart-add-component product="{{ $product->id }}"></cart-add-component>
         </div>
       </div>
       @endforeach

     </div>
   </section>
 </div>

</x-app-layout>