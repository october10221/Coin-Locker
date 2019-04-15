        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="https://www.igeargeek.com/wp-content/uploads/2018/10/logo-768x674.png" width="30" height="30" class="d-inline-block align-top" alt="">
                I GEAR GEEK ( {{ auth()->user()->name }} )
            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">  {{ __('Logout') }} </a>
        </nav>
        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
         @endif

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
        </form>