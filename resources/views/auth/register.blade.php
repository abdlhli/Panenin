<form method="POST" action="/tmbadmin">
    @csrf

    <div>
        <label for="firstname">First Name</label>
        <input id="firstname" type="text" name="firstname" value="{{ old('firstname') }}" required autofocus>
    </div>

    <div>
        <label for="lastname">Last Name</label>
        <input id="lastname" type="text" name="lastname" value="{{ old('lastname') }}" required>
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <div>
        <label for="alamat">Alamat</label>
        <textarea id="alamat" name="alamat" required>{{ old('alamat') }}</textarea>
    </div>

    <div>
        <label for="no_telp">No. Telp</label>
        <input id="no_telp" type="text" name="no_telp" value="{{ old('no_telp') }}" required>
    </div>

    <div>
        <button type="submit">Register</button>
    </div>
</form>
