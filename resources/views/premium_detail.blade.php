@extends('layout')

@section('content')

    <a href="/zeroseven" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <div class="bg-gray-50 border border-gray-200 p-10 rounded">
            <div
                class="flex flex-col items-center justify-center text-center"
            >
                <img
                    class="w-48 mr-6 mb-6"
                    src="{{$album['thumbnailUrl']}}"
                    alt=""
                />

                </h3>
                <div class="text-xl font-bold mb-4">{{$album['title']}}</div>
                
                <!--<div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> {{$heading}}
                </div>-->
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Music Genre
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