@extends('main2')

@section('title', '| View Post')

@section('content')


<div class="container pt-4">
    <div class="row">
        <div class="col-lg-8 ftco-animate">
            <h1>{{ $post->title }}</h1>
            <img src="{{ $post->image }}" alt="This is a photo">

            <p class="lead">{!! $post->body !!}</p>

            <hr>

            <div class="tagcloud">
                @foreach ($post->tags as $tag)
                <a href="#">{{ $tag->name}}</a>
                @endforeach
            </div>

            <div id="backend-comments" style="margin-top: 50px;">
                <h3>Comments <small>{{ $post->comments()->count() }} total</small></h3>

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th width="70px"></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($post->comments as $comment)
                        <tr>
                            <td>{{ $comment->name }}</td>
                            <td>{{ $comment->email }}</td>
                            <td>{{ $comment->comment }}</td>
                            <td>
                                <a href="{{ route('comments.edit', $comment->id) }}"><i
                                        class="fa fa-edit"></i></span></a>&emsp;
                                <a href="{{ route('comments.delete', $comment->id) }}"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <div class="col-md-4">
                    <div class="well">
                        <dl class="dl-horizontal">
                            <label>URL:</label>
                            <p><a
                                    href="{{ route('blog.single',$post->slug) }}">{{ route('blog.single',$post->slug) }}</a>
                            </p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Category:</label>
                            <p>{{ $post->category->name }}</p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Created At:</label>
                            <p>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
                        </dl>

                        <dl class="dl-horizontal">
                            <label>Last Updated:</label>
                            <p>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</p>
                        </dl>
                        <hr>
                        {{-- <div class="row">
					<div class="col-sm-6">
                        {!! Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-primary btn-block')) !!}
                            <a href="{{route('posts.edit',$post->id )}}"><i class="fa fa-edit"></i></a>
                    </div>
                    <div class="col-sm-6">
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

                        {!! Form::close() !!}
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ Html::linkRoute('posts.index', '<< See All Posts', array(), ['class' => 'btn btn-default btn-block btn-h1-spacing']) }}
        </div>
    </div>

</div>
</div>
</div>

@endsection
