import Vue from 'vue'

import AccordionItemComponent from './components/shared/AccordionItemComponent.vue'
import FooterComponent from './components/shared/FooterComponent.vue'
import NavbarComponent from './components/shared/NavbarComponent.vue'
import PopupComponent from './components/shared/PopupComponent.vue'
import ServicesTabsComponent from './components/services/ServicesTabsComponent.vue'
import PrivacyPolicyComponent from './components/PrivacyPolicyComponent.vue'
import SurveyPageComponent from './components/SurveyPageComponent.vue'

//Directives
import SlideDirective from './directives/SlideDirective.vue'

//Transitions
import FadeTransition from './transitions/FadeTransition.vue'
import PopupInnerTransition from './transitions/PopupInnerTransition.vue'
import PopupOuterTransition from './transitions/PopupOuterTransition.vue'


//Components
Vue.component('accordion-item', AccordionItemComponent);
Vue.component('footer-component', FooterComponent);
Vue.component('navbar', NavbarComponent);
Vue.component('popup', PopupComponent);
Vue.component('services-tabs', ServicesTabsComponent);
Vue.component('privacy-policy', PrivacyPolicyComponent);
Vue.component('survey-page', SurveyPageComponent);

//Directives
Vue.directive('slide', SlideDirective);

//Transitions
// Vue.transition('fade', FadeTransition);
// Vue.transition('popup-inner', PopupInnerTransition);
// Vue.transition('popup-outer', PopupOuterTransition);