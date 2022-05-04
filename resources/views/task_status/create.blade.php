@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h1 class="h1 mb-5">{{ __('views.create_status') }}</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ Form::model($taskStatus, ['route' => ['task_statuses.store'], 'method' => 'POST']) }}
                <div class="form-group mb-5 w-50">
                    {{ Form::label('name', __('views.name')) }}
                    {{ Form::text('name', '', ['class' => 'form-control', 'required' => true]) }}<br>
                    {{ Form::submit(__('views.create'), ['class' => 'btn btn-primary']) }}
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@endsection
