@extends('layout.main')

@section('main-section')

    
@if(session()->has('success'))
    {{session()->get('success')}}
    
@endif

  @error('error')
      {{$message}}
  @enderror
    
   <div class="form-container">
            <form class="form" autocomplete="off" method="POST" action="{{url('auth')}}">
            @csrf
              <div class="form-text">
                <h1 class="form-heading">Login</h1>
              </div>
              <div class="form-field">
                <label class="field-label" for="u_email">Email Address</label>
                <input class="input-field" type="email" name="u_email" id="u_email" value = "{{old('u_email')}}" />
                <small>@error('u_email')
                    {{$message}}
                @enderror</small>
              </div>
              <div class="form-field">
                <label class="field-label" for="password">Password</label>
                <input
                  class="input-field"
                  type="password"
                  name="u_password"
                  id="password"
                  
                />
                <span
                  id="show-password-toggler"
                  onclick="toggle_password_visibility()"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-eye"
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#2c3e50"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <circle cx="12" cy="12" r="2" />
                    <path
                      d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7"
                    /></svg></span>
                <small>
                @error('u_password')
                    {{$message}}
                @enderror
                </small>
              </div>
              <div class="form-field">
                <input
                  type="checkbox"
                  name="remember_user"
                  id="remember_user"
                />
                <label for="remember_user" class="field-label"
                  >Stay signed in</label
                >
              </div>

              <button class="btn">Sign in</button>
              <button class="btn">Sign in with Google</button>
              <div class="signup-link">
                <span>Doesn't have account yet? </span
                ><a href="https://www.google.com"> Sign Up</a>
              </div>
            </form>
          </div>
@endsection