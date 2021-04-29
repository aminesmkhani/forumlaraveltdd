@extends('dashboard')

@section('forumcontent')

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                        <div class="mt-8 text-2xl">
                            <a href="#" class="text-blue-600">{{$thread->creator->name}}</a> posted:
                            {{$thread->title}}
                        </div>

                        <div class="mt-6 text-gray-500">
                            {{$thread->body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>




    @foreach($thread->replies as $reply)

        @include('forum.threads.reply')

    @endforeach

    @if(auth()->check())
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                        <div class="mt-6 text-gray-500">
                            <form method="POST" action="{{$thread->path() . '/replies'}}">
                                @csrf
                                <div>
                                    <label for="about" class="block text-sm font-medium text-gray-700">
                                        Body
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="body" name="body" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Have something to say?"></textarea>
                                    </div>
                                </div>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Post
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @else
        <p class="mt-2 text-sm text-gray-500">

            Please <a class="text-blue-600" href="{{route('login')}}">sign in</a>  to participate in this discussion
        </p>
    @endif

@endsection
