@extends('layout')
@section('content')


<!--replace heading here-->
<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
   @if(count($albums) == 0)
      <p>No listings found</p>
   @endif
   @foreach($albums as $album)
        <!-- Item 1 -->
        <!--<div class="bg-gray-50 border border-gray-200 rounded p-6">
            {{$album['title']}}
        </div>-->

        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    class="hidden w-48 mr-6 md:block"
                    src={{asset('images/music-album.png')}}
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="/listings/{{$album['id']}}">{{$album['title']}}</a>
                    </h3>
                    <!--<div class="text-xl font-bold mb-4"></div>
                
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> 
                    </div>-->
                </div>
            </div>
        </div>
        
   @endforeach

</div>
@endsection