<!DOCTYPE HTML>
<html>
<head>
  <title> Success</title>
</head>                      <!-- Это форма для заполнения книги, просто по фасту накидал MVP-->
<body>
  {!! Form::open(['url' => '/store']) !!} <!-- сабмит бук это та ссыль на которую
                                                  нас отправит после кнопки сабмит
                                                  её мы настраиваем в web.php
                                                    То, куда она нас отправит (127.0.0.1:8000/submitbook) должно быть post а не GET-->
<div class="form-group">
<label for="exampleInputEmail1">Title<br></label>
  {{Form::text('title')}}
  <br><br>
  {{Form::text('author')}}
  <br><br>
  {{Form::text('url')}}
</div>
<div class="form-group">
<label for="exampleInputPassword1">Price</label>
<br><br>
{{Form::text('price')}}
</div>
{{Form::submit('submit')}}
<br><br>
{!! Form::close() !!}
</body>
</html>
