<template>
      <li class="nav-item">
         <a class="nav-link text-white" aria-current="page" href="#" style="font-size: 20px;"><i class="fas fa-shopping-cart"></i>
            <span v-if="count > 0" style="font-size:10px;" class="badge bg-light text-dark">{{count}}</span>
         </a>
      </li>
</template>

<script>
    export default {
  data () {
    return {
       count : 0
    }
  },
  props: {
  },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
