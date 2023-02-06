@extends('layout')
@section('content')

<section
class="relative h-72 bg-slate-900 flex flex-col justify-center align-center text-center space-y-4 mb-4"
>
<div
    class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
    style="background-image: url('images/laravel-logo.png')"
></div>

<div class="z-10">
    <h1 class="text-6xl font-bold uppercase text-white">
        Music<span class="text-slate-400">Times</span>
    </h1>
    <p class="text-2xl text-gray-200 font-bold my-4">
        Find your favorite music albums
    </p>
    <div>
        <a
            href="#"
            class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-white hover:border-white"
            >Sign Up to get premium music</a
        >
    </div>
</div>
</section>

<!--replace heading here-->
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
   @if(count($albums) == 0)
      <p>No listings found</p>
   @endif
   @foreach($albums as $album)

        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src={{asset('images/music-album.png')}}
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="/zeroseven/detail/{{$album['id']}}">{{$album['title']}}</a>
                    </h3>
                    
                </div>
            </div>
        </div>
        
   @endforeach

</div>
@endsection