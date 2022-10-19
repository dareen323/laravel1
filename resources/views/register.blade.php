@include('section.head')
<div class="container pt-5">
    <h1 class="text-center mb-2">Welcome to book store</h1>
    <h3 class="text-center mb-2">Sign Up here</h3>
    <form action="/users" method="post" class="w-50 m-auto">
        @csrf

        <div class="form-outline mb-4">
            <label class="form-label" for="name">Name</label>

            <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" />
        </div>

        @error('name')
            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
        @enderror

        <!-- Email input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="email">Email address</label>

            <input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" />
        </div>

        @error('email')
            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
        @enderror

        <!-- Password input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password">Password</label>
            <input type="password" id="password" class="form-control" name="password" value="{{ old('password') }}" />
        </div>

        @error('password')
            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
        @enderror

        <!-- Password Confirmation input -->
        <div class="form-outline mb-4">
            <label class="form-label" for="password_confirmation">Confirm Password</label>

            <input type="password" id="password_confirmation" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" />
        </div>

        @error('password_confirmation')
            <p class="text-danger small" style="margin-top: -1.5rem">{{ $message }}</p>
        @enderror

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary  mb-4">Sign up</button>

        <p class="small">Already have an account? <a href="/login"> Login</a></p>
    </form>
</div>