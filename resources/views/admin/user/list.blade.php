@extends('layouts.admin')

<div class="table-responsive">
  <table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th></th>
            <th></th>
            <th>Registered</th>
        </th>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>
                {{ $item->profile()->first()->first_name ?? null }}
                 {{ $item->profile()->first()->last_name ?? null }}
            </td>
            <td>{{ $item->email }}</td>
            <td></td>
            <td></td>
            <td>{{ $item->updated_at->format('F d,Y') }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>

{{ $list->links() }}

@endsection