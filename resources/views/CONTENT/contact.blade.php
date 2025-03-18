<article class="contact" data-page="contact">
    <header>
        <h2 class="h2 article-title">Contact</h2>
    </header>

    <!-- Map Section -->
    <section class="mapbox" data-mapbox>
        <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.795867232599!2d106.7067731746281!3d-6.290539493698455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb072ac5798f%3A0x34a1d0f8498cdca5!2sToko%20Sembako%20Dimas!5e0!3m2!1sid!2sid!4v1742299594201!5m2!1sid!2sid"
            width="600"
            height="450"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </figure>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form">
        <h3 class="h3 form-title">Contact Form</h3>

        <form action="https://formspree.io/f/mbldnwrj" method="POST" class="form contact-form" data-form>
            @csrf
            <div class="input-wrapper">
                <input type="text" name="fullname" class="form-input" placeholder="Full name" required />
                <input type="email" name="email" class="form-input" placeholder="Email address" required />
            </div>
            <textarea name="message" class="form-input" placeholder="Your Message" required></textarea>
            <button class="form-btn" type="submit">
                <ion-icon name="paper-plane"></ion-icon>
                <span>Send Message</span>
            </button>
        </form>
    </section>
</article>
