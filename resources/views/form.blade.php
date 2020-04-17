<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

  <!-- ЭТО ШАБЛОН БЫЛ ДЛЯ ОТПРАВКИ ПИСЕМ. Но он все еще работает по ссылке form-->
{!! Form::open(['url' => 'send']) !!}

    {{Form::text('email')}}

    {{Form::submit('submit')}}

{!! Form::close() !!}
</body>
</html>
