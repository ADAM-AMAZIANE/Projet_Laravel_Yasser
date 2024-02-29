                                 
                                            <!--  icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

 <nav style="background-color: rgba(225, 157, 69, 0.801) ;height: 98px;" class="fixed-top navbar navbar-expand-lg navbar-light ">
    <a style="margin-right: 50px;" class="navbar-brand" href="/">     <img style="height: 100px; " src="{{ asset('imgs/logo.jpg') }}" alt="LOGO">    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">

      <ul class="navbar-nav">
        <li class="nav-item">
          <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/produitsr/cooking">Cooking</a>
        </li>
        <li class="nav-item">
          <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/produitsr/kids">Kids</a>
        </li>
        <li class="nav-item">
            <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/produitsr/fiction">Fiction</a>
          </li>
          <li class="nav-item">
            <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/produitsr/manga">Manga</a>
          </li>
  
    @if(Auth::user())

        @if(Auth::user()->role==='ADMIN')
                <li class="nav-item">
                        <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="{{ route('create') }}">ADD Product</a>
                </li>
                <li class="nav-item">
                        <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/espaceadmin">Update Product</a>
                </li>
        @endif
        @if(Auth::user()->role==='USER')
                <li class="nav-item">
                        <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/espaceclient">Client area</a>
                </li>
        @endif
        <li class="nav-item active">

            <form action="/logout" method="POST">
                @csrf
                
                <button style="background-color: rgba(225, 157, 69, 0.801)" type="submit" class="btn" href="/logout">logout </button>
            </form>
        </li>

    @else
        <li class="nav-item">
            
            <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Log in</a>
        </li>
        <li class="nav-item">
            <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/register"><i class="fas fa-user-plus"></i> Sign up</a>
        </li>
    @endif
    <li class="nav-item">
        <a style="font-weight: bolder; font-size: 20px;" class="nav-link" href="/cart"><i class="fas fa-shopping-cart"></i> </a>
    </li>
    
                                   
   

      </ul>
    </div>
  </nav>






