<template>
    <div>
       <article class="hideMessage" v-show="isVisible">
  <div class="message-header">
   {{ title }}
    <button class="delete" aria-label="delete" v-on:click="isVisible = false"></button>
  </div>
  <div class="message-body">
    {{ body }}
    
  </div>
</article>
    </div>
</template>



<script>
    export default {
        props: ['title', 'body'],
        data() {
            return{
                title: 'This is a Message Title' ,
                body: 'Insert Message Content in here' ,
                isVisible: true 
                               
            }
        }
        
    }
</script>

<style>
    
</style>