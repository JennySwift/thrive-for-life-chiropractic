<script id="government-page-template" type="x-template">

    <div id="government" class="service">
        <div class="cover"></div>

        <div class="scrollbar-container">
            <div class="text scrollbar-content">
                <h1>Government-Supported Services</h1>

                <div class="accordion">
                    <accordion-item inline-template>
                        <div class="accordion-item">
                            <h5 class="accordion-heading">Chronic Disease Management (formerly Enhanced Primary Care)</h5>
                            <div v-show="showText" transition="expand" class="accordion-text">
                                <p>If you have a chronic (or terminal) medical condition that is being managed by your GP you may be
                                    eligible to claim Medicare rebates for up to five allied health services (eg. chiropractic) each
                                    calendar year. A chronic medical condition is one that has been (or is likely to be) present for six
                                    months or longer.</p>
                                <p>Eligibility requires a referral from your GP.</p>
                                <p>If you would like more information, please click
                                    <a
                                        href="http://www.health.gov.au/internet/main/publishing.nsf/Content/health-medicare-allied-health-brochure.htm"
                                        target="_blank"
                                    >
                                        here
                                    </a>.
                                </p>
                            </div>
                        </div>
                    </accordion-item>

                    <accordion-item inline-template>
                        <div class="accordion-item">
                            <h5 class="accordion-heading">Department of Veterans’ Affairs</h5>
                            <div v-show="showText" transition="expand" class="accordion-text">
                                <p>The Department of Veterans' Affairs (DVA) funds all health services, provided under the Veterans’
                                    Entitlements Act 1986 (VEA), the Safety Rehabilitation and Compensation Act 1988 (SRCA) and the Military
                                    Rehabilitation and Compensation Act 2004 (MRCA), necessary to meet a clinical need for Gold Card
                                    holders. For White Card holders, DVA will fund those services required because of their accepted
                                    war-caused or service-related condition(s).</p>
                                <p>Eligibility requires a referral.</p>
                                <p>If you would like more information, please click
                                    <a
                                        href="http://factsheets.dva.gov.au/factsheets/documents/HSV13%20Chiropractic%20Services.htm"
                                        target="_blank"
                                    >
                                        here
                                    </a>.
                                </p>
                            </div>
                        </div>
                    </accordion-item>

                    <accordion-item inline-template>
                        <div class="accordion-item">
                            <h5 class="accordion-heading">Australian Defence Force Family Health</h5>
                            <div v-show="showText" transition="expand" class="accordion-text">
                                <p>The National ADF Family Health Program provides $400 for each registered dependant per financial year to
                                    use towards GST-free non-cosmetic allied health services (eg. chiropractic) and/or to off-set the gap
                                    expenses for specialist consultations. This amount is a family allocation which can be transferred
                                    between family members (for example, a family of 3 dependants will be allocated $1,200 per financial
                                    year).</p>
                                <p>If you would like more information, please click
                                    <a
                                        href="http://www.defence.gov.au/Health/SHC/DependantHealthcare/default.asp"
                                        target="_blank"
                                    >
                                        here
                                    </a>.
                                </p>
                            </div>
                        </div>
                    </accordion-item>
                </div>

            </div>
        </div>
    </div>

</script>