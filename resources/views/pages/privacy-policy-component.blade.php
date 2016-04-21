<script id="privacy-policy-template" type="x-template">

<div>
    <popup
        :show-popup.sync="showPopup"
        id="privacy-policy-popup"
        :redirect-to="redirectTo"
    >
        <div slot="content">
            <h1>Privacy Policy</h1>

            <p>Just like I want you to feel safe and comfortable in my clinic, I want you to feel safe and comfortable on my website too. If you have any questions or concerns about my Privacy Policy, please feel free to
                <a href="mailto:peter.c.swift@gmail.com">email me</a>.</p>

            <h2>Google Analytics</h2>
            <p>Like millions of other websites, thriveforlifechiropractic.com.au uses Google Analytics to record <i>anonymous</i> information about how visitors are using my website. Some of this information includes:</p>
            <ul>
                <li>how many visitors the site receives</li>
                <li>how long visitors spend on a page</li>
                <li>what links are clicked</li>
                <li>search terms that led to a visit</li>
            </ul>
            <p>My purpose in using Google Analytics to collect this information is to improve my website and provide you with a better browsing experience. Rest assured, I respect your privacy and none of the information collected is personally identifiable.</p>
            <p>If you would like more information please visit <a href="https://support.google.com/analytics/answer/6004245">Google Analytics</a>.</p>

            <h2>Cookies</h2>
            <p>My policy on cookies is, "Don't eat too many!" ;) Sorry, I couldn't help myself...</p>
            <p>This site uses cookies, which, in the context of internet privacy, are not edible. They are small text files that are placed on your machine to help the site provide a better user experience. In general, cookies are used to retain user preferences, store information for things like shopping carts, and provide <i>anonymised</i> tracking data to third party applications like Google Analytics. As a rule, cookies will make your browsing experience better, however if you would prefer to disable them you can do so through your browser options.</p>

            <h2>Complaints</h2>
            <p>If you have any complaints or if you believe your privacy has been breached, please <a href="mailto:peter.c.swift@gmail.com">email me</a> and provide details of the incident so it can be investigated.</p>
            <p>If you wish to have the matter considered externally you can contact the Office of the Australian Information Commissioner
                <a href="https://www.oaic.gov.au/about-us/contact-us">here</a>.</p>

            <h2>Updates</h2>
            <p>Please note that this Privacy Policy may be updated from time to time and that by continuing to use thriveforlifechiropractic.com.au you are agreeing to these updates.</p>

            <p>Last Update: 19 April, 2016</p>

            <p>Sincerely, Dr Peter Swift (Chiropractor and Owner of Thrive for Life Chiropractic)</p>
        </div>

        <div slot="buttons">
            <button
                    v-on:click="showPopup = false"
                    {{--v-link="{path: redirectTo}"--}}
                    class="btn btn-default"
                >
                    Close
                </button>
        </div>
    </popup>

</div>

</script>