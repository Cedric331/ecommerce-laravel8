<template>
      <div class="my-2 d-flex justify-content-center">
         <button @click="add()" class="btn btn-primary">Ajouter au panier</button>
      </div>
</template>

<script>
    export default {
  methods: {
     add(){
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/cart/add/'+this.product,
         })
         .then(function (response) {
            flash('Le produit '+ response.data.name + ' est ajouté au panier', 'success');
         })
         .catch(function (erreur) {
         });
      }
  },
  props: ['product'],

      mounted() {
        }
    }
</script>
