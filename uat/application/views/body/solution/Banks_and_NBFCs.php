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
        margin: 0 10%;
    }
</style>
<div id="softlab_dbl_6054cf78387ad" class="softlab_module_double_headings aleft " style="padding-top:90px;">
    <div class="heading_title" style="font-size:36px; line-height:1.333; font-weight:700;">
        <div class="heading_title_tablet">
            <div class="heading_title_mobile">Banking & Financial Institutions: Transforming Efficiency With Imprint
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
                            src="<?php echo base_url('/assets/images/solution/Banks-and-NBFCs/banner1.png'); ?>">
                        <img style="max-height:400px;" class="carousel-image " alt="Elderly Care Banner"
                            src="<?php echo base_url('/assets/images/solution/Banks-and-NBFCs/banner2.png'); ?>">
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
                <p>In an industry where precision drives trust and agility fuels growth, banking and financial
                    institutions need more than just traditional tools to thrive. They require a solution that not only
                    streamlines operations but also enhances every customer interaction.
                </p>
                <p>
                    Imprint field force performance monitoring offers that solution—empowering banks and NBFCs to manage
                    inquiries, automate workflows, and track performance in real time with unmatched accuracy. By
                    integrating Imprint FSM tool into your operations, you ensure every opportunity is maximized and
                    every process is effortlessly executed, setting a new standard for excellence in financial services.
                </p>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ...........heading............. -->
            <div class="wpb_wrapper">
                <h4>
                    How Imprint Works for Banking & Financial Institutions
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
                                <h5>Step 1: Application/Inquiry Collection</h5>
                                <p>The process begins when an agent collects an application or inquiry from a customer,
                                    either in person or through an online form. Alternatively, customers can initiate
                                    the process themselves through a user-friendly digital form. This ensures that all
                                    customer interactions are captured right from the start.</p>
                            </div>
                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Banks-and-NBFCs/step1.png">
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
                            src="assets/images/solution/Banks-and-NBFCs/step2.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 2: Auto-Allocation To Agents</h5>
                                <p>Once an application or inquiry is submitted, Imprint automatically assigns the
                                    opportunity to the most suitable sales representative based on criteria such as
                                    expertise, location, and workload. This ensures that each opportunity is handled
                                    efficiently and by the right person.</p>
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
                                <h5> Step 3: CRM Update</h5>
                                <p>
                                    As the application or inquiry moves through the process, Imprint ensures that all
                                    updates are immediately reflected in the CRM system. This integration eliminates the
                                    need for manual data entry, reducing errors and ensuring that customer records are
                                    always up to date.
                                </p>
                            </div>

                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Banks-and-NBFCs/step3.png">
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
                            src="assets/images/solution/Banks-and-NBFCs/step4.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 4: Lead Allocation and Tracking</h5>
                                <p>After auto-allocation, Imprint assigns leads to sales representatives for follow-up
                                    visits or consultations. The tool then tracks the progress of these leads, allowing
                                    management to monitor each representative’s activity and ensure that all leads are
                                    pursued, and none lost or missed owing to human errors.
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
                                <h5>Step 5: Streamlined Processes</h5>
                                <p>Imprint facilitates a smooth Quick Data Entry (QDE) process for immediate actions
                                    while also supporting a Detailed Document Entry (DDE) process for more complex
                                    cases. This ensures that all necessary data is captured efficiently, enabling
                                    informed decision-making without unnecessary delays.</p>
                            </div>

                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Banks-and-NBFCs/step5.png">
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
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Banks-and-NBFCs/step6.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Step 6: Performance Reporting</h5>
                                <p>Finally, Imprint generates detailed reports on the performance of individual sales
                                    representatives and teams. These reports provide valuable insights into
                                    productivity, efficiency, and overall performance, enabling management to make
                                    data-driven decisions to optimize operations.</p>
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
                <p>By integrating Imprint field force management solution into
                    your banking or financial institution’s workflow, you can
                    streamline operations, improve customer service, and enhance
                    overall efficiency.
                </p>
                <p>
                    Imprint not only helps manage inquiries and leads but also
                    provides the tools needed to monitor performance, ensuring
                    that your team is always operating at its best. In a
                    fast-paced industry where every second counts, Imprint is
                    the solution that gives your institution the competitive
                    edge it needs to thrive.
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
