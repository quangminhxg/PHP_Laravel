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
    <div class="center">
        <h1 class="title">Title: {{ $article->title }}</h1>
        <br>
        <h4 class="sub-title">SubTitle: {{ $article->subTitle  }}</h4>
        <br>
        <div class="sub-title">Description: {{ $article->description  }}</div>
        <br>
        <div class="sub-title">Content: {{ $article->content  }}</div>
    </div>
    <br>
    <!-- Content here -->
    <form action="{{ url('article/create') }}" method="POST" role="form">
        <legend>Create new article</legend>
        {{ csrf_field()}}
        <div class="input-group input-group-sm mb-3">
            <div class="form-group row">
                <input type="text" name="title" id="title" placeholder="title" class="form-control">
                <input type="text" name="subTitle" id="subTitle" placeholder="Sub Title" class="form-control">
                <input type="text" name="description" id="description" placeholder="Description" class="form-control">
                <input type="text" name="content" id="content" placeholder="Content" class="form-control">
            </div>
        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <br>
    <legend>List article</legend>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Sub title</th>
            <th scope="col">Description</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($lstArticle as $articleObj)
        <tr>
            <td>{{$articleObj->title}}</td>
            <td>{{$articleObj->subTitle}}</td>
            <td>{{$articleObj->description}}</td>
            <td>{{$articleObj->content}}</td>
            <td>
                <button type="button" class="btn btn-primary"><a href="{{route('edit', [$articleObj->id])}}">Update</a></button>
                <button type="button" class="btn btn-danger"><a href="{{route('delete', [$articleObj->id])}}">Delete</a></button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {!! $lstArticle->links() !!}
    </div>
</div>
</body>
</html>
