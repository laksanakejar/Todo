@extends('layout')

@section('content')
<div class="container content">  
  <form method="POST" action="/todo/store" id="create-form">
    @csrf
    <h3>Create Job</h3>
    @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <fieldset>
        <label for="">Job Title</label>
        <input placeholder="title of job" type="text" name="title">
    </fieldset>
    <fieldset>
        <label for="">Work Target Date</label>
        <input placeholder="Work Target Date" type="date" name="date">
    </fieldset>
    <fieldset>
        <label for="">Description Job</label>
        <textarea name="description" placeholder="Type your descriptions here..." tabindex="5"></textarea>
    </fieldset>
    <fieldset>
        <button type="submit" id="contactus-submit">Submit</button>
    </fieldset>
    <fieldset>
        <a href="/todo/" class="btn-cancel btn-lg btn">Cancel</a>
    </fieldset>
  
  </form>
</div>
@endsection