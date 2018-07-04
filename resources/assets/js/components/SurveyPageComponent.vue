<template>
    <f7-page>

        <f7-navbar>
            <f7-nav-left>
                <f7-link external href="/">Home</f7-link>
            </f7-nav-left>
            <f7-nav-title>Survey</f7-nav-title>
        </f7-navbar>

        <f7-list contacts-list>
            <f7-list-group>
                <f7-list-item
                    v-for="survey in shared.surveys"
                    :title="survey.name"
                    :key="survey.id"
                >
                </f7-list-item>
            </f7-list-group>
        </f7-list>

    </f7-page>
</template>

<script>
    export default {
        data: function () {
            return {
                shared: store.state
            };
        },
        methods: {
            /**
            *
            */
            getSurveys: function () {
                helpers.get({
                    url: '/api/surveys',
                    storeProperty: 'surveys',
                    callback: function (response) {

                    }.bind(this)
                });
            }
        },
        mounted: function () {
            this.getSurveys();
        }

    }
</script>

<style lang="scss" type="text/scss">

</style>
