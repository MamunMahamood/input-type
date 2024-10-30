<div class="form-group col-6">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
    @error('name')
    <div class="text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" name="email" required>
    @error('email')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">

</div>
<div class="form-group col-6">
    <label for="exampleInputPassword1"> Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password">
    @error('password')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username">
    @error('username')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="website">Website</label>
    <input type="url" class="form-control" id="website" name="website">
    @error('website')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="phone">Phone</label>
    <input type="tel" class="form-control" id="phone" name="phone">
    @error('phone')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="age">Age</label>
    <input type="number" class="form-control" id="age" name="age">
    @error('age')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>
@error('rating')
<div class="text-danger text-sm">{{ $message }}</div>
@enderror
<div class="form-group col-6">
    <label for="rating">User Behaviour</label>
    <input type="range" class="form-control-range" id="rating" name="rating" min="0" max="10" value="5" oninput="updateRatingValue(this.value)">
    <span class="float-right badge badge-primary" id="ratingValue">5</span>
    @error('rating')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror <!-- Display the current rating value -->
</div>

<div class="form-group col-6">
    <label for="birthdate">Birthdate</label>
    <input type="date" class="form-control" id="birthdate" name="birthdate">
    @error('birthdate')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="birthmonth">Birth Month</label>
    <input type="month" class="form-control" id="birthmonth" name="birthmonth">
    @error('birthmonth')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="birthweek">Birth Week</label>
    <input type="week" class="form-control" id="birthweek" name="birthweek">
    @error('birthweek')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="preferred_time">Preferred Time</label>
    <input type="time" class="form-control" id="preferred_time" name="preferred_time">
    @error('prefered_time')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="appointment">Appointment</label>
    <input type="datetime-local" class="form-control" name="appointment" id="appointment" value="{{ old('appointment') }}">
    @error('appointment')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="favorite_color">Favorite Color</label>
    <input type="color" class="form-control" id="favorite_color" name="favorite_color">
    @error('favorite_color')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>

<div class="form-group col-6">
    <label for="newsletter">Subscribe to Newsletter</label>
    <input type="checkbox" id="newsletter" name="newsletter" value="1"><br>
    @error('newsletter')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
    <button class="btn btn-primary" type="button" onclick="alert('User is Newsletter!')">Click Me</button>
</div>


<div class="form-group col-6">
    <label>Gender</label><br>
    <div class="d-flex align-items-center">
        <div class="mr-3">
            <input type="radio" id="male" name="gender" value="male">
            <label for="male" class="ml-1">Male</label>
        </div>
        <div class="mr-3">
            <input type="radio" id="female" name="gender" value="female">
            <label for="female" class="ml-1">Female</label>
        </div>
        <div>
            <input type="radio" id="other" name="gender" value="other">
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

<input type="hidden" name="referrer" value="some_hidden_value">
@error('referrer')
<div class="text-danger text-sm">{{ $message }}</div>
@enderror

<div class="form-group col-6">
    <label for="status">Status</label>
    <select class="form-control" id="status" name="status" required>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
    </select>
    @error('status')
    <div class="text-danger text-sm">{{ $message }}</div>
    @enderror
</div>