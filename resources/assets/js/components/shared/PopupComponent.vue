<template>
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
</template>

<script>
    import helpers from '../../repositories/Helpers'
    export default {
        data: function () {
            return {
                //showPopup: false,
                //selected: {}
            };
        },
        components: {},
        methods: {
            /**
             *
             */
            closePopup: function ($event) {
                helpers.closePopup($event, this, this.redirectTo);
            },

            setContentHeight: function () {
                var popupInnerHeight = $(this.$el).find('.popup-inner').css('max-height');
                var popupOuterHeight = $(this.$el).css('height');
                popupInnerHeight = popupInnerHeight.replace(' + 100%', '').replace('-', '').replace('px', '').replace('calc(', '').replace(')', '');
                popupInnerHeight = parseInt(popupOuterHeight, 10) - parseInt(popupInnerHeight, 10);
                $(this.$el).find('.content').css({'max-height': popupInnerHeight-160 + 'px'});
            }

        },
        props: [
            'showPopup',
            'id',
            'redirectTo'
        ],
        mounted: function () {
            helpers.scrollbars();
            this.setContentHeight();
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>