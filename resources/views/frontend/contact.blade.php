<x-frontend-layout>
    <section class="contactTop">
        <div class="container2"></div>
    </section>
    <section class="contactMain">
        <div class="container2">
            <div class="formWrap">
                <form action="" method="POST">
                    @csrf
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <input type="text" name="first_name" id="first_name" placeholder="First Name *" value="{{ old('first_name') }}">
                        </div>
                        <div class="w-full md:w-1/2">
                            <input type="text" name="last_name" id="last_name" placeholder="Last Name *" value="{{ old('last_name') }}">
                        </div>
                    </div>
                    <div class="row">
                        <div class="w-full md:w-1/2">
                            <input type="email" name="email_address" id="email_address" placeholder="Email Address *" value="{{ old('email_address') }}">
                        </div>
                        <div class="w-full md:w-1/2">
                            <input type="tel" name="telno" id="telno" placeholder="Phone Number" value="{{ old('telno') }}">
                        </div>
                    </div>
                    <div class="row"><textarea name="yourMessage" id="yourMessage" placeholder="Your message *">{{ old('yourMessage') }} </textarea></div>
                </form>
            </div>
        </div>
    </section>
</x-frontend-layout>
