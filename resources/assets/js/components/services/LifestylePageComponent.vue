<template>
    <transition name="fade">
        <div
            id="lifestyle"
            v-show="showContent"
            class="animated service"
        >
            <div class="cover"></div>
            <div class="text scrollbar-container">
                <h1>Health-Promoting Lifestyle Coaching</h1>
                <p>The biggest determining factor in whether you enjoy good health or suffer from chronic illness — and also how much chiropractic treatment you will need — is your lifestyle. Nothing has a greater impact on your overall health, well-being, performance and vitality than your day-to-day habits and activities — how you eat, move, think, sleep, etc.</p>
                <p>My aim is to help you understand the cause of your problems and empower you to be part of the solution. My health-promoting lifestyle coaching enables you to be proactive in maintaining the benefits of treatment and preventing further problems from occurring in the future. It wonderfully complements and maximises the value of chiropractic care and is a fundamental part of the holistic service I offer.</p>
            </div>
        </div>
    </transition>
</template>

<script>
    import helpers from '../../repositories/HelpersRepository'
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
            helpers.showContent(this);
            helpers.scrollbars();
        }
    }
</script>

<style lang="scss" type="text/scss">

</style>