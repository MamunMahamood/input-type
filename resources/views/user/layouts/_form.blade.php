
<div class="form-group col-6">
    <label for="name">Name<span style="color: red; margin-left: 3px;">{{ isset($user) && $user->exists ? '' : '*' }}</span></label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', isset($user)? $user->name : '') }}" required>
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="email">Email<span style="color: red; margin-left: 3px;">{{ isset($user) && $user->exists ? '' : '*' }}</span></label>
    <input type="email" class="form-control" id="email" name="email" value="{{ old('email', isset($user)? $user->email : '') }}" required>
    @error('email')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="exampleInputPassword1">Password<span style="color: red; margin-left: 3px;">{{ isset($user) && $user->exists ? '' : '*' }}</span></label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" {{isset($user)? '' : 'required' }}>
</div>

<div class="form-group col-6">
    <label for="exampleInputPassword1">Confirm Password<span style="color: red; margin-left: 3px;">{{ isset($user) && $user->exists ? '' : '*' }}</span></label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password" {{isset($user)? '' : 'required' }}>
    @error('password')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" value="{{ old('username', isset($user)? $user->username : '') }}">
    @error('username')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="website">Website</label>
    <input type="url" class="form-control" id="website" name="website" value="{{ old('website', isset($user)? $user->website : '') }}">
    @error('website')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone" value="{{ old('phone', isset($user)? $user->phone : '') }}">
    @error('phone')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age" value="{{ old('age', isset($user)? $user->age : '') }}">
    @error('age')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="rating">User Behaviour</label>
    <input type="range" class="form-control-range" id="rating" name="rating" min="0" max="10" value="{{ old('rating', isset($user)? $user->name : 5) }}" oninput="updateRatingValue(this.value)">
    <span class="float-right badge badge-primary" id="ratingValue">{{ old('rating', $user->rating ?? 5) }}</span>
    @error('rating')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="birthdate">Birthdate</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate" value="{{ old('birthdate', isset($user)? $user->birthdate : '') }}">
    @error('birthdate')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="birthmonth">Birth Month</label>
    <input type="month" class="form-control" id="birthmonth" name="birthmonth" value="{{ old('birthmonth', isset($user)? $user->birthmonth : '') }}">
    @error('birthmonth')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="birthweek">Birth Week</label>
    <input type="week" class="form-control" id="birthweek" name="birthweek" value="{{ old('birthweek', isset($user)? $user->birthweek : '') }}">
    @error('birthweek')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="preferred_time">Preferred Time</label>
    <input type="time" class="form-control" id="preferred_time" name="preferred_time" value="{{ old('preferred_time', isset($user)? $user->preferred_time : '') }}">
    @error('preferred_time')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="appointment">Appointment</label>
    <input type="datetime-local" class="form-control" name="appointment" id="appointment" value="{{ old('appointment', isset($user)? $user->appointment : '') }}">
    @error('appointment')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="favorite_color">Favorite Color</label>
    <input type="color" class="form-control" id="favorite_color" name="favorite_color" value="{{ old('favorite_color', isset($user)? $user->favorite_color : '') }}">
    @error('favorite_color')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="newsletter">Subscribe to Newsletter</label>
    <input type="checkbox" id="newsletter" name="newsletter" value="1" {{ old('newsletter', isset($user)? $user->newsletter : '') ? 'checked' : '' }}><br>
    @error('newsletter')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
    <button class="btn btn-primary" type="button" onclick="alert('User is Newsletter!')">Click Me</button>
</div>

<div class="form-group col-6">
    <label>Gender</label><br>
    <div class="d-flex align-items-center">
        <div class="mr-3">
            <input type="radio" id="male" name="gender" value="male" {{ old('gender', isset($user)? $user->gender : '') === 'male' ? 'checked' : '' }}>
            <label for="male" class="ml-1">Male</label>
        </div>
        <div class="mr-3">
            <input type="radio" id="female" name="gender" value="female" {{ old('gender', isset($user)? $user->gender : '') === 'female' ? 'checked' : '' }}>
            <label for="female" class="ml-1">Female</label>
        </div>
        <div>
            <input type="radio" id="other" name="gender" value="other" {{ old('gender', isset($user)? $user->gender : '') === 'other' ? 'checked' : '' }}>
            <label for="other" class="ml-1">Other</label>
        </div>
    </div>
    @error('gender')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="profile_picture">Profile Picture</label>
    <input type="file" class="form-control-file" id="profile_picture" name="profile_picture">
    @error('profile_picture')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<input type="hidden" name="referrer" value="{{ old('referrer', isset($user)? $user->referrer : '') }}">
@error('referrer')
<div class="text-danger text-sm">{{ $message }}</div>
@enderror

<div class="form-group col-6">
    <label for="status">Status<span style="color: red; margin-left: 3px;">{{ isset($user) && $user->exists ? '' : '*' }}</span></label>
    <select class="form-control" id="status" name="status" required>
        <option value="active" {{ old('status', isset($user)? $user->status : '') === 'active' ? 'selected' : '' }}>Active</option>
        <option value="inactive" {{ old('status', isset($user)? $user->status : '') === 'inactive' ? 'selected' : '' }}>Inactive</option>
    </select>
    @error('status')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>
