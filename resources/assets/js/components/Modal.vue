<template>

<div class="modal is-active" v-show="isVisible">
  <div class="modal-background"></div>
  <div class="modal-content">
    <p class="image is-4by3">
      <img src="https://www.postmycar.co.uk/wp-content/uploads/2018/07/Picture1.png" alt="">
    </p>
  </div>
  <button class="modal-close is-large" v-on:click="isVisible = false" aria-label="close"></button>
</div>

</template>



<script>
    export default {
        
        data() {
            return{
              
                    isVisible: true 
                                          
            }
        }
        
    }
</script>


<style>

</style>