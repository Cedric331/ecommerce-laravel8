<template>
<h1>Panier</h1>
</template>

<script>
    export default {
  data () {
    return {
       products,
    }
  },
      props:['allProducts'],
      mounted() {
         this.products = this.allProducts
         console.log(this.products)
        },
   }
</script>
