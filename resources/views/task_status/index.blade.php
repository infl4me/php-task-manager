@extends('layouts.app')

@section('content')
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h1 class="h1 mb-5">{{ __('views.statuses') }}</h1>
                <a href="{{ route('task_statuses.create') }}" class="btn btn-primary">
                    {{ __('views.create_status') }}</a>
                <div class="table-responsive mt-2">
                    <table class="table table-bordered table-hover text-nowrap">
                        <tbody>
                            <tr>
                                <th>{{ __('views.id') }}</th>
                                <th>{{ __('views.name') }}</th>
                                <th>{{ __('views.created_at') }}</th>
                                <th>{{ __('views.actions') }}</th>
                            </tr>
                            @foreach ($taskStatuses as $taskStatus)
                                <tr>
                                    <td>{{ $taskStatus->id }}</td>
                                    <td>{{ $taskStatus->name }}</td>
                                    <td>{{ $taskStatus->created_at }}</td>
                                    <td>
                                        <a class="text-danger text-decoration-none"
                                            href="{{ route('task_statuses.destroy', $taskStatus) }}"
                                            data-confirm="{{ __('views.are_you_sure') }}" data-method="delete">
                                            {{ __('views.delete') }}</a>
                                        <a class="text-decoration-none"
                                            href="{{ route('task_statuses.edit', $taskStatus) }}">
                                            {{ __('views.edit') }}</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
