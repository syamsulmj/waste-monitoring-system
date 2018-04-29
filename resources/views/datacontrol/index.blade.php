@extends('master')

@section('content')
  <div class="container data-control">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
    @endif
    <div class="data-adding-form">
      <div class="title">
        <span>Add New Dust Bin</span>
      </div>
      <form action="{{ action('DataController@create') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label class="form-label">Operator ID</label>
          <input name="staff-id" class="form-control" placeholder="Eg: s-1" />
        </div>
        <div class="form-group">
          <label class="form-label">Location</label>
          <input name="location" class="form-control" placeholder="Eg: Uitm Shah Alam" />
        </div>
        <div class="informative-text">
          <span>Please fill in all the details first before submitting the form.</span>
        </div>
        <div class="customed-button">
          <button class="btn btn-outline-dark">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection
