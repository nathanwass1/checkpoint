<template>
    <div>
        <ul>
            <li v-for="popcorn in popcorn" v-text="popcorn"></li>
        </ul>
        
        <input type="text" v-model="newPopcorn" @blur="addPopcorn">
    </div>
</template>





<script>
    export default {
        
        data() {
            return{
                     popcorn: [],       
                     newPopcorn: ''
            };
        },
        
        created(){
            axios.get('/popcorn').then(response => (this.popcorn = response.data));
            
            window.Echo.channel('popcorn').listen('PopcornCreated', e => {
                
                this.popcorn.push(e.popcorn.body);
            });
        },
        
        methods: {
            addPopcorn(){
                
                axios.post('/popcorn', { body: this.newPopcorn });
                this.popcorn.push(this.newPopcorn);
                this.newPopcorn = "";
            }
        }
            
    };
</script>


<style>

</style>