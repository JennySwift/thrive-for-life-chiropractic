<script>
    export default {
        bind: function () {
            // do preparation work
            // e.g. add event listeners or expensive stuff
            // that needs to be run only once
        },
        update: function (newValue, oldValue) {
            if (newValue) {
                $(this.el).slideDown(1000);
            }
            else {
                $(this.el).slideUp(1000);
            }

            // do something based on the updated value
            // this will also be called for the initial value
        },
        unbind: function () {
            // do clean up work
            // e.g. remove event listeners added in bind()
        }
    }
</script>

<style>

</style>