<x-app-layout>
   <div class="container my-5">
   <form action="" method="POST">
      @csrf
      @method('POST')
      <div class="mb-3">
        <label for="name" class="form-label">Nom du produit :</label>
        <input type="text" class="form-control" id="name" name="name" aria-describedby="Nom du produit">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Description du produit :</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
      </div>
      <div class="mb-3">
         <label for="price" class="form-label">Prix du produit :</label>
         <input type="number" step='0.01' class="form-control" id="price" name="price" aria-describedby="Prix du produit">
       </div>
      <button type="submit" class="btn btn-success">Créer</button>
    </form>
   </div>
</x-app-layout>