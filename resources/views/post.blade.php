@extends('layouts.main')

@section('container')


 <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
                <h1 class="mb-3">{{ $post->title }}</h1>
        
                 <p>By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        
                 @if ($post->image)
                 <div style="max-height: 350px; overflow: hidden;">
                     <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid">
                 </div>
             @else
                 <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid">
             @endif


            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        
            <a href="/posts" class="text-decoration-none d-block mt-5">Back To Blog</a>  
        </div>
    </div>
    <hr>
 </div>

 
 @auth

       <!-- Comment Form -->
 <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
                <h3>Komentar</h3>
                @foreach ($comments as $comment)
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <h4>
                            <img src="{{ $comment->author->getAvatar() }}" style="max-height : 80px; border-radius : 50%; " alt="Avatar" >
                            {{  $comment->author->name  }}
                        </h4>
                            {!! $comment->comment !!}
                            <p>{{ $comment->created_at->diffForHumans()}}</p>
                        </p>
                    </li>
                </ul>
                <hr>
        @endforeach
                <form method="post" action="">
                    @csrf
                    <div class="form-floating">
                      <label for="post_id" ></label>
                      <input type="hidden" class="form-control" id="post_id" name="post_id" value="{{ $post->id }}">
                    </div>
                    <div class="form-floating">
                      <label for="user_id" ></label>
                      <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ auth()->user()->id }}">
                    </div>
                    <div class="form-floating">
                        <h5>{{ auth()->user()->name }}</h5>
                    </div>
                    <div class="form-floating">
                        <input id="comment" type="hidden" name="comment">
                        <trix-editor input="comment"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit Komentar</button>
                  </form>
            </main>
            
        </div>
    </div>
 </div>
      @else
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col md-8">
                <h3>Komentar</h3>
                @foreach ($comments as $comment)
                <ul class="list-unstyled">
                    <li>
                        <p>
                            <h4>
                            <img src="{{ $comment->author->getAvatar() }}" style="max-height : 80px; border-radius : 50%; " alt="Avatar" >
                            {{  $comment->author->name  }}
                        </h4>
                            {!! $comment->comment !!}
                            <p>{{ $comment->created_at->diffForHumans()}}</p>
                        </p>
                    </li>
                </ul>
                <hr>
        @endforeach
                <a class="btn btn-primary" href="/../login" class="{{ Request::is('login') ? 'active' : '' }}">Login To Comment</a>
            </div>
        </div>
     </div>
      
          
      
      @endauth


<script>
    document.addEventListener('trix-file-accept', function(e) {
    e.preventDefault();
  });
</script>
    
@endsection