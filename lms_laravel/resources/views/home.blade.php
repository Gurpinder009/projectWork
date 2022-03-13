@extends('layout.main')

@section('main-section')
    @if (session()->has('success'))
        {{ session()->get('success') }}
    @endif

    @push('title')
        wellcome page
    @endpush
    <a href={{ url('login') }}>goto</a>

    <div class="main">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $value)
                    <tr>
                        <td data-label="Name">{{ $value->name }}</td>
                        <td data-label="Email Address">{{ $value->email }}</td>
                        <td data-label="Phone Number">{{ $value->phone_num }}</td>
                        <td data-label="Password">Password</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
          <a href="{{route('logout')}}">Logout</a>
    </div>
@endsection
