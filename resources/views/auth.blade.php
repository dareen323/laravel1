@include("section.head")
{{-- @include('section.nav') --}}

</head>
<body>

    <header>
        <nav
          class="navbar navbar-expand-sm navbar-light"
          style="background-color: #fff"
        >
          <div class="container">
            <a href="/index"  class="btn btn-success p-2" style="margin-left: 4%;margin-top:2%">back</a>

            <button
              class="navbar-toggler d-lg-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapsibleNavId"
              aria-controls="collapsibleNavId"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
        
            </div>
          </div>
        </nav>
      </header>
      {{-- <a href="/sortUp"><button  class="btn btn-primary">sort up</button></a></div> --}}
    {{-- <a href="/sortDown"><button  class="btn btn-primary">sort Down</button></a></div> --}}

<div class=" d-flex" >
    <div class="card m-6" style="width: 500px;">
        <div class="card-body">
            <h5 class="card-title mb-4">Author Name : <b>{{$author['name']}}</b></h5>
            <p class="card-text"> Nathonality: <b>{{$author['nationality']}}</b></p>
            <p class="card-text"> Email : <b>{{$author['email']}}</b></p>
        </div>
    </div>

    @foreach ($books as $book)
    <div id="cardsDiv" class="card m-5" style="width: 15rem;">
        <img src="{{$book['book_image']}}" class="card-img-left" alt="..." style="height: 300px;">
        <div class="card-body">
          <h5 class="card-title">{{$book['book_title']}}</h5>
          {{-- <p class="card-text"><a href="author/{{$book['author_id']}}">{{$book['book_author']}}</a></p> --}}
          <p class="card-text">{{$book['description']}}</p>
          {{-- <a href="delete/{{$book['id']}}"  class="btn btn-danger" onclick="return confirm('Are you sure to delete')" --}}
          {{-- >Delete</a> --}}
          {{-- <a href="update/{{$book['id']}}" class="btn btn-info">Edit</a> --}}
        </div>
      </div>
    
      @endforeach
</div>
  <footer>
    <ul id="social">


      {{-- <li><p style="font-size: 15px">@waad</p></li> --}}
    </ul>
  </footer>
</body>
</html>
