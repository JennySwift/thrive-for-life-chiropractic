<script id="chiropractic-page-template" type="x-template">

    <div id="chiropractic" class="service">
        @include('templates.shared.services-tabs')
        <div class="cover"></div>
        <div class="text">
            <h1>Chiropractic</h1>

            <div class="slider-navigation">
                <div v-on:click="sliderStep = 1" v-bind:class="{'current-step': sliderStep === 1}" class="slider-navigation-item"></div>
                <div v-on:click="sliderStep = 2" v-bind:class="{'current-step': sliderStep === 2}" class="slider-navigation-item"></div>
                <div v-on:click="sliderStep = 3" v-bind:class="{'current-step': sliderStep === 3}" class="slider-navigation-item"></div>
                <div v-on:click="sliderStep = 4" v-bind:class="{'current-step': sliderStep === 4}" class="slider-navigation-item"></div>
                <div v-on:click="sliderStep = 5" v-bind:class="{'current-step': sliderStep === 5}" class="slider-navigation-item"></div>
                <div v-on:click="sliderStep = 6" v-bind:class="{'current-step': sliderStep === 6}" class="slider-navigation-item"></div>
            </div>

            <div class="slider-content">
                <p v-show="sliderStep === 1" transition="fade" class="slider-item">Your body is constantly monitoring and responding to every event that takes place - both internally and
                    externally - consciously and unconsciously - at every moment of every day. It does this via the nervous
                    system - your brain, spinal cord, and peripheral nerves.</p>
                <p v-show="sliderStep === 2" transition="fade" class="slider-item">Your nervous system is your control centre for living. It coordinates the activity of every single cell
                    in your body. Its health and performance determine how you perceive everything that happens in and
                    around you, and how you respond to it, which in turn determines whether you experience health or
                    disease.</p>
                <p v-show="sliderStep === 3" transition="fade" class="slider-item">Healthy movement and alignment, especially of the spine, is vital to the health of your nervous system.
                    Unfortunately, living in an unnatural, toxic environment results in poor movement patterns and stiffness
                    in and around your joints.</p>
                <p v-show="sliderStep === 4" transition="fade" class="slider-item">Chiropractic helps restore and maintain optimal joint movement, alignment and function, thus optimising
                    the health and performance of your nervous system, allowing your body to heal naturally and function as
                    designed.</p>
                <p v-show="sliderStep === 5" transition="fade" class="slider-item">My methods of assessment and treatment are safe, effective, and gentle enough for all ages.</p>
                <p v-show="sliderStep === 6" transition="fade" class="slider-item">(For more information visit chiropractors.asn.au/about-chiropractic/chiropractic-you)?</p>

            </div>
        </div>

    </div>

</script>