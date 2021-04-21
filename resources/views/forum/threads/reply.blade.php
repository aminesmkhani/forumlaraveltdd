<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                <div class="mt-8 text-2xl">
                    <a href="" class="text-blue-600">
                        {{$reply->owner->name}}
                    </a>
                    said
                    {{$reply->created_at->diffForHumans()}}
                </div>

                <div class="mt-6 text-gray-500">
                    {{$reply->body}}
                </div>
            </div>
        </div>
    </div>
</div>
