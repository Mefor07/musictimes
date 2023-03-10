@extends('layout')

@section('content')

    <a href="/albums" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{asset('images/music-album.png')}}"
                    alt=""
                />

                <h3 class="text-2xl mb-2"> 
                    <img
                    class="w-48 mr-6 mb-6"
                    src="{{asset('music-album.png')}}"
                    alt=""
                />
                </h3>

                
                <!--<div class="text-xl font-bold mb-4">{{$heading}}</div>-->
                <h3 class="text-3xl font-bold mb-4">
                    Music Albums under ( {{$heading}} )
                </h3>
                

                <!--loop through albums here-->
                <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
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
                                        <a  href="/albums/{{$album['id']}}/photos/{{$album['title']}}">{{$album['title']}}</a>
                                    </h3>
                                    
                                </div>
                            </div>
                        </div>
                        
                @endforeach

                <!--end looop here-->
                </div>
                
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        ZeroSeven Studios
                    </h3>
                    <div class="text-lg space-y-6">
                        

                        <a
                            href="mailto:dialog@zeroseven.de"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80 p-6"
                            ><i class="fa-solid fa-envelope"></i>
                            Contact ZeroSeven</a
                        >

                        <a
                            href="https://www.zeroseven.de/"
                            target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80 p-6"
                            ><i class="fa-solid fa-globe"></i> Visit ZeroSeven
                            Website</a
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
