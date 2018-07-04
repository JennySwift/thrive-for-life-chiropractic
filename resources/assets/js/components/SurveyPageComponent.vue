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
                <f7-list-item>
                    <f7-label>New Survey Name</f7-label>
                    <f7-input type="text" :value="newSurvey.name" @input="newSurvey.name = $event.target.value" @input:clear="newSurvey.name = ''" clear-button=""></f7-input>
                </f7-list-item>
            </f7-list-group>
        </f7-list>

        <f7-button @click="insertSurvey">Add</f7-button>

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
                shared: store.state,
                newSurvey: {
                    name: ''
                },
                url: '/api/surveys'
            };
        },
        methods: {
            /**
            *
            */
            getSurveys: function () {
                helpers.get({
                    url: this.url,
                    storeProperty: 'surveys',
                    callback: function (response) {

                    }.bind(this)
                });
            },
            /**
            *
            */
            insertSurvey: function () {
                var data = {
                    name: this.newSurvey.name
                };

                helpers.post({
                    url: this.url,
                    data: data,
                    array: 'surveys',
                    message: 'Survey created',
                    // clearFields: this.clearFields,
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
