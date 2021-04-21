@extends('dashboard')

@section('forumcontent')
    @foreach($threads as $thread)
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div class="mt-8 text-2xl">
                            <a href="{{$thread->path()}}">{{$thread->title}}</a>
                        </div>

                        <div class="mt-6 text-gray-500">
                            {{$thread->body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection



