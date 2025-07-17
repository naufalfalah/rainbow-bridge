<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Rainbow Bridge</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container py-3">
            <a class="navbar-brand" href="#">Rainbow Bridge</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-warning btn-lg" style="border-radius: 0;">Call Us</button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="hero" class="bg-light">
        <div class="container-fluid">
            <div class="row align-items-center" style="background-color: #f5f5dc;">
                <!-- Teks dan Tombol di Sebelah Kiri -->
                <div class="col-md-6 p-5"> <!-- Warna krem -->
                    <h1 class="display-4">Layanan Kremasi Penuh Kasih Bogor</h1>
                    <p class="lead">Hargai kenangan hewan peliharaan kesayangan Anda dengan layanan kremasi kami yang penuh perhatian dan penuh perhatian di Bogor</p>
                    <button class="btn btn-warning btn-lg" style="border-radius: 0;">Explore Our Services</button> <!-- Tombol kuning tanpa rounded -->
                </div>
                <!-- Gambar di Sebelah Kanan -->
                <div class="col-md-6 p-0">
                    <img src="https://picsum.photos/600/400" class="img-fluid w-100" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="bg-dark text-light py-5">
        <div class="container">
            <div class="text-left">
                <h2 class="display-5 mb-4">Kremasi Bermartabat</h2>
                <p class="lead mb-4">Rainbow Bridge menawarkan layanan kremasi yang penuh kasih sayang. Kami memastikan perpisahan yang bermartabat bagi orang-orang terkasih Anda dengan perawatan yang personal selama proses berlangsung. Tim kami yang berdedikasi berkomitmen untuk mendukung Anda di setiap langkah, memberikan kedamaian dan kenyamanan selama masa sulit ini. Pilih Rainbow Bridge untuk kenangan yang penuh rasa hormat.</p>
                <img src="https://picsum.photos/800/400" class="img-fluid w-100" alt="About Image">
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section id="services" class="py-5" style="background-color: #f5f5dc;">
        <div class="container">
            <h2 class="display-5 mb-4">Pengaturan Pemakaman yang Sederhana</h2>
            <div class="row">
                <!-- Informasi 1 -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="https://picsum.photos/800/400?random=1" class="img-fluid w-100 rounded mb-3" alt="Service 1">
                        <h4 class="text-start">Personalized Memorial Ceremonies</h4>
                        <p class="text-start">Ciptakan perpisahan yang bermakna dengan upacara peringatan yang dirancang khusus untuk menghormati kehidupan unik orang yang Anda cintai.</p>
                    </div>
                </div>
                <!-- Informasi 2 -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="https://picsum.photos/800/400?random=2" class="img-fluid w-100 rounded mb-3" alt="Service 2">
                        <h4 class="text-start">Eco-Friendly Cremation Options</h4>
                        <p class="text-start">Pilih praktik berkelanjutan yang memastikan perpisahan yang penuh rasa hormat terhadap alam sambil menghormati anabul yang Anda cintai.</p>
                    </div>
                </div>
                <!-- Informasi 3 -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="https://picsum.photos/800/400?random=3" class="img-fluid w-100 rounded mb-3" alt="Service 3">
                        <h4 class="text-start">Larung</h4>
                        <p class="text-start">Nikmati upacara kremasi penuh rasa hormat yang sejalan dengan nilai-nilai tradisional. Layanan Larung kami memastikan perpisahan yang bermartabat bagi orang-orang terkasih Anda, didampingi oleh para profesional yang penuh perhatian.</p>
                    </div>
                </div>
                <!-- Informasi 4 -->
                <div class="col-md-6 mb-4">
                    <div>
                        <img src="https://picsum.photos/800/400?random=4" class="img-fluid w-100 rounded mb-3" alt="Service 4">
                        <h4 class="text-start">Efficient Cremation Planning</h4>
                        <p class="text-start"> Kami menyediakan pengalaman perencanaan kremasi yang lancar. Tim kami akan membantu Anda mengatur setiap detailnya. Kami memastikan layanan yang terhormat dan efisien memenuhi kebutuhan Anda dengan penuh perhatian dan profesionalisme.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel -->
    <div id="mainCarousel" class="carousel slide mb-5 py-3" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/1200/400?random=1" class="d-block w-100" alt="slide1">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=2" class="d-block w-100" alt="slide2">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=3" class="d-block w-100" alt="slide3">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=4" class="d-block w-100" alt="slide4">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/1200/400?random=5" class="d-block w-100" alt="slide5">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Testimony Section -->
    <section id="testimony" class="py-5" style="background-color: #343a40; color: white;">
        <div class="container">
            <div id="testimonyCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Bullet Indicators -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#testimonyCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#testimonyCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#testimonyCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex flex-column align-items-start">
                            <p class="fs-4" style="font-size: 1.5rem;">"Rainbow Bridge provided compassionate and professional support during a difficult time. Their attention to detail and respectful service made the process much easier for my family. I highly recommend their services to anyone in need of cremation arrangements."</p>
                            <p class="fw-bold">- Samantha </p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-start">
                            <p class="fs-4" style="font-size: 1.5rem;">"Rainbow Bridge's empathetic and efficient team eased our minds during a challenging time. Their respect and care for our loved one brought us immense comfort. I can't thank them enough for their exceptional service."</p>
                            <p class="fw-bold">- Micheal</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="d-flex flex-column align-items-start">
                            <p class="fs-4" style="font-size: 1.5rem;">"Rainbow Bridge was a beacon of comfort in our time of need. Their team showed incredible compassion and professionalism, guiding us through every step with care. We are deeply grateful for their respectful service."</p>
                            <p class="fw-bold">- Arif</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonyCarousel" data-bs-slide="prev" style="transform: translateX(-150px);">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonyCarousel" data-bs-slide="next" style="transform: translateX(150px);">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- New Section -->
    <section id="about" class="py-5" style="background-color: #f5f5dc;">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left Column: Image -->
                <div class="col-md-6">
                    <img src="https://picsum.photos/500/400?random=1" alt="Descriptive Image" class="img-fluid rounded">
                </div>
                <!-- Right Column: Heading and Description -->
                <div class="col-md-6">
                    <h2 class="fw-bold">Compassionate Pet Cremation</h2>
                    <p class="fs-5">
                    Rainbow Bridge offers dignified cremation services in Jakarta, Indonesia, with a focus on compassion and care for both the departed and their loved ones. Our experienced team understands the profound emotional journey that comes with saying goodbye, and we are dedicated to providing support and guidance through every step of the process. At Rainbow Bridge, we honor each life with respect and sensitivity, ensuring a comforting experience for families during these challenging times.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
