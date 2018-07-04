<template>

</template>

<script>
    export default {
        data: function () {
            return {

            };
        },
        components: {},
        computed: {
            path: function () {
                return this.$route.path;
            }
        },
        methods: {

            /**
             *
             */
            showPrivacyPolicyPopup: function () {
                $.event.trigger('show-privacy-policy-popup');
            }
        },
        props: [
            //data to be received from parent
        ],
        mounted: function () {

        }
    }
</script>

<style lang="scss" type="text/scss">

</style>