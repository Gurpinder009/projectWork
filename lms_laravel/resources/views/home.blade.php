@extends('layout.main')

@section('main-section')
    @push('title')
        wellcome page
    @endpush


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
                        <td data-label="Name">{{$value->name}}</td>
                        <td data-label="Email Address">{{$value->email}}</td>
                        <td data-label="Phone Number">{{$value->phone_num}}</td>
                        <td data-label="Password">Password</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
