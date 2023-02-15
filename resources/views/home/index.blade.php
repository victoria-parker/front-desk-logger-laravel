@extends('layouts.app-master')

@section('content')
    Welcome {{ucwords(auth()->user()->name)}}

    <section class="container-fluid">
        <div class="row">

            <div class="col-lg-6 col-xl-7 col-xxl-8 table-responsive">
                @include('components.issues.issues')
                @include('components.notes.notes')
            </div>

            <div class="col-lg-6 col-xl-5 col-xxl-4 table-responsive">
                @include('components.wakeupcalls.wakeupcalls')
                @include('components.taxis.taxis')
            </div>
        </div>
    </section>
@endsection
