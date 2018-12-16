<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
        <title>{{config('app.name')}}</title>

    </head>
    <body>
    	<div class="col-3">@include('inc.navbar1')</div>
    	<div class="container col-6" style="border-left: solid; margin-left: 250px;">
    		<br>
            @include('inc.messages')
        	@yield('content')
    	</div>
        
        <script src="{{asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace('article-ckeditor');
        </script>
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    </body>
</html>
