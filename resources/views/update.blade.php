<!DOCTYPE html>
<html @lang('en')>
@include('section.head')
@include('section.nav')
<br>
<body>

    <div class="container w-50">
    <form action="/put/{{$id}}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Book title</label>
          <input name="book_title" type="text" class="form-control" value="{{$request['book_title']}}" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Book Description</label>
          <input name="description" value="{{$request['description']}}" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
          <select name="book_author" id=""class="form-control" >
            @foreach ($authors as $author)
            <option value="{{ $author['name'] }}">{{ $author['name'] }}</option>
            @endforeach
        </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book image </label>
            <input name="book_image" value="{{$request['book_image']}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>

        <button type="submit" class="btn btn-primary">Add</button>
      </form>
    </div>
</body>
</html>