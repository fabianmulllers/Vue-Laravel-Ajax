<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script   src="http://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>

        <script src="{{asset('js/vue.js')}}"></script>
        <script src="{{asset('js/vue-resource.min.js')}}"></script>
    </head>
    <body>
        <div class="container">

            {{--<tasks list="{{$tasks }}"></tasks>--}}
            {{--<tasks></tasks>--}}
   {{--@{{$data | json }}--}}
        </div>

 <h1>Listado de usuarios</h1>
<ul class="list-group"></ul>
  @foreach($users as $user)

  <li class="list-group-item">
              {{$user->name}}
              {{$user->email}}
  </li>
      @endforeach
    </body>
    <template id="tasks-template">

        <h1>My Tasks</h1>
        <ul class="list-group">


            <li class="list-group-item" v-for="task in list">
                @{{task.body}}


                <strong @click="deleteTask(task)">x</strong>
            </li>


        </ul>


    </template>
    <script src="//js.pusher.com/3.1/pusher.min.js"></script>
    <script src="{{asset('js/main.js')}}"></script>



</html>
