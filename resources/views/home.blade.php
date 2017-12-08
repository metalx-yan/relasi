@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hallo {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


                    @if (Auth::user()->penulis == null)
                      <a href="{{ route('penulis.create') }}"><button type="submit" name="button">Daftar Menjadi Penulis</button></a>
                      @else
                        {{ 'udah terdaftar jadi penulis' }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