<section id="services" class="py-5" style="background-color: #343a40; color: white;">
<div class="container">
        <h2 class="text-center fw-bold mb-4" style="color: white;">Our Services</h2>
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #343a40; color: white; border: 2px solid white;">
                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Service Name 1</h5>
                        <p class="fw-bold">Cost: IDR 500,000</p>
                        <a href="#" class="btn btn-primary btn-block">Learn More</a>
                        <p class="card-text">This service provides exceptional care and attention to detail for your needs.</p>
                        <ul>
                            <li>Feature 1</li>
                            <li>Feature 2</li>
                            <li>Feature 3</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card 2 (Tengah, Lebih Tinggi) -->
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #343a40; color: white; border: 2px solid white; height: 450px;">
                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Service Name 2</h5>
                        <p class="fw-bold">Cost: IDR 750,000</p>
                        <a href="#" class="btn btn-primary btn-block">Learn More</a>
                        <p class="card-text">Our team ensures the highest level of professionalism and care.</p>
                        <ul>
                            <li>Feature A</li>
                            <li>Feature B</li>
                            <li>Feature C</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card h-100" style="background-color: #343a40; color: white; border: 2px solid white;">
                    <img src="https://picsum.photos/300/200" class="card-img-top" alt="Service Image">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Service Name 3</h5>
                        <p class="fw-bold">Cost: IDR 1,000,000</p>
                        <a href="#" class="btn btn-primary btn-block">Learn More</a>
                        <p class="card-text">We provide tailored solutions to meet your specific requirements.</p>
                        <ul>
                            <li>Feature X</li>
                            <li>Feature Y</li>
                            <li>Feature Z</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Accordion (FAQ Section) -->
