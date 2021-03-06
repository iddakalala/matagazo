@extends ('layouts.master')

@section('content')
      <div class="col-sm-8 blog-main">

        <h1>{{$post->title}}</h1>

         {{$post->body}}
         <hr>

         

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
        		<form method="POST" action="/posts/{{ $post->id }}/comments">
                   {{ csrf_field() }}

        		     <h3>your comments here</h3>
        			<div class="form-group">
        				<textarea name="body" placeholder="Your Comments here "  class="form-control">
        					
        				</textarea>
        			</div>
                     <div class="form-group">
                       <button type="submit" class="btn btn-primary">add comments</button>
                     </div>
        		</form>
            @include ('layouts.errors')
        	</div>
        </div>
      </div>

@endsection