<template>
    <transition name="fade">
        <div
            id="home-page"
            v-show="showContent"
            class="animated"
        >
            <div class="cover"></div>
            <div class="text">
                <img src="/img/Home/thrive-for-life-text.png">
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
            // data: function (transition) {
            //     var that = this;
            //     this.showContent = false;
            //     setTimeout(function () {
            //         that.showContent = true;
            //     }, 5000);
            // }
        },
        methods: {

        },
        props: [
            //data to be received from parent
        ],
        mounted: function () {
            helpers.scrollbars();
            helpers.showContent(this);
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>
