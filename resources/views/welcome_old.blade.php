<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css" rel="stylesheet" type="text/css">

        <!-- Styles -->


    </head>
    <body>
<div id="root" class="container">

    <modal>
        <template slot="header">My Title</template>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti dignissimos earum expedita maiores,
        neque odio pariatur perspiciatis possimus quasi quibusdam quidem ratione reiciendis vel! Deleniti ipsa mollitia perferendis quos sit.
        <div slot="footer">
            <button class="button is-success">Save changes</button>
            <button class="button">Cancel</button>
        </div>
    </modal>

        {{--<tabs>--}}
            {{--<tab name="About Us" :selected="true">--}}
                {{--<h1>Here is the content for the about our us tab</h1>--}}
            {{--</tab>--}}
            {{--<tab name="About Our Culture">--}}
                {{--<h1>Here is the content for the about our culture tab</h1>--}}
            {{--</tab>--}}
            {{--<tab name="About Our Vision">--}}
                {{--<h1>Here is the content for the about our vision tab</h1>--}}
            {{--</tab>--}}
            {{--<tab name="About Our Other Things">--}}
                {{--<h1>Here is the content for the about our things tab</h1>--}}
            {{--</tab>--}}
        {{--</tabs>--}}

        {{--</div>--}}

        {{--<div class="flex-center position-ref full-height">--}}

            {{--<div class="content">--}}

                {{--<div class="title m-b-md">--}}
                    {{--Laravel Blog--}}
                {{--</div>--}}

                {{--<div class="links">--}}
                    {{--<a href="{{ url('/home') }}">Home</a>--}}
                    {{--<a href="{{ url('/tasks') }}">Tasks board</a>--}}
                    {{--@auth--}}
                    {{--<a href="{{ url('/logout') }}">Logout  {{ Auth::user()->name }}</a>--}}
                    {{--@endauth--}}
                {{--</div>--}}
            {{--</div>--}}

        </div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="js/mine1.js"></script>
    </body>
</html>
