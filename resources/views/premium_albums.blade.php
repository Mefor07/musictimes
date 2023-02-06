@extends('layout')
@section('content')


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
                    src={{$album['url']}}
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="/listings/{{$album['id']}}">{{$album['title']}}</a>
                    </h3>

                    <h4 class="text-1xl">
                        <a href="/listings/{{$album['id']}}">{{$album['url']}}</a>
                    </h4>
                    
                </div>
            </div>
        </div>
        
   @endforeach

</div>
@endsection