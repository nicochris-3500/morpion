@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($cases as $case)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        {{ $case }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection