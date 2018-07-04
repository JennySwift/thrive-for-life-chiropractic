<template>
    <transition name="fade">
        <div
            id="welcome-page"
            v-show="showContent"
            class="animated"
        >
            <div class="cover"></div>
            <div class="flex">

                <div class="text-container">
                    <div class="text">
                        <h1 class="big-screens">Welcome!</h1>
                        <div class="small-screens">
                            <h1>Welcome!</h1>
                            <img src="/img/Welcome/welcome-img.jpg">
                        </div>
                        <p>I'm Dr Peter Swift, chiropractor and owner of <i>Thrive for Life Chiropractic.</i></p>
                        <p>I’m here to help you thrive — to naturally support your body's own efforts to heal, be strong, feel great, and conquer the challenges each day brings.</p>
                        <p>If you want to get well and stay well — not just survive, but thrive — I'm here for you.</p>
                    </div>

                </div>

                <div class="img-container">
                    <img src="/img/Welcome/welcome-img.jpg">
                </div>
            </div>
        </div>
    </transition>

</template>

<script>
    import helpers from '../repositories/HelpersRepository'
    export default {
        data: function () {
            return {
                showContent: false
            };
        },
        components: {},
        route: {
            data: function (transition) {


            }
        },
        methods: {
            /**
             *
             */
            setScrollbarContainerHeight: function () {
                var height = $(this.$el).find('.text-container').height();
                if ($(window).width() < 1000) {
                    // height = 'auto';
                    $(this.$el).find('.scrollbar-container').css({'max-height': height});
                }
                else {
                    $(this.$el).find('.scrollbar-container').css({'max-height': 555 + 'px'});
                }
                console.log(height);
            },

            /**
             *
             */
            listen: function () {
                var that = this;
                $(window).resize(function () {
                    that.setScrollbarContainerHeight();
                })
            }
        },
        mounted: function () {
            helpers.scrollbars();
            // helpers.psScrollbars();
            helpers.showContent(this);

            // var that = this;
            // setTimeout(function () {
            //     that.setScrollbarContainerHeight();
            // }, 500);
            //
            // this.listen();
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>

