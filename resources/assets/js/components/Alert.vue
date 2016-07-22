<template>
    <div class="Alert"
         v-bind:class="
         {
          'Error' : type == 'error' ,
          'Success' : type == 'success'
           }"

         v-show="show">
        <p>
            <slot>este es un mensaje</slot>
        </p>
    </div>
</template>
<style>

    .Alert{
        padding: 10px;
        position: absolute;
        botton:40 px;
        right:40px;
    }
    .Success{
        border: 10px solid green;
    }
    .Error{
        border: 10px solid red;
    }

</style>

<script >

  /* module.exports ={

       data:function(){

           return{
               show :true,
           }
       },
       props:['type'],

       ready:function(){
        var that= this;
           setTimeout(function(){ that.show = false; }, 3000);

       },


   }*/

  export default {
      data () {
          return {
              show: true
          }
      },
       props:['type'],

      ready(){

          setTimeout(() => this.show = false , 3000);
      }

  }

</script>
