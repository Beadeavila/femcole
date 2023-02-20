@extends('layouts.app')

@section('template_title')
    Update User
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="cardFem">
            <div class="col-md-12">
                @includeif('partials.errors')
                <div class="cardBody">
                    <div class="cardHeader">
                        <span class="cardTitle">Modificar Alumno</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf
                            @include('user.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
