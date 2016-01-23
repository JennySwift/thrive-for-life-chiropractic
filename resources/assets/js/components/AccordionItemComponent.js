var AccordionItem = Vue.component('accordion-item', {
    //template: '#accordion-item-template',
    data: function () {
        return {
            showText: false
        };
    },
    components: {},
    methods: {
        listen: function () {
            var that = this;
            var heading = $(this.$el).find('h5');
            heading.on('click', function () {
                $.event.trigger('closeItems', [that]);
                that.showText = !that.showText;
            });
            
            $(document).on('closeItems', function (event, item) {
                if (that !== item) {
                    that.showText = false;
                }
            });
        }
    },
    props: [
        //data to be received from parent
    ],
    ready: function () {
        this.listen();
    }
});
