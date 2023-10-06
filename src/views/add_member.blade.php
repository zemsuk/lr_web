@extends('lr_web::template')
@section('content')        
    <!-- contact section starts  -->
    
    <section id="contact" class="contact" style="margin-top:6rem">
       
    <div class="row form">    

        

        <form method="POST" action="{{ route('member_process') }}" enctype='multipart/form-data'>
            @csrf
            <div class="container">
            <div class="text-left">
                
                    <!-- Name -->
                    <div class="form-group">
                        <label for="name"  :value="__('Name')">Name</label>

                        <input id="name" class="box" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                    <!-- phone -->
                    <div class="form-group">
                        <label for="phone" :value="__('Phone')">Phone</label>

                        <input id="phone" class="box" type="text" name="phone" :value="old('phone')" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <label for="email" :value="__('Email')">Email</label>

                        <input id="email" class="box" type="email" name="email" :value="old('email')" required />
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <label for="address" :value="__('Address')">Address</label>

                        <input id="address" class="box" type="text" name="address" :value="old('address')" required />
                    </div>                    
                    <div class="item-half gap-1">
                        <!-- City -->
                        <div class="form-group">
                            <label for="city" :value="__('City')">City</label>
                            <input id="city" class="box" type="text" name="city" :value="old('city')" required />
                        </div>
                        <div>
                            <label for="post_code" :value="__('Post Code')">Post Code</label>
                            <input id="post_code" class="box" type="text" name="post_code" :value="old('post_code')" required />
                        </div>                        
                    </div>
                    <!-- Country -->
                    <div class="form-group">
                        <label for="country" :value="__('Country')">Country</label>
                        <input id="country" class="box" type="text" name="country" :value="old('country')" required />
                    </div>
                    <div class="item-half gap-1">
                        <!-- Date of Birth -->
                        <div class="form-group">
                            <label for="dob" :value="__('Date of Birth')">Date of Birth</label>
                            <input class="box" id="dob" type="text" placeholder="dd/mm/yyyy" name="dob" :value="old('dob')" required />
                        </div>
                        <div>
                            <div class="pb-1">Gender</div>
                            <div class="pb-1"><label><input type="radio" value='1' name="sex">&nbsp; Male</label></div>
                            <div class="pb-1"><label><input type="radio" value='2' name="sex">&nbsp; Female</label></div>
                        </div>
                    </div>
                    <div class="item-half gap-1">
                        <!-- Profession -->
                        <div class="form-group">
                            <label for="profession" :value="__('Profession')">Profession</label>
                            <input id="profession" class="box" type="text" name="profession" :value="old('profession')" required />
                        </div>
                        <div>
                            <label for="nationality" :value="__('Nationality')">Nationality</label>
                            <input id="nationality" class="box" type="text" name="nationality" :value="old('nationality')" required />
                        </div>                        
                    </div>
                    
                    <!-- Photo  -->
                    <div class="form-group">
                        <label for="photo" :value="__('Photo')">Photo</label>
                        <input class="box" type="file" name="photo" :value="old('photo')" />
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" :value="__('Password')">Password</label>

                        <input id="password" class="box"
                                        type="password"
                                        name="password"
                                        required autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                        <input id="password_confirmation" class="box"
                                        type="password"
                                        name="password_confirmation" required />
                    </div>
                
            </div>
            </div>
            

            <div class="flex items-center justify-end mt-4">
                
            
                <button class="btn">
                    {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
    </section>
@endsection