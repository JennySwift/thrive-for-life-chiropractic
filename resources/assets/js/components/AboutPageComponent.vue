<template>
    <transition name="fade">
        <div
            id="about"
            v-show="showContent"
            class="animated"
        >

            <div class="cover"></div>
            <div class="scrollbar-container">
                <!--.scrollbar-content needed for accordion functionality-->
                <div class="text scrollbar-content">
                    <h1>Meet Pete</h1>

                    <p>
                        Your health is arguably your most valuable asset, so it’s important to have a health practitioner you can trust will look after you well. Take a moment to get to know me, and if you have any further questions please feel free to
                        <a v-on:click="path = '/contact'" href="#">contact me</a>.
                    </p>

                    <div class="accordion">
                        <accordion-item inline-template auto-scroll="true">
                            <div class="accordion-item">
                                <h5 class="accordion-heading">Qualifications</h5>
                                <div
                                    v-slide="showText"
                                    class="accordion-text about-accordion-one"
                                >
                                    <p>I have completed 5 years of full-time study at Macquarie University, graduating with a bachelor degree in Chiropractic Science (2005-2007) and a masters degree in Chiropractic (2008-2009).
                                    <p>In 2011 I completed a 100-hour post-graduate Professional Applied Kinesiology course and passed the accompanying certification examination.</p>
                                    <p>Building on these formal qualifications I continue to think, read, study, attend seminars, and meet with other health practitioners in order to provide you with the highest quality of care.</p>
                                    <p>I am also a member of the Chiropractors' Association of Australia and am registered with the Australian Health Practitioner Regulation Agency and  the Chiropractic Board of Australia.</p></p>
                                </div>
                            </div>
                        </accordion-item>

                        <accordion-item inline-template auto-scroll="true">
                            <div class="accordion-item">
                                <h5 class="accordion-heading">Why Chiropractic?</h5>
                                <div v-slide="showText" class="accordion-text about-accordion-two">
                                    <p>I can't think of any aspect of life that isn't impacted by how well you feel. Chiropractic provides me with the means and opportunity to have a positive impact on people’s lives by helping them be well. This is both a privilege and a joy.</p>
                                    <p>Chiropractic also fits perfectly into my natural, holistic approach to health care and allows me to provide a service that is congruent with my principles, values and beliefs.</p>
                                </div>
                            </div>
                        </accordion-item>

                        <accordion-item inline-template auto-scroll="true">
                            <div class="accordion-item">
                                <h5 class="accordion-heading">Guiding Principles</h5>
                                <div v-slide="showText" class="accordion-text">
                                    <p>Your body is constantly monitoring and responding to every event that takes place — both internally and externally, consciously and unconsciously — at every moment of every day. The collection of events, your perception of them, and your response to them all come together to determine your position on the sliding scale of health and disease.</p>
                                    <p>If given the opportunity, your body will naturally gravitate towards health, well-being and vitality. However, due to lifestyle choices and environmental stressors, the opportunity to thrive is often hindered or obstructed. When your body is provided with inadequate or toxic resources (due to your lifestyle and/or environment), your feeling of well-being often takes a hit in order to prioritise survival. While the survival response may result in symptoms that are unpleasant, they are part of your body’s intelligent response to its conditions and are necessary in order to maximise your chance of survival in the given conditions. The presence of symptoms gives you a wake-up call and their prolonging of your life gives you an opportunity to make whatever changes are necessary to improve your conditions, thus allowing your body to return to the natural state of health it has been longing for and is constantly working towards.</p>
                                    <p>My aim — using a combination of gentle, restorative treatment and lifestyle coaching — is to work in harmony with your body's efforts to restore and maintain health, well-being and vitality. This approach to care is safe, effective, free from harmful side-effects, and provides benefits both now and for the rest of your life.</p>
                                </div>
                            </div>
                        </accordion-item>

                        <accordion-item inline-template auto-scroll="true">
                            <div class="accordion-item">
                                <h5 class="accordion-heading">Interests</h5>
                                <div v-slide="showText" class="accordion-text">
                                    <p><i>Health.</i> My interest in health doesn't stop when I finish work for the day. I enjoy learning about and doing pretty much anything that promotes health and wellness.</p>
                                    <p><i>People.</i> Toys and technology can be fun and useful, but I find that it’s people and relationships that bring much more fulfilment to life, so I consider myself extraordinarily fortunate to have such wonderful family, friends and patients to share life with.</p>
                                    <p><i>Music.</i> Whether listening to it or playing it myself, music is a great gift from God that I thoroughly enjoy <img src="/img/About/smiley.png"></p>
                                </div>
                            </div>
                        </accordion-item>

                    </div>

                </div>
            </div>
        </div>
    </transition>

</template>

<script>
    import helpers from '../repositories/Helpers'
    export default {
        data: function () {
            return {
                showContent: false
            };
        },
        components: {},
        methods: {

            /**
             *
             */
            listen: function () {
                var that = this;

                //To stop Firefox going to the user's previous scroll position on page refresh
                $(window).on('unload', function() {
                    // $('.scrollbar-container').scrollTop(0);
                    $('.scrollbar-container').mCustomScrollbar('scrollTo', 'top');
                });
            }
        },
        props: [
            'path'
        ],
        mounted: function () {
            //this.listen();
            helpers.scrollbars();
            //This is because for some reason, on the iPhone,
            //unless the user clicks and drags the screen before using the accordion,
            //the accordion is really jerky
            setTimeout(function () {
                $('body').mousedown().mousemove().mouseup();
            }, 500);

            helpers.showContent(this);
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>
