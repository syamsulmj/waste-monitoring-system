@extends('master')

@section('content')
  <div class="home container">
    <div class="home-content">
      <div class="row card-div">
        @foreach ($dust_bins as $db)
          <div class="card">
            <img class="card-img-top" src="{{ asset('images/dust-bin.jpg') }}" alt="Card image cap">
            @if ($db->status)
              <div class="card-body border-seperator empty">
                <span class="card-text">Empty</span>
              </div>
            @else
              <div class="card-body border-seperator full">
                <span class="card-text">Full</span>
              </div>
            @endif
            <div class="card-body description-div">
              <span>DustBin ID: {{ $db->dust_bin_id }}</span>
              <br />
              <span>Operator: {{ $db->name }}</span>
              <br />
              <span>Operator ID: {{ App\User::getName($db->operator) }}</span>
              <br />
              <span>Location: {{ $db->location }}</span>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection
