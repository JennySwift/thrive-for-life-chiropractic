<script id="chiropractic-page-template" type="x-template">

    <div id="chiropractic" class="service">
        <div class="cover"></div>
        <div class="text">
            <h1>Chiropractic</h1>

            <div class="slider-container">
                <div class="slider-content">
                    <div v-show="sliderStep === 1" transition="slide-in-left" class="slider-item">
                        <p>Your body is constantly monitoring and responding to every event that takes place - both internally and
                            externally - consciously and unconsciously - at every moment of every day. It does this via the nervous
                            system - your brain, spinal cord, and peripheral nerves.</p>
                        <p>Your nervous system is your control centre for living. It coordinates the activity of every single cell
                            in your body. Its health and performance determine how you perceive everything that happens in and
                            around you, and how you respond to it, which in turn determines whether you experience health or
                            disease.</p>
                    </div>

                    <div v-show="sliderStep === 2" transition="slide-in-right" class="slider-item">
                        <p>Healthy movement and alignment, especially of the spine, is vital to the health of your nervous system.
                            Unfortunately, living in an unnatural, toxic environment results in poor movement patterns and stiffness
                            in and around your joints.</p>
                        <p>Chiropractic helps restore and maintain optimal joint movement, alignment and function, thus optimising
                            the health and performance of your nervous system, allowing your body to heal naturally and function as
                            designed.</p>
                        <p>My methods of assessment and treatment are safe, effective, and gentle enough for all ages.</p>
                        <p>(For more information visit chiropractors.asn.au/about-chiropractic/chiropractic-you)?</p>
                    </div>
                </div>

                <div class="slider-navigation">
                    <div
                            v-on:click="sliderStep = 1"
                            v-bind:class="{'current-step': sliderStep === 1, 'fa-circle': sliderStep === 1, 'fa-circle-thin': sliderStep !== 1}"
                            class="slider-navigation-item fa"
                    >
                    </div>

                    <div
                            v-on:click="sliderStep = 2"
                            v-bind:class="{'current-step': sliderStep === 2, 'fa-circle': sliderStep === 2, 'fa-circle-thin': sliderStep !== 2}"
                            class="slider-navigation-item fa"
                    >
                    </div>
                </div>
            </div>

        </div>

    </div>

</script>