<div>
    <!-- Contact section -->
    <section class="contact" style="margin-top: 100px;">
        <img class="left-img" src="{{ asset('assets/images/contact_carachter.png') }}" alt="" />
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section-heading">
                        <h5 class="subtitle">Contact Us</h5>
                        <h2 class="title" style="color: #00b8df">Get in Touch</h2>
                        <p class="text">
                            It’s up to the competition in features, with some unique
                            advantages.All the latest crypto games.Here are some of them.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="contact-form-wrapper">
                        <div class="contact-box">
                            <h4 class="title">Send Us a Message</h4>
                            <form >
                                <input type="text" class="input-field" wire:model.lazy="name"  placeholder="Enter Your Full Name" />
                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror

                                <input type="email" class="input-field" wire:model.lazy="email" placeholder="Enter Your Email Address" />
                                @error('email') <span class="text-danger">{{ $message }}</span> @enderror

                                <textarea class="input-field textarea" wire:model.prefer="message" placeholder="Message *"></textarea>
                                @error('message') <span class="text-danger">{{ $message }}</span> @enderror

                                <button wire:click.prevent="save_email" class="mybtn1">SUBMIT NOW</button>
                                @if (session()->has('message'))
                                    <div class="alert alert-success">
                                        <b>Message envoyé avec succès</b>
                                    </div>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section End -->

</div>
