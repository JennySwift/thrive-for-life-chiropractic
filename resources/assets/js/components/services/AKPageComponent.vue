<template>
    <transition name="fade">
        <div
            id="ak"
            v-show="showContent"
            class="animated service"
        >
            <div class="cover"></div>
            <div class="text scrollbar-container">
                <h1>Applied Kinesiology</h1>
                <p>Applied Kinesiology (AK) is a non-invasive diagnostic method that uses manual muscle testing to evaluate the integrity of the nervous system. Given that the nervous system monitors and coordinates every aspect of the body, AK can be used to evaluate the whole body and is helpful in discovering the reasons for functional disturbances and also in finding a solution.</p>
            </div>
        </div>
    </transition>
</template>

<script>
    import helpers from '../../repositories/Helpers'
    export default {
        data: function () {
            return {
                //path: this.$route.path
                showContent: false
            };
        },
        components: {},
        route: {

        },
        //watch: {
        //    '$route': function (val) {
        //        this.path = val.path;
        //    }
        //},
        methods: {

        },
        props: [
            'path'
        ],
        mounted: function () {
            helpers.showContent(this);
            helpers.scrollbars();
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>