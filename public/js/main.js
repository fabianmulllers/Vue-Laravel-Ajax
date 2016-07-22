/**
 * Created by fabian on 17-07-16.
 */


Vue.component('tasks',{
   
    template:'#tasks-template',

    data:function(){

      return {

          list:[],
      }

    },
    // props:['list'],




    created:function(){
        this.fetchTaskList();


    },

    methods:{

       fetchTaskList:function(){

             // this.list = JSON.parse(this.list);
       /*      $.getJSON('api/tasks',function(tasks){
                 console.log(tasks)
                 this.list = tasks;

             }.bind(this));*/

           var resource = this.$resource('api/tasks{/id}');

           resource.get({})
             .then(function(tasks){
                 console.log(tasks);
                 this.$set('list', tasks.json());

             });

         },


        deleteTask:function(task){
         this.list.$remove(task);
        },
    }
    
    
});

new Vue({
        el:'body',
        data:{

            pusher:'',
            channel:'',
            cluster:'eu',
            encrypted:true

        },

  ready: function(){
      this.pusher= new Pusher('3f4a0db16fb1956da750',{

          cluster : this.cluster,
          encrypted : this.encrypted,

      });

      channel= this.pusher.subscribe('test_channel');
      channel.bind('my_event',function(data){

          alert(data.message);
      });
      channel.bind('departamento',function(data){

          alert(data.message);
      })

  }


});