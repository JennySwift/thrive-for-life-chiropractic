@extends('layouts.master')

@section('page-content')

    <div id="about">
        <div class="gradient-cover"></div>
        <div class="text">
            <h1>Meet Pete</h1>

            <p>Your health is arguably your most valuable asset, so you want a health practitioner you can trust. Take
                a moment to get to know me, and if you have any further questions please feel free to contact me.</p>

            <accordion-item inline-template>
                <div class="accordion-item">
                    <h5 class="accordion-heading">Qualifications.</h5>
                    <div v-show="showText" transition="expand" class="accordion-text">
                        <p>I have completed 5 years of full-time study at Macquarie University, graduating with a bachelor degree
                            in Chiropractic Science (2005-2007) and a masters degree in Chiropractic (2008-2009).</p>
                        <p>In 2011 I completed a 100-hour post-graduate Professional Applied Kinesiology course and passed the
                            accompanying certification examination. (www.icaka.org.au)</p>
                        <p>Building on the groundwork of my formal qualifications, I continue to think, read, study, attend
                            seminars, meet with other health practitioners, etc. in order to provide you with the highest quality of
                            care and continue my growth as a chiropractor.</p>
                        <p>I am also a member of the Chiropractors' Association of Australia (chiropractors.asn.au) and am
                            registered with the Australian Health Practitioner Regulation Agency (www.ahpra.gov.au) and the
                            Chiropractic Board of Australia (www.chiropracticboard.gov.au).</p>
                    </div>
                </div>
            </accordion-item>

            <accordion-item inline-template>
                <div class="accordion-item">
                    <h5 class="accordion-heading">Why chiropractic?</h5>
                    <div v-show="showText" transition="expand" class="accordion-text">
                        <p>Chiropractic gives me so many opportunities to help people. I can't think of any aspect of life that
                            isn't impacted by how well you feel. As a chiropractor I have the means to help people be well and have
                            a positive impact on their life. This is both a privilege and a joy.</p>
                        <p>It also fits beautifully into my natural, holistic approach to health care and allows me to provide a
                            service that is congruent with my principles, values and beliefs.</p>
                    </div>
                </div>
            </accordion-item>

            <accordion-item inline-template>
                <div class="accordion-item">
                    <h5 class="accordion-heading">Principles. (Values. Beliefs.)</h5>
                    <div v-show="showText" transition="expand" class="accordion-text">
                        <p>Your body is a self-healing, self-regulating organism with an intelligent instinct for survival. It is
                            constantly monitoring and responding to every event that takes place - both internally and externally -
                            consciously and unconsciously - at every moment of every day. The collection of events, your perception
                            of them, and your response to them all come together to determine your position on the sliding scale of
                            health and disease.</p>
                        <p>If given the opportunity, your body will naturally gravitate towards health, well-being and vitality.
                            However, due to lifestyle choices and environmental stressors, the opportunity to thrive is often
                            hindered or obstructed. When your body is provided with inadequate or toxic resources, it is unable to
                            support both health and survival simultaneously. In such conditions, your feeling of well-being takes a
                            hit in order to prioritise survival. While the survival response may result in symptoms that are
                            unpleasant, they are necessary in order for life to continue in the given conditions. The continuation
                            of life, though unpleasant for the time being, gives you the wake-up call you need and an opportunity to
                            make whatever changes are necessary to improve your conditions, thus allowing your body to return to the
                            natural state of health it has been longing for (is constantly working towards).</p>
                        <p>My aim, using a combination of (gentle, non-invasive/natural/restorative) treatment and
                            (health-promoting) lifestyle advice/coaching, is to work in harmony with your body's efforts to restore
                            and maintain health, well-being and vitality. This approach to care is safe, effective, free from
                            harmful side-effects, and provides benefits both now and for the rest of your life.</p>
                        <p>(For information on how chiropractic care contributes to your health within this model click here. (link
                            to 'Services - Chiropractic'))</p>
                    </div>
                </div>
            </accordion-item>

            <accordion-item inline-template>
                <div class="accordion-item">
                    <h5 class="accordion-heading">Daily life.</h5>
                    <div v-show="showText" transition="expand" class="accordion-text">
                        <p>My interest in health doesn't stop when I finish work for the day. It infiltrates my whole life. After
                            all, I need to keep myself healthy too! I enjoy learning about and doing pretty much anything that
                            promotes health. (If you’d like to check out some of the things I’ve found helpful or interesting head
                            over to my growing list of recommendations.) (link)</p>
                        <p>Family is another important part of my life - both my biological family and my church family. It's a
                            blessing to be able to share life with so many wonderful people!</p>
                        <p>And the list wouldn't be complete without music. Whether it's listening to my favourite songs or playing
                            my guitar, music brings much joy to my life.</p>
                    </div>
                </div>
            </accordion-item>

        </div>
    </div>

@stop