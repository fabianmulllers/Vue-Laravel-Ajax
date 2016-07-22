
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <meta id="token" name="token" value="{{ csrf_token() }}">
    <title>Guestbook</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <meta
</head>

<style>

    body{

        padding: 2em 0;
    }
    .errors{

        color: red;
    }

</style>
<body>

<div id="app">

<div class="container">
    <form method="POST" class="form-group" @submit.prevent="onSubmitForm">
        <h1>Ingresar nuevo Mensaje</h1>
                    <div class="row">
                            <div class="col-md-10 ">
                                <label>
                                    Name:
                                    <span v-if="! newMessages.name" class="errors">*</span>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" v-model="newMessages.name">

                            </div>
                    </div>

                <div class="row">
                    <div class="col-md-10">
                        <label>
                            Message:
                        <span class="errors" v-if="! newMessages.message">*</span>
                        </label>
                        <textarea name="message" id="message" class="form-control" v-model="newMessages.message"></textarea>

                    </div>
                </div>

               <div class="row">
                   <div class="col-md-6">
                       <button class="btn btn-success" type="submit" :disabled="errors">Enviar</button>
                   </div>
               </div>
    </form>


    <div class="alert alert-success" v-show="submitted"> Gracias por enviar</div>
<hr>
    
        <article v-for="message in messages">
            <h3>
                @{{message.name}}
            </h3>

            <div class="body"> @{{message.message}}</div>

        </article>

</div>
</div>

</body>

<script src="{{asset('js/vueify.js')}}"></script>

</html>