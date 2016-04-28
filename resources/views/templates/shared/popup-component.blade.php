<script id="popup-template" type="x-template">

    <div
            v-show="showPopup"
            transition="popup-outer"
            v-on:click="closePopup($event)"
            class="popup-outer animate"
    >

        <div
                v-show="showPopup"
                transition="popup-inner"
                :id="id"
                class="popup-inner animate"
        >

            <div class="header">
                <slot name="header"></slot>
            </div>

            <div class="content scrollbar-container">
                <slot name="content"></slot>
            </div>

            <div class="buttons">
                <slot name="buttons">

                </slot>
            </div>

        </div>
    </div>

</script>