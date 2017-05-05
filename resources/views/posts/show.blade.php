@extends ('layouts.master')

@section('content')
      <div class="col-sm-8 blog-main">

        <h1>{{$post->title}}</h1>

         {{$post->body}}
         <hr>

         <h3>Comments</h3>

          <div class="comments">

          <ul class="list-group">
 	             @foreach($post->comments as $comment)
 
               <li class="list-group-item">

                 <strong>
                   {{ $comment->created_at->diffForHumans() }}: &nbsp;
                 </strong>

               	 {{$comment->body}}
               </li>
               @endforeach
          </ul>
          </div>
         <hr>
        <div class="card">
        	<div class="card-block">
        		hhhhh
        	</div>
        </div>
      </div>

@endsection