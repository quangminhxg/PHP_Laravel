<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>

    </style>
</head>
<body>
<div class="container">
    <!-- Content here -->
    <form action="{{ url('article/update') }}" method="POST" role="form">
        <legend>Create new article</legend>
        {{ csrf_field()}}
        <div class="input-group input-group-sm mb-3">
            <div class="form-group row">
                <input type="text" name="id" id="id" placeholder="title" class="form-control" hidden="true" value="{{$article->id}}">
                <input type="text" name="title" id="title" placeholder="title" class="form-control" value="{{$article->title}}">
                <input type="text" name="subTitle" id="subTitle" placeholder="Sub Title" class="form-control" value="{{$article->subTitle}}">
                <input type="text" name="description" id="description" placeholder="Description" class="form-control" value="{{$article->description}}">
                <input type="text" name="content" id="content" placeholder="Content" class="form-control" value="{{$article->content}}">
            </div>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
</body>
</html>
