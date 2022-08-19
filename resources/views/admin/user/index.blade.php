@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">User</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created_at</th>
                <th>Updateted_at</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
             @foreach ($user as $users)
             <tr>
              <td>{{ $users->id }}</td>
              <td>{{ $users->name }}</td>
              <td>{{ $users->address }}</td>
              <td>{{ $users->email }}</td>
              <td>{{ $users->phonne }}</td>
              <td>{{ $users->created_at }}</td>
              <td>{{ $users->updated_at }}</td>
              <td>
                <a href="{{ route('user.edit',$users->id) }}"><i class='bx bxs-edit'></i></a>
                <a href="{{ route('usser.delete',$user->id) }}"><i class='bx bx-trash'></i></a>
              </td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection
