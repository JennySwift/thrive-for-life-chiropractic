<template>
    <transition name="fade">
        <div
            id="hra"
            v-show="showContent"
            class="animated service"
        >
            <div class="hra-gradient-cover"></div>
            <div class="text scrollbar-container">
                <h1>Health Risk Assessment</h1>
                <p>The Health Risk Assessment not only gives you a scientifically-validated rating of your current health
                    status but also your predicted future health status, giving you the opportunity and the information you
                    need to take a proactive approach to your health.</p>
                <p>If you are already suffering with chronic illness and/or symptoms, the Health Risk Assessment will
                    provide you with the knowledge and understanding required to maximise your potential for recovery.</p>
                <p>If you are without illness and/or symptoms and would like to remain so, the Health Risk Assessment has
                    the unique ability to identify your risk factors and reveal if you are at risk of developing illness or
                    disease in the future, thus providing you with a window of opportunity to take preventative action.</p>
                <p>Prevention is better than cure, and the Health Risk Assessment allows you to do just that!</p>
            </div>
        </div>
    </transition>
</template>

<script>
    import helpers from '../../repositories/Helpers'
    export default {
        data: function () {
            return {
                showContent: false
            };
        },
        components: {},
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
            helpers.scrollbars();
            helpers.showContent(this);
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>