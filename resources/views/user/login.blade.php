@if (Route::has('login'))
                
                @auth
                      <li class="nav-item">
                            <a class="nav-link" href="{{url('showcart')}}"><i class="fas fa-shopping-cart"></i>Cart[{{$count}}]</a>
                      </li>
                        <x-app-layout>

                        </x-app-layout>
   
                    @else
                        <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                        @endif
                    @endauth
                
            @endif