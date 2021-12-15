@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
  <div class="py-15">
    <h1 class="text-6xl">
      {{ $post->title }}
    </h1>
  </div>
</div>

<div class="w-4/5 m-auto pt-20">
  <span class="text-gray-500">
    By <span class="font-bold italic text-gray-800">{{ $post->account->username }}</span>
  </span>

  <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
    {{ $post->body }}
  </p>

  <h3 class="mb-4 text-lg font-semibold text-gray-900">Comments</h3>
  
  <div class="w-5/5 m-auto pt-2 overflow-y-auto h-80">
    
    @foreach ($comments as $comment)
      <div class="space-y-4">

        <div class="flex">
          <div class="flex-shrink-0 mr-3">
            <img class="mt-2 rounded-full w-8 h-8 sm:w-10 sm:h-10"
              src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png" alt="">
          </div>

          <div class="flex-1 border rounded-lg px-4 py-2 sm:px-6 sm:py-4 leading-relaxed">
            <strong>{{ $comment->account->username }}</strong> <span class="text-xs text-gray-400"></span>
            <p class="text-sm">
              {{ $comment->text }}
            </p>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


<div class="w-4/5  m-auto pt-20">
  <form method="POST" action="{{ route('comments.store', ['post_id' => $post->id]) }}" enctype="multipart/form-data" class="space-y-5">
    @csrf
    <div class="mt-3 p-3 w-full">
      <textarea name="text" rows="3" class="border p-2 rounded w-full" placeholder="Write Comment..."
      value="{{ old('text') }}"></textarea>
    </div>
    <div class="bg-grey-lighter pt-15">
      <button type="submit" class="flex-shrink-0  bg-blue-500 hover:bg-blue-600 uppercase bg-transparent text-gray-100 text-sm 
            font-extrabold py-3 px-5 rounded-3xl">
        Submit Comment
      </button>
    </div>
  </form>
</div>


@endsection()