@extends('main')

@section('title', "| Edit Categories")

@section('content')

<div style="background-image: url('/images/image1.png'); height : 100px" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
        <div class="col-md-12 ftco-animate">
            {{-- <h2 class="subheading">Hello! Welcome to</h2> --}}
            {{-- <h1 class="mb-4 mb-md-0">Edit Categories</h1> --}}
            <div class="row">
                <div class="col-md-7">
                    {{-- <div class="text">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div> --}}
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>

<div class="container">
	{{ Form::model($category, ['route' => ['categories.update', $category->id], 'method' => "PUT"]) }}

		{{ Form::label('name', "Title:") }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}

		{{ Form::submit('Save Changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;']) }}
	{{ Form::close() }}
</div>
@endsection