<section id="faq" class="py-5" style="background-color: #343a40; color: white;">
    <div class="container">
        <h2 class="text-center mb-4" style="color: white;">Common Inquiries About Our Services</h2>
        <div class="accordion" id="faqAccordion">
            <!-- Fetch Faqs -->
            <?php $index = 1; ?>
            <?php foreach ($faqs as $faq) : ?>

            <?php endforeach; ?>
            <!-- Question 1 -->
            <div class="accordion-item" style="background-color: #343a40; color: white; border: none;">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                        style="background-color: #343a40; color: white; border: none; font-size: 1.25rem; font-weight: bold;">
                        What services does Rainbow Bridge offer for pet cremation?
                        <span class="position-absolute" style="right: 0;"><i class="bi bi-chevron-down"></i></span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                    Rainbow Bridge offers individual and communal pet cremations, allowing you to choose the most appropriate option for your beloved pet.
                    </div>
                </div>
                <hr style="border-color: white;">
            </div>
            <!-- Question 2 -->
            <div class="accordion-item" style="background-color: #343a40; color: white; border: none;">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                        style="background-color: #343a40; color: white; border: none; font-size: 1.25rem; font-weight: bold;">
                        How can I arrange a pet cremation with Rainbow Bridge?
                        <span class="position-absolute" style="right: 0;"><i class="bi bi-chevron-down"></i></span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                    You can arrange a pet cremation by contacting us via phone or email. Your compassionate team will guide you through the process.
                    </div>
                </div>
                <hr style="border-color: white;">
            </div>
            <!-- Question 3 -->
            <div class="accordion-item" style="background-color: #343a40; color: white; border: none;">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                        style="background-color: #343a40; color: white; border: none; font-size: 1.25rem; font-weight: bold;">
                        Where is Rainbow Bridge located in Jakarta?
                        <span class="position-absolute" style="right: 0;"><i class="bi bi-chevron-down"></i></span>
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Rainbow Bridge is conveniently located in Bogor, ensuring easy access for our clients throughout the region.
                    </div>
                </div>
                <hr style="border-color: white;">
            </div>
            <!-- Question 4 -->
            <div class="accordion-item" style="background-color: #343a40; color: white; border: none;">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"
                        style="background-color: #343a40; color: white; border: none; font-size: 1.25rem; font-weight: bold;">
                        Do you provide any keepsakes or memorial products?
                        <span class="position-absolute" style="right: 0;"><i class="bi bi-chevron-down"></i></span>
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, we offer a wide variety of keepsakes and memorial products, including urns and footprints.
                    </div>
                </div>
                <hr style="border-color: white;">
            </div>
            <!-- Question 5 -->
            <div class="accordion-item" style="background-color: #343a40; color: white; border: none;">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed d-flex justify-content-between align-items-center" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"
                        style="background-color: #343a40; color: white; border: none; font-size: 1.25rem; font-weight: bold;">
                        Can I witness the cremation process at Rainbow Bridge?
                        <span class="position-absolute" style="right: 0;"><i class="bi bi-chevron-down"></i></span>
                    </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you are welcome to witness the cremation process as part of our transparent and caring service approach.
                    </div>
                </div>
                <hr style="border-color: white;">
            </div>
        </div>
    </div>
</section>

<!-- Quote Section -->
<section style="background-image: url(https://picsum.photos/400/1200); background-size: cover; background-position: center; color: white; text-align: center; padding: 50px 20px;">
    <div class="py-5">
        <h4 class="fw-bold">Honoring Loved Ones with Care</h4>
        <p>At Rainbow Bridge, our dedication to providing compassionate cremation services in Bogor is unmatched. Let us help you design a heartfelt and memorable farewell for your loved one.</p>
    </div>
</section>

 <!-- Footer Section -->
<footer class="py-4" style="background-color: #343a40; color: white;">
    <div class="container text-center">
        <div class="mt-3">
            <h5 class="fw-bold">Rainbow Bridge</h5>
            <p>
                <a href="https://www.instagram.com/rainbowbridge_memorial/" target="_blank" style="color: white; text-decoration: none;">Instagram</a> | 
                <a href="mailto:rainbowbridgekremasihewan2021@gmail.com" style="color: white; text-decoration: none;">Email</a> | 
                <a href="https://www.facebook.com/share/1PcPnVqciU/" target="_blank" style="color: white; text-decoration: none;">Facebook</a>
            </p>
            <p>Phone: <a href="tel:+6281808106789" style="color: white; text-decoration: none;">+62 818-0810-6789</a></p>
        </div>
    </div>
</footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>