@layout('layouts.default')

@section('content')
<div>
	<h1>Application for Internship</h1>

	@if(Auth::check())
		@if($errors->has())
			<p>The following errors have occurred:</p>

			<ul id="form-errors">
				{{ $errors->first('main', '<li>:message</li>') }}
			</ul>
	    <p>@endif

<p>Application for the position Internship in Software Engineering@SKANATEK</p>
<ul>
	<li>Internship in Software Engineering</li>
    <li>An answer to the question: "Why do you want to work with us?" </li>
    <li>CV</li>
    <li>Deliverables for the Introductory task</li>
    <li>How did you find us?</li>
</ul>

	{{ Form::close() }}</p>

	    <p> @else </p>
<p>Please login to view this content.</p>
	@endif
</div><!-- end ask -->

@endsection