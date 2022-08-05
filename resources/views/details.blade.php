<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">

   

    <!-- Styles -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
<link href="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.min.css" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/show.css') }}" rel="stylesheet">
    <link href="{{ asset('css/details.css') }}" rel="stylesheet">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
</head>
<body>
@include('sweetalert::alert')

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img class="logo" src="{{ asset('photo/logo.png') }}" alt="">
                <p>Key In Click</p>
                    <!-- {{ config('app.name', 'Laravel') }} -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <!-- <ul class="navbar-nav me-auto">

                    </ul> -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                       

                        <!-- <p>@lang('lang.home')</p> -->
                        <li >
                        <a href="/show" ><li class="icon"><svg class="navb"  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                        <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                        </svg></li></a>
                        </li>

                        <li >
                        <a href="{{ route('favoraite-show') }}"><li class="icon"><svg  class="navb heart"  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16" color="#ee4c31">
                            <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>      
                        </svg></li></a>
                        </li>

                        <li >
                        <a href="{{ route('search')}}"><li class="icon"><svg class="navb"  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg></li></a>
                        </li>

                                 
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <!-- @lang('lang.Language') -->
                            <svg class="navb"  xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-translate" viewBox="0 0 16 16">
                            <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286H4.545zm1.634-.736L5.5 3.956h-.049l-.679 2.022H6.18z"/>
                            <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2zm7.138 9.995c.193.301.402.583.63.846-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6.066 6.066 0 0 1-.415-.492 1.988 1.988 0 0 1-.94.31z"/>
                            </svg>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink" >
                            <li><a class=" class="dropdown-item"" href="{{route('lang','en')}}" style="padding-left:10px" >@lang('lang.English')</a></li>
							<li><a class=" class="dropdown-item"" href="{{route('lang','ar')}}" style="padding-left:10px" >@lang('lang.Arabic')</a></li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            @lang('lang.more')
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                               <a href="/Add" class="dropdown-item" ><li>@lang('lang.add realestate')</li></a>
                               <a href="{{ route('your_real',Auth::id())}}" class="dropdown-item" ><li>@lang('lang.your Real')</li></a>
                               <a href="{{ route('Add-desire') }}" class="dropdown-item" ><li>@lang('lang.add desire')</li></a>
                            </ul>
                        </li>
                      
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <svg class="navb" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.222 5.468 2.37A7 7 0 0 0 8 1z"/>
                                    </svg>  {{ Auth::user()->name }}
                                                                    </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
       

                    </ul>
                </div>
            </div>
        </nav>

         
    @php
      $i=0;

    @endphp
    @if (Session::get('locale')== "ar")
        <style>
          .details-mian{
            direction:rtl;
          }
          .content-header-right {
                text-align: left;
            }
            .content-header-left p.address {
                text-align: right;
            }
            .agent-info p {
                text-align: right;
                font-size: 1.2em;
            }
            .description p {
                text-align: RIGHT;
                width: 76%;
            }
            th, td {
                text-align: RIGHT;
            }
        </style>  
    @else
        <style>
             .details-mian{
            direction:ltr;
            text-align:left;
          }

        </style>
    @endif


