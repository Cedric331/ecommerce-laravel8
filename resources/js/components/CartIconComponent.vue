<template>
      <li class="nav-item">
         <a class="nav-link text-white" aria-current="page" @click="panier()" href="#" style="font-size: 20px;"><i class="fas fa-shopping-cart"></i>
            <span v-if="count > 0" style="font-size:10px;" class="badge bg-light text-dark">{{count}}</span>
         </a>
      </li>
</template>

<script>
    export default {
  methods: {
     panier(){
        axios({
            method: 'get',
            url: 'http://127.0.0.1:8000/cart/index',
         })
         .then(function (response) {
         })
         .catch(function (erreur) {
         });
     }

  },
  data () {
    return {
       count : 0,
    }
  },
  props: ['countcart'],
      mounted() {
         this.count = this.countcart
        }
    }
</script>
