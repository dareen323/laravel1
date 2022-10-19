@include("section.head")
@include('section.nav')
<br>
{{-- <a href="/index" class="btn btn-primary mx-4">back</a> --}}
<div class=" d-flex ">
@foreach ($books as $book)
<div id="cardsDiv" class="card m-5" style="width: 15rem;">
    <img src="{{$book['book_image']}}" class="card-img-left" alt="..." style="height: 300px;">
    <div class="card-body">
      <h5 class="card-title">{{$book['book_title']}}</h5>
      <p class="card-text"><a href="author/{{$book['author_id']}}">{{$book['book_author']}}</a></p>
      <p class="card-text">{{$book['description']}}</p>
      <a href="fdelete/{{$book['id']}}"  class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this card!!')"
      >Delete</a>
      <a href="restore/{{$book['id']}}" class="btn btn-success">Restore</a>
    </div>
  </div>

  @endforeach
</div>
  <footer>
   
  </footer>
</body>
</html>