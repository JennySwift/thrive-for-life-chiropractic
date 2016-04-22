<script id="contact-page-template" type="x-template">

    <div
        id="contact"
        v-show="showContent"
        transition="fade"
        class="animated"
    >
        {{--<div--}}
            {{--v-show="showCover"--}}
            {{--class="cover animated"--}}
            {{--transition="fade"--}}
        {{-->--}}
        {{--</div>--}}

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.274743358119!2d151.10613782789048!3d-33.959755907630566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12b99720842da1%3A0x7eb082e2c6cc8350!2s40+Vine+St%2C+Hurstville+NSW+2220!5e1!3m2!1sen!2sau!4v1453379112267" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div
                {{--v-bind:style="{height: boxHeight, width: boxWidth}"--}}
                v-bind:class="{'expanded': showContactDetails, 'collapsed': !showContactDetails}"
                class="text"
        >

            <div class="buttons">
                <i v-show="showContactDetails" v-on:click="showContactDetails = false" class="fa fa-minus-square"></i>
                <i v-show="!showContactDetails" v-on:click="showContactDetails = true" class="fa fa-plus-square"></i>
            </div>

            <h1>Contact</h1>

            <div
                    v-bind:class="{'expanded': showContactDetails, 'collapsed': !showContactDetails}"
                    v-show="showContactDetails" class="details"
                    transition="contact-details"
            >
                <div class="flex">

                    <ul>

                        <li>
                            <a href="tel:0432926007">&#48;&#52;&#51;&#50; &#57;&#50;&#54; &#48;&#48;&#55;</a>
                        </li>

                        <li>
                            <a href="mailto:peter.c.swift@gmail.com">peter.c.swift<i class="fa fa-at"></i>gmail.com</a>
                        </li>
                        <li>
                            <div>40 Vine Street</div>
                            <div>Hurstville NSW 2220</div>
                        </li>
                    </ul>

                    <ul>
                        <li class="day-and-time-container">
                            <div>Mon</div>
                            <div>9am-6pm</div>
                        </li>
                        <li class="day-and-time-container">
                            <div>Tue</div>
                            <div>10am-12pm</div>
                        </li>
                        <li class="day-and-time-container">
                            <div>Wed</div>
                            <div>closed</div>
                        </li>
                        <li class="day-and-time-container">
                            <div>Thu</div>
                            <div>9am-5pm</div>
                        </li>
                        <li class="day-and-time-container">
                            <div>Fri</div>
                            <div>10:30am-6pm</div>
                        </li>
                        <li class="day-and-time-container">
                            <div>Sat</div>
                            <div>9am-12pm</div>
                        </li>
                    </ul>
                </div>

                <div class="consultations-msg-container">
                    <i class="consultations-msg">Consultations by appointment.</i>
                </div>

            </div>
        </div>

    </div>

</script>