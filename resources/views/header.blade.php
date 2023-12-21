<style>
    .nav{
        font-size: 20px;
    }
    a:onclick{
        color: white;
    }


</style>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom" style="margin-left: -100px;">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <h3>Interia</h3>
      </a>


      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="/home" class="nav-link px-2 link-dark">Home</a></li>
        {{-- <li><a href="/search" class="nav-link px-2 link-dark">Search</a></li> --}}
        @if(Auth::user()->role == 'member')
        <li><a href="/cart" class="nav-link px-2 link-dark">Cart</a></li>
        <li><a href="/history" class="nav-link px-2 link-dark">History</a></li>
        @else
        <li><a href="/additem" class="nav-link px-2 link-dark">Add Item</a></li>
        @endif
        <li><a href="/profile" class="nav-link px-2 link-dark">Profile</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <form action="/logout" method="get">
            <input type="submit" value="Logout" class="btn btn-primary">
        </form>
      </div>
    </header>


  </div>