@if ($user->id == $details[0]->user_id)
	        	<style>
					  .content{
                        display: block;
                    }
			
				</style>  
		@else
	        	<style>
                      .content{
                        display: none;
                    }
				
					
				</style>
		@endif


     <main class="py-4 details-mian">
        <div class="container">
                <div class="content">
                    <div class="content-header">
                        <div class="content-header-left">
                            <h2>{{ __('lang.' .  $details[0]->property_type) }}</h2>
                            <p class="address"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg>     {{$details[0]->address}}</p>
                            <ul class="list">
                                <li> {{$details[0]->number_of_rooms}} @lang('lang.Rooms')</li>
                                <li>-</li>
                                <li> {{$details[0]->number_of_path_rooms}} @lang('lang.pathrooms')</li>
                                <li>-</li>
                                <li>{{$details[0]->area}}m2 @lang('lang.Area')</li>

                            </ul>
                        </div>
                        <div class="content-header-right">
                            <span class="price">{{$details[0]->price}}$</span>
                            <span class="type">{{ __('lang.' .  $details[0]->state) }}</span>
                            <div class="content">
                                <form action="{{route('success',$id)}}" method="POST">
                                    @csrf
                                <a ><button type="submit" class="servicedeletebtn"  id="Demo" >@lang('lang.success')</button></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-body">
                    <div class="images">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                            <div class="carousel-inner">
                                @for ($i = 1; $i <=$details[0]->countF; $i++)
                                        <div class="carousel-item active">
                                            <img src="{{asset('images/'.$details[0]->image_path.'/'.$i.'.jpg')}}" class="d-block w-100"  alt="">
                            </div>


                                @endfor

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                      
                       
                    </div>
                    <div class="agent-info">
                        <a href=""><button>@lang('lang.Send E-mail')</button></a>
                        <i></i><p>LinaSoleman63@gmail.com</p>
                        <h3>@lang('lang.Contact Admin')</h3>
                    </div>
                </div>

                <div class="description">
                    <h3>@lang('lang.Description')..</h3>
                    <p>{{$details[0]->description}}</p>
                </div>

                <div class="info">
                    <div class="details">
                        <h3>@lang('lang.details')..</h3>
                        <table>
                            <tbody>
                                <tr>
                                <td>@lang('lang.purpose')</td>
                                <td>{{ __('lang.' .  $details[0]->state) }}</td>
                                </tr>
                                <tr>
                                <td>@lang('lang.city')</td>
                                <td>{{ __('lang.'. $details[0]->country)}}</td>
                                </tr>
                                <tr>
                                <td>@lang('lang.floor')</td>
                                <td>{{$details[0]->floor}}</td>
                                </tr>
                                <tr>
                                <td>@lang('lang.Area')</td>
                                <td>{{$details[0]->area}}m2</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.Ownership')</td>
                                <td>Agent</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.Type')</td>
                                <td>{{ __('lang.' .  $details[0]->property_type) }}</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.number_of_rooms')</td>
                                <td> {{$details[0]->number_of_rooms}}</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.number_of_path_rooms') </td>
                                <td> {{$details[0]->number_of_path_rooms}}</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.Property Type')</td>
                                <td>{{ __('lang.' .  $details[0]->type) }}</td>
                                </tr>
                                <tr>
                                <td> @lang('lang.price')</td>
                                <td>{{$details[0]->price}}$</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                   

                </div>
                <div class="service">
                    <h3>@lang('lang.services')..</h3>
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        @foreach (json_decode($details[0]->services) as $member)
                                        {{ __('lang.' .  $member) }}-
                                        @endforeach
                                    </td>
                                    
                                </tr>
                            
                            </tbody>
                        </table>

                    </div>
             
                
            </div>

        </main>
    </div>
    <script
  src="https://code.jquery.com/jquery-3.6.0.slim.js"
  integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="
  crossorigin="anonymous"></script>

</body>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>                 

<script> 


$('.delete').onclick(function(){

    swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this imaginary file!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
    })
    .then((willDelete) => {
    if (willDelete) {
        swal("Poof! Your imaginary file has been deleted!", {
        icon: "success",
        });
    } else {
        swal("Your imaginary file is safe!");
    }
    });
});

$(document).on('click','.addToFavoraite',function(e){
            e.preventDefault();

            @guest()
                $('.not-looggedin-model').css('diplay','blok');
            @endguest
            $.ajax({
                type:'post',
                url:"{{url('liked/'.$details[0]->id.'/')}}",
                data:{
                    'realId':$(this).attr('data-product-id'),
                },
                success:function(response)
                {
                    swal(response.status);
                }
            });
        });

        $(document).on('click','.reserve',function(e){
            e.preventDefault();

            @guest()
                $('.not-looggedin-model').css('diplay','blok');
            @endguest
            $.ajax({
                type:'post',
                url:"{{url('reserve/'.$details[0]->id.'/')}}",
                data:{
                    'realId':$(this).attr('data-product-id'),
                },
                success:function(response)
                {
                    swal(response.status);
                }
            });
        });
 
</script>

</html>

