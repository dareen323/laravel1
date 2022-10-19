@include('section.head')
<div class="container pt-5">
    <h1 class="text-center mb-2">Welcome to book store</h1>

    <h3 class="text-center mb-2">login here </h3>
    <form action="users/authenticate" method="post" class="w-50 m-auto">
        @csrf


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


        <!-- Submit button -->
        <button type="submit" class="btn btn-primary mb-4">Sign in</button>


        <p class="small">Don't have an account? <a href="/register"> Register </a></p>

    </form>
</div>