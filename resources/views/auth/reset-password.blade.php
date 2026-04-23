<x-guest-layout>
    <div class="row justify-content-center mt-5">
        <div class="col-xl-6 col-lg-6 col-md-9">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Reset Password</h1>
                        </div>
                        <form class="user" method="POST" action="{{ route('password.store') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                    id="email" name="email" value="{{ old('email', $request->email) }}"
                                    placeholder="Email Address" required autofocus autocomplete="username">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                    id="password" name="password"
                                    placeholder="New Password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="form-group">
                                <input type="password" class="form-control form-control-user"
                                    id="password_confirmation" name="password_confirmation"
                                    placeholder="Confirm New Password" required autocomplete="new-password">
                            </div>

                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Reset Password') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
