
/**
 * Created by fabian on 19-07-16.
 */

var  Vue = require('vue');
var  Alert = require('./components/Alert.vue');
var  VueResource = require('vue-resource');
Vue.use(VueResource);


Vue.http.headers.common['X-CSRF-TOKEN']= document.querySelector('#token').getAttribute('value');
// Vue.http.options.emulateJSON = true;


new Vue({

    el:'#app',
    data:{
        messages:[],
        newMessages:{

            name:'',
            message:'',
        },
        submitted: false,


    },
    ready:function(){

        this.fetchMessage();

    },
    components:{

        alert: Alert

    },

    filters:{



        reverse:require('./filters/reverse')
    },

    computed:{

        errors:function(){

            for(var i in this.newMessages){

                if(! this.newMessages[i]) return true;

            }

            return false;
        }

    },



    methods:{

        fetchMessage:function(){

            var resource = this.$resource('api/message{/id}');
            resource.get({})
                .then(function(data){
                    this.$set('messages',data.json());

                });

        },

        onSubmitForm:function(){



            var resource = this.$resource('api/message{/id}');
            resource.save({},this.newMessages)
                .then(function(data){


                });
            this.submitted= true;
            this.messages.push(this.newMessages);
            this.newMessages={ name:'',message:'' };
        },


    }





});

