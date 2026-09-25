<?php
$this->load->helper('url');
$this->load->view('header/header'); ?>
<style>
    .sticky_active a {
        color: #313131 !important;
    }

    .wpb_single_image * {
        border-radius: 40px;
    }

    .wpb_casestudy {
        width: 60% !important;
        margin-top: 3%;
    }

    .trans {
        display: inline-block !important;
    }

    .rounded-corner {
        border-radius: 40px !important;
    }

    .wbp_flex,
    .trans,
    #main {
        margin: 0 !important;
        padding: 0 !important;
    }

    #softlab_dbl_6054cf78387ad {
        text-align: center;
    }
</style>
<div id="softlab_dbl_6054cf78387ad" class="softlab_module_double_headings aleft " style="padding-top:90px;">
    <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700;">
        <div class="heading_title_tablet">
            <div class="heading_title_mobile">Elderly Care: Ensuring Timely And Reliable Care With Imprint
            </div>
        </div>
    </div>
</div>
<main id="main">
    <div class="wgl-container">

        <div class="wpb_text_column wpb_content_element ">
            <!-- ..........Banner Image........... -->
            <div class="wpb_wrapper" style="margin-top:12px;">
                <div class="carousel-container rounded-corner">
                    <div class="carousel">
                        <img style="max-height:400px;" class="carousel-image " alt="Elderly Care Banner"
                            src="<?php echo base_url('/assets/images/solution/elderly-care/banner1.png'); ?>">
                        <img style="max-height:400px;" class="carousel-image " alt="Elderly Care Banner"
                            src="<?php echo base_url('/assets/images/solution/elderly-care/banner2.png'); ?>">
                    </div>
                </div>
                <style>
                    .carousel-container {
                        position: relative;
                        width: 100%;
                        overflow: hidden;
                    }

                    .carousel {
                        display: flex;
                        transition: transform 0.5s ease;
                    }

                    .carousel-image {
                        width: 100%;
                        flex-shrink: 0;
                    }
                </style>
                <script>
                    const carousel = document.querySelector('.carousel');
                    const images = document.querySelectorAll('.carousel-image');

                    let index = 0;

                    function updateCarousel() {
                        const offset = -index * 100;
                        carousel.style.transform = `translateX(${offset}%)`;
                    }

                    function autoSlide() {
                        index = (index < images.length - 1) ? index + 1 : 0;
                        updateCarousel();
                    }

                    // Auto-slide feature
                    setInterval(autoSlide, 3000);

                </script>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ...........Intro para............. -->
            <div class="wpb_wrapper">
                <p>As the demand for elderly care services grows, so does the
                    need for reliable and efficient management of caregivers.
                    Imprint is the perfect solution for healthcare agencies
                    looking to provide top-notch care for seniors, particularly
                    in home care settings where personalized attention is
                    crucial. With Imprint, agencies can easily manage and
                    monitor their nursing staff, ensuring that every task is
                    completed on time and to the highest standard, giving peace
                    of mind to both the agency and the families of the elderly.
                </p>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ...........heading............. -->
            <div class="wpb_wrapper">
                <h4>
                    How Imprint Works for Elderly Care
                </h4>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:12px;">
                </div>
            </div>
            <!-- ....................step1............................. -->
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <div class="wbp_flex">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 1: Assigning Caregivers</h5>
                                <p>Agencies assign caregivers to specific
                                    elderly
                                    patients through the Imprint dashboard.
                                    Tasks
                                    such as administering medication, assisting
                                    with
                                    daily activities, and providing
                                    companionship
                                    are detailed and assigned.</p>
                            </div>
                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Assigning-Caregivers.png">
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ....................step2............................. -->
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <div class="wbp_flex image-below-text">
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Real-Time-Tracking.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 2: Real-Time Tracking</h5>
                                <p>As caregivers head out to their assignments,
                                    agencies can track their real-time location
                                    using GPS. This ensures that caregivers
                                    arrive
                                    on time and that any delays are quickly
                                    identified and managed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ....................step3............................. -->
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <div class="wbp_flex">
                        <div class="wpb_casestudy">

                            <div class="wpb_wrapper">
                                <h5> Step 3: Task Completion Logging</h5>
                                <p>Once caregivers reach their destination, they
                                    log into the Imprint app and mark their
                                    arrival.
                                    They then proceed to complete their assigned
                                    tasks, logging each task as it is completed
                                    within the app. This data is instantly
                                    available
                                    to the agency.</p>
                            </div>

                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Task-Completion-Logging.png">
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ....................step4............................. -->
            <div class="wpb_text_column wpb_content_element">
                <div class="wpb_wrapper">
                    <div class="wbp_flex image-below-text">
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Guardian-Updates.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 4: Guardian Updates</h5>
                                <p>The Imprint app sends real-time notifications
                                    to
                                    the guardians or family members of the
                                    elderly
                                    patient. These updates include caregiver
                                    arrival
                                    times, task completions, and any important
                                    notes
                                    or incidents that occurred during the visit.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ....................step5............................. -->
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <div class="wbp_flex">
                        <div class="wpb_casestudy">

                            <div class="wpb_wrapper">
                                <h5>Step 5: Attendance and Leave Management</h5>
                                <p>Agencies can easily manage caregiver
                                    attendance
                                    and leaves using Imprint’s centralized
                                    system.
                                    This allows for quick adjustments and
                                    ensures
                                    that no elderly patient is left without the
                                    care
                                    they need.</p>
                            </div>

                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Attendance-and-Leave-Management.png">
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ....................step6............................. -->
            <div class="wpb_text_column wpb_content_element ">
                <div class="wpb_wrapper">
                    <div class="wbp_flex image-below-text">
                        <img class="trans step-img" style="width: 30%;"
                            src="assets/images/solution/elderly-care/Dashboard-Monitoring.png">
                        <div class="wpb_casestudy">

                            <div class="wpb_wrapper">
                                <h5> Step 6: Dashboard Monitoring</h5>
                                <p>The agency’s management team can oversee all
                                    ongoing operations from the Imprint
                                    dashboard.
                                    They can view real-time data on caregiver
                                    locations, task completions, and more,
                                    allowing
                                    them to ensure high standards of care and
                                    quickly address any issues.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ...........Conclusion para............. -->
            <div class="wpb_wrapper">
                <p>With Imprint, healthcare agencies can offer reliable,
                    efficient, and compassionate care for the elderly, ensuring
                    that every patient receives the attention they deserve. By
                    leveraging real-time tracking, task management, and
                    effective communication, Imprint bridges the gap between
                    agencies and the families they serve, providing peace of
                    mind and ensuring the well-being of seniors.
                </p>
            </div>
        </div>
    </div>
</main>
<style>
    @media only screen and (max-width: 600px) {
        .spacing-mobile {
            height: 160px;
        }
    }

    @media only screen and (min-width: 601px) {
        .spacing-mobile {
            height: 80px;
        }
    }

    @media only screen and (max-width: 1200px) {
        #softlab_dbl_6054cf78387ad {
            text-align: left;
            margin: 0 8%;
        }
    }

    @media only screen and (max-width: 765px) {
        #softlab_dbl_6054cf78387ad {
            text-align: center;
            margin: 0 1%;
        }

        .wpb_casestudy {
            width: 100% !important;
            margin-top: 0;
            margin-bottom: 10px;
        }

        .trans {
            width: 90% !important;
            margin-left: 3% !important;
        }

        .image-below-text {
            display: flex;
            flex-direction: column-reverse;
        }
    }

    h5 {
        color: #54e0c4;
    }
</style>
<?php $this->load->view('footer/footer'); ?>
