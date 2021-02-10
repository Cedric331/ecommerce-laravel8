<x-app-layout>
   <div class="container my-5">
      @if ($errors->any())
         <div class="alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
      @endif

      @if ($message = Session::get('success'))
         <div class = "alert alert-success alert-block" > 
         	{{-- <button type="button" class="close" data-ignore="alert">×</button> --}}
               <strong>{{$message}}</strong>
         </div>
      @endif

      <a href="{{ route('admin-index') }}" class="btn btn-primary my-4">Revenir à l'administration</a>
   <form action="" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="name" class="form-label">Nom du produit :</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" aria-describedby="Nom du produit">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description du produit :</label>
        <textarea class="form-control" name="description" value="{{ old('description') }}" id="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
         <label for="price" class="form-label">Prix du produit :</label>
         <input type="number" step='0.01' class="form-control" value="{{ old('price') }}" id="price" name="price" aria-describedby="Prix du produit">
      </div>
      <div class="mb-3">
         <label for="image" class="form-label">Image principal : </label>
         <input type="file" name="image" class="form-control" id="image" required>
       </div>
      <div class="mb-3">
         <label for="images" class="form-label">Images supplémentaires : </label>
            <input type="file" name="imageFile[]" class="form-control" id="images" multiple="multiple">
         <div class="form-text">Vous pouvez télécharger plusieurs images en même temps avec la touche ctrl.</div>
       </div>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
   </div>
</x-app-layout>