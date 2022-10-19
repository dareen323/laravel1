<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href={{'index'}}>Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        
        
      </ul>
      <form action="/findBook" method="POST">
        @csrf
        <div class="row " style="flex-wrap: nowrap ;margin-right:40px;" >
          <input name="search" type="text" placeholder="Search for a book" style="margin-right:10px;" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text"></div> --}}
          <div>
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </div>
        </div>
      </form>


    </div>
  </nav>