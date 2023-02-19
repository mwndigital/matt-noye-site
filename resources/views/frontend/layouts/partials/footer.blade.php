        <button class="hireMeBtn fixed bottom-12 right-6 z-30 bg-purple-700 rounded-md text-white text-lg text-center uppercase font-roboMedium py-2 px-6 shadow-lg shadow-black/40 ring-0 no-underline z-50 ease-in-out duration-500 hover:bg-purple-500" type="button">
            Hire Me
        </button>
        <footer>
            <div class="footerMain bg-gradient-to-b from-slate-600 to-slate-800 py-20">
                <div class="container2">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                        <div class="item">
                            <ul class="contactDetails">
                                <li>
                                    <a href="tel:+441325238115">
                                        01325 238115
                                    </a>
                                </li>
                                <li>
                                    <a href="mailto:hello@matt-noye.co.uk">hello@matt-noye.co.uk</a>
                                </li>
                            </ul>
                            <ul class="socialLinks">
                                <li><a href=""><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href=""><i class="fa-brands fa-github"></i></a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <h5 class="footerTitle">
                                Navigation
                            </h5>
                            <ul class="links">
                                <li><a href="">Home</a></li>
                                <li><a href="">About</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Portfolio</a></li>
                                <li><a href="">Contact me</a></li>
                                <li><a href="">Hire Me</a></li>
                            </ul>
                        </div>
                        <div class="item">
                            <h5 class="footerTitle">What I Do</h5>
                            <ul class="links">

                            </ul>
                        </div>
                        <div class="item">
                            <h5 class="footerTitle">Service Areas</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footerBottom bg-slate-800 py-3">
                <div class="container2">
                    <div class="flex flex row">
                        <div class="w-full md:w-1/2 mb-2 md:mb-0 text-center md:text-left">
                            <p class="text-white font-montsLight text-base">
                                Copyright &copy; @php echo date("Y"); @endphp Matt Noye | All Rights Reserved.
                            </p>
                        </div>
                        <div class="w-full md:w-1/2 text-center md:text-right">
                            <p class="text-white font-montsLight text-base">
                                Web Design in Darlington, Powered by Laravel
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="hireMePopup">
            <div class="inner">
                <div class="flex flex-col md:flex-row gap-10">
                    <div class="w-full md:w-2/5">
                        <div class="contentWrap">
                            <h2>
                                Hire me and send your project brief
                            </h2>
                            <p>
                                To hire me for any new projects, please fill out this form.  If you are unsure of would like to have a chat, <a href="/contact">get in touch</a>.
                            </p>
                        </div>
                    </div>
                    <div class="w-full md:w-3/5">
                        <button type="button" class="closeHireMePopupBtn"><i class="fas fa-times"></i></button>
                        <div class="formWrap">
                            <form action="{{ route('hireme.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="w-full">
                                        <h3>Project Details</h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>What type of business are you? *</label>
                                        <div class="flex flex-row gap-4">
                                            <div class="choice">
                                                <input type="radio" id="individual" name="type_of_business" value="Individual">
                                                <label for="individual">Individual</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="startup" name="type_of_business" value="Startup">
                                                <label for="startup">Startup</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="company" name="type_of_business" value="Company">
                                                <label for="company">Company</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="agency" name="type_of_business" value="Agency">
                                                <label for="agency">Agency</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>What budget do you have to work with? *</label>
                                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                                            <div class="choice">
                                                <input type="radio" id="300-500" name="project_budget" value="300-500">
                                                <label for="300-500">£300 - £500</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="500-1000" name="project_budget" value="500-1000">
                                                <label for="500-1000">£500 - £1000</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="1000-2000" name="project_budget" value="1000-2000">
                                                <label for="1000-2000">£1000 - £2000</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="2000-3000" name="project_budget" value="2000-3000">
                                                <label for="2000-3000">£2000 - £3000</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="3000-4000" name="project_budget" value="3000-4000">
                                                <label for="3000-4000">£3000 - £4000</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="4000-5000" name="project_budget" value="4000-4000">
                                                <label for="4000-5000">£4000 - £5000</label>
                                            </div>
                                            <div class="choice">
                                                <input type="radio" id="5000+" name="project_budget" value="5000+">
                                                <label for="5000+">£5000+</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>If applicable, what pages are required for your website?</label>
                                        <textarea name="required_pages" id="required_pages"></textarea>
                                        <small>Example: Home, About, Services, Services > Single Service, Contact</small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>Do you already have a design or do you require one to be made? *</label>
                                        <select name="designCreatedOrProvided" id="designCreatedOrProvided" class="form-select-lg">
                                            <option value="I have a design">I have a design</option>
                                            <option value="I require a design">I require a design</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>If applicable, are there any examples of websites that you would like me to take inspiration from?</label>
                                        <textarea name="websitesForInspiration" id="websitesForInspiration"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <label>When are you looking to start the project?</label>
                                        <input type="date" name="project_start_date" id="project_start_date">
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <label>When are you looking to complete the project by?</label>
                                        <input type="date" name="project_complete_date" id="project_complete_date">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <label>Any other details?</label>
                                        <textarea name="other_details" id="other_details"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full">
                                        <h3>Personal Details</h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" id="first_name">
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <label>Last Name *</label>
                                        <input type="text" name="last_name" id="last_name">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="w-full md:w-1/2">
                                        <label>Email address *</label>
                                        <input type="email" name="email_address" id="email_address">
                                    </div>
                                    <div class="w-full md:w-1/2">
                                        <label>Phone Number</label>
                                        <input type="tel" name="phone_number" id="phone_number">
                                    </div>
                                </div>
                                <div class="row mt-6">
                                    <div class="w-full">
                                        <button type="submit" class="formSubmitBtn">
                                            Hire Me <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('assets/js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/js/sitewide.js') }}"></script>
        <script src="{{ asset('assets/js/frontend.js') }}"></script>
    </body>
</html>
