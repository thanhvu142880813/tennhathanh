<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <title>Quản lí biển báo</title>
    <LINK REL="SHORTCUT ICON"  HREF="source/img/logo.png">
    <base href="{{asset('')}}" target="_blank, _self, _parent, _top">
    <!-- Bootstrap Core CSS -->
    	@include('layouts.client.head')
           @yield('css')
</head>

<body>

    <div id="wrapper">

       @include('layouts.client.navigation')

       @yield('content')

    </div>
    <!-- /#wrapper -->

	 @include('layouts.client.script')
       @yield('js')
</body>

</html>

