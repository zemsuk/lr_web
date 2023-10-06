<x-guest-layout>
    <x-slot name="slot">
        
    <!-- contact section starts  -->
    
    <section id="contact" class="contact item-third" style="margin-top:6rem">
       
    <div class="row form">    

        

        <form method="POST" action="{{ route('edit_member') }}" enctype='multipart/form-data'>
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            @csrf
            <div class="container">
            <div class="text-left">
                    <input type="hidden" name="uid" value="{{$users->id}}">
                    <!-- Name -->
                    <div class="form-group">
                        <x-label for="name"  :value="__('Name')" />

                        <x-input id="name" class="box" type="text" name="name" value="{{$users->name}}" required autofocus />
                    </div>
                    <!-- phone -->
                    <div class="form-group">
                        <x-label for="phone" :value="__('Phone')" />

                        <x-input id="phone" class="box" type="text" name="phone" value="{{$users->profile->phone}}" required autofocus />
                    </div>
                    <!-- Email Address -->
                    <div class="form-group">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="box" type="email" name="email" value="{{$users->email}}" required />
                    </div>
                    <!-- Address -->
                    <div class="form-group">
                        <x-label for="address" :value="__('Address')" />

                        <x-input id="address" class="box" type="text" name="address" value="{{$users->profile->address}}" required />
                    </div>
                    <div class="item-half gap-1">
                    <!-- City -->
                    <div class="form-group">
                        <x-label for="city" :value="__('City')" />
                        <x-input id="city" class="box" type="text" name="city" value="{{$users->profile->city}}" required />
                    </div>
                    <!-- Post Code -->
                    <div class="form-group">
                        <x-label for="post_code" :value="__('Post Code')" />
                        <x-input id="post_code" class="box" type="text" name="post_code" value="{{$users->profile->post_code}}" required />
                    </div>
                    </div>
                    <!-- Country -->
                    <div class="form-group">
                        <x-label for="country" :value="__('Country')" />
                        <x-input id="country" class="box" type="text" name="country" value="{{$users->profile->country}}" required />
                    </div>
                    
                    <div class="item-half gap-1">
                        <!-- Date of Birth -->
                    <div class="form-group">
                        <x-label for="dob" :value="__('Date of Birth')" />
                        <x-input class="box" id="dob" type="text" placeholder="dd/mm/yyyy" name="dob" value="<?php echo date('d/m/Y', strtotime($users->profile->dob)); ?>" required />
                    </div>
                        <div>
                            <div class="pb-1">Gender</div>
                            <?php 
                                $sex = [1,2]; 
                                $cs = $users->profile->sex;
                                $checked = '';
                                foreach($sex as $s){
                                   if($s == $cs){
                                       $checked = 'checked';
                                   } 
                                   echo "<div class='pb-1'><label><input type='radio' $checked value='$s' name='sex'>&nbsp; Male</label></div>";  
                                }
                            ?>
                        </div>
                    </div>
                    <div class="item-half gap-1">
                        <!-- Profession -->
                        <div class="form-group">
                            <x-label for="profession" :value="__('Profession')" />
                            <x-input id="profession" class="box" type="text" name="profession" value="{{$users->profile->profession}}" required />
                        </div>
                        <div>
                            <x-label for="nationality" :value="__('Nationality')" />
                            <x-input id="nationality" class="box" type="text" name="nationality" value="{{$users->profile->nationality}}" required />
                        </div>                        
                    </div>
                    <!-- Photo Id -->
                    <!-- <div class="form-group">
                        <x-label for="photo_id" :value="__('Supporting Document')" />
                        <x-input class="box" type="file" name="photo_id" :value="old('photo_id')" />
                    </div> -->
                    <!-- Photo  -->
                    <div class="form-group">
                        <x-label for="photo" :value="__('Photo')" />
                        <x-input class="box" type="file" name="photo" :value="old('photo')" />
                    </div>
                    <!-- Password -->
                    <div class="form-group">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="box"
                                        type="password"
                                        name="password"
                                        autocomplete="new-password" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="form-group">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="box"
                                        type="password"
                                        name="password_confirmation" />
                    </div>
                    <div class="form-group">
                        <label>Verify</label>
                        <select name="verify" class="box">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                    </div>
                
            </div>
            </div>
            

            <div class="flex items-center justify-end mt-4">
                
            
                <x-button class="btn">
                    {{ __('Update') }}
                </x-button>
            </div>
        </form>
        
    </div>
        <div>
            <div class="profile">
                <img src="{{asset('uploads')}}/{{$users->profile->photo}}" alt="">
            </div>
        </div>
    </section>


</x-slot>
<!-- contact section ends -->
</x-guest-layout>
