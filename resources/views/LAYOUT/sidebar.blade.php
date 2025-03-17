<aside class="sidebar" data-sidebar>
    <!-- Sidebar Info Section -->
    <div class="sidebar-info">
        <!-- Avatar Section -->
        <figure class="avatar-box">
            <img src="{{ asset('IMG/logo.png') }}" alt="INFORMATIKA" width="80" />
        </figure>
        <!-- Info Content Section -->
        <div class="info-content">
            <h1 class="name" title="Richard Hanrick">INFORMATIKA</h1>
            <p class="title">ILMU KOMPUTER</p>
        </div>
        <!-- Toggle Button for More Info -->
        <button class="info_more-btn" data-sidebar-btn>
            <span>Show</span>
            <ion-icon name="chevron-down"></ion-icon>
        </button>
    </div>

    <!-- Additional Info Section -->
    <div class="sidebar-info_more">
        <div class="separator"></div>
        <div class="info-content" style="display: flex; width:100%; justify-content:center;">
            <p class="title">theme</p>
        </div>

        <!-- Theme Switch Section -->
        <div class="theme">
            <label class="theme-switch">
                <input id="checkbox" type="checkbox" checked="darkTheme" />
                <div class="slider round">
                <div class="sun-moon">
                    <svg id="moon-dot-1" class="moon-dot" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="moon-dot-2" class="moon-dot" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="moon-dot-3" class="moon-dot" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="light-ray-1" class="light-ray" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="light-ray-2" class="light-ray" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="light-ray-3" class="light-ray" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-1" class="cloud-dark" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-2" class="cloud-dark" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-3" class="cloud-dark" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-4" class="cloud-light" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-5" class="cloud-light" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <svg id="cloud-6" class="cloud-light" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                </div>
                <div class="stars">
                    <svg id="star-1" class="star" viewBox="0 0 20 20">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                    </svg>
                    <svg id="star-2" class="star" viewBox="0 0 20 20">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                    </svg>
                    <svg id="star-3" class="star" viewBox="0 0 20 20">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                    </svg>
                    <svg id="star-4" class="star" viewBox="0 0 20 20">
                    <path d="M 0 10 C 10 10,10 10 ,0 10 C 10 10 , 10 10 , 10 20 C 10 10 , 10 10 , 20 10 C 10 10 , 10 10 , 10 0 C 10 10,10 10 ,0 10 Z"></path>
                    </svg>
                </div>
                </div>
            </label>
        </div>

        <div class="separator"></div>

        <!-- Contacts List Section -->
        <ul class="contacts-list">
            <!-- Email Contact Item -->
            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>
                <div class="contact-info">
                    <p class="contact-title">Email</p>
                    <a href="mailto:dimasismawan05@gmail.com" class="contact-link">dimasismawan05@gmail.com</a>
                </div>
            </li>

            <!-- Phone Contact Item -->
            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="phone-portrait-outline"></ion-icon>
                </div>
                <div class="contact-info">
                    <p class="contact-title">Phone</p>
                    <a href="https://wa.me/085731660813" class="contact-link">+62 85731660813</a>
                </div>
            </li>

            <!-- Location Contact Item -->
            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="location-outline"></ion-icon>
                </div>
                <div class="contact-info">
                    <p class="contact-title">Location</p>
                    <address class="address">Tangerang Selatan, Banten</address>
                </div>
            </li>
        </ul>
    </div>
</aside>
