<?php
$this->load->helper('url');
$this->load->view('header/header'); ?>
<style>
    .sticky_active a {
        color: #313131 !important;
    }

    .wpb_single_image * {
        border-radius: 15px;
    }

    .wpb_casestudy {
        width: 60% !important;
        margin-top: 3%;
    }

    .trans {
        display: inline-block !important;
    }

    .rounded-corner {
        border-radius: 15px !important;
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
            <div class="heading_title_mobile">Imprint: Accelerating Merchant Activation for the POS and Sound Box Industry
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
                        <img style="max-height:400px;" class="carousel-image " alt="Sound-Box-Pos-Banner"
                            src="<?php echo base_url('/assets/images/solution/Sound-Box-Pos-Banner/banner1.png'); ?>">
                        <img style="max-height:400px;" class="carousel-image " alt="Sound-Box-Pos-Banner"
                            src="<?php echo base_url('/assets/images/solution/Sound-Box-Pos-Banner/banner2.png'); ?>">
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
                <p>With the global digital payments market expected to reach over $15 trillion by 2027, businesses need efficient payment infrastructures more than ever to stay competitive. However, studies indicate that nearly 30% of non-transacting merchants cite operational challenges or technical difficulties as key barriers to adopting POS machines. These challenges can include complex onboarding processes, limited support, and inadequate issue resolution, leading to underutilized payment terminals and missed revenue opportunities.
                </p>
                <p>
				These challenges can prevent seamless merchant activation, impacting overall revenue growth and customer satisfaction. Payment solutions companies need a robust field force management tool to empower their field agents, streamline processes, and maximize the usage of payment infrastructure by merchants.
                </p>
            </div>
            <div class="softlab_module_spacing">
                <div class="spacing_size spacing_size-initial" style="height:16px;">
                </div>
            </div>
            <!-- ...........heading............. -->
            <div class="wpb_wrapper">
                <h4>
				How Imprint Enhances Merchant Activation for Payment Solutions Companies
                </h4>
			
            </div>
			<div class="wpb_wrapper">
                <p>
				Imprint’s field force management software is tailored to help payment service providers activate non-transacting merchants and improve service efficiency. Here’s how Imprint supports these companies in achieving greater merchant engagement:
                </p>
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
                                <h5>Automated Task Allocation</h5>
                                <p>Imprint facilitates automated task assignment, enabling payment solution providers to assign calls and visits seamlessly to their field agents. This ensures that every merchant receives timely contact, boosting the chances of activating non-transacting merchants and enhancing overall coverage</p>
                            </div>
                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Sound-Box-Pos-Banner/step1.png">
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
                            src="assets/images/solution/Sound-Box-Pos-Banner/step2.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Customizable Data Collection</h5>
                                <p>Field agents can use Imprint’s dynamic digital forms to capture detailed information, including reasons for non-usage, technical issues, and feedback on competitor solutions. This real-time data collection enables back-office teams to quickly analyze merchant challenges and implement targeted solutions.</p>
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
                                <h5>Real-Time Field Updates and Accountability</h5>
                                <p>
								Imprint’s real-time tracking ensures that managers are informed about the status of field visits as they happen. This feature improves transparency, enhances accountability among field agents, and supports prompt follow-ups for better merchant support.
                                </p>
                            </div>

                        </div>
                        <img class="rounded-corner trans step-img" style="width: 30%;"
                            src="assets/images/solution/Sound-Box-Pos-Banner/step3.png" style="width:300px;>
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
                            src="assets/images/solution/Sound-Box-Pos-Banner/step4.png">
                        <div class="wpb_casestudy">
                            <div class="wpb_wrapper">
                                <h5>Advanced Analytics for Performance Monitoring</h5>
                                <p>Payment solutions providers can leverage Imprint’s advanced analytics to track the conversion of non-transacting merchants into active users. These insights help identify trends, measure the success of field strategies, and pinpoint areas for further improvement.
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
            
            <!-- ...........Conclusion para............. -->
			<div class="wpb_wrapper">
                <h4>
				Maximizing POS and Sound Box Utilization with Imprint
                </h4>
            <div class="wpb_wrapper">
                <p>By using Imprint, payment solution providers can streamline their field operations, boost the efficiency of their field teams, and ensure comprehensive merchant engagement. This leads to increased POS and sound box utilization, higher revenue, and strengthened client relationships.
                </p>
               
            </div>
			 <!-- ...........Conclusion para............. -->
			 <div class="wpb_wrapper">
                <h4>
				Ready to Enhance Merchant Activation
                </h4>
            <div class="wpb_wrapper">
                <p>See how Imprint can transform your field operations and drive merchant engagement to new levels. <a href="/contactus#Demo">Schedule a demo or call today </a>to experience the benefits firsthand!
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
