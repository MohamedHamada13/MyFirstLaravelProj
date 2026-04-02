@extends('layout')
@section('title', 'Users')


@section('nav')
    <x-nav />
@endsection


@section('content')
    <div class="container mt-5 mb-5">
        <h1 class="text-center mt-5">Users</h1>
        <div class="table-responsive">
            <table class="table table-hover align-middle text-center shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>email</th>
                        <th style="width: 220px;">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td class="fw-semibold">
                                {{ $user->name }}
                            </td>
                            <td class="text-success fw-bold">
                                {{ $user->email }}
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    <a class="btn btn-sm btn-outline-primary"
                                        href="{{ route('users.orders', ['id' => $user->id]) }}"
                                        data-name="{{ $user->name }}">
                                        Orders
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-muted py-4">
                                No Users found
                            </td>
                        </tr>
                    @endforelse
                </tbody>

            </table>
        </div>
    </div>
@endsection


@section('footer')
    <x-footer />
@endsection
