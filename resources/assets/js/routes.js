import HomePage from './components/HomePageComponent.vue'
import WelcomePage from './components/WelcomePageComponent.vue'
import AboutPage from './components/AboutPageComponent.vue'
import ContactPage from './components/ContactPageComponent.vue'
import AKPage from './components/services/AKPageComponent.vue'
import ChiropracticPage from './components/services/ChiropracticPageComponent.vue'
import GovernmentPage from './components/services/GovernmentPageComponent.vue'
import HRAPage from './components/services/HRAPageComponent.vue'
import LifestylePage from './components/services/LifestylePageComponent.vue'
import RNRPage from './components/services/RNRPageComponent.vue'

export default [
    {
        path: '/',
        component: HomePage
    },
    {
        path: '/home',
        component: HomePage
    },
    {
        path: '/welcome',
        component: WelcomePage
    },
    {
        path: '/about',
        component: AboutPage
    },
    {
        path: '/contact',
        component: ContactPage
    },
    {
        path: '/services/ak',
        component: AKPage
    },
    {
        path: '/services/chiropractic',
        component: ChiropracticPage
    },
    {
        path: '/services/government',
        component: GovernmentPage
    },
    {
        path: '/services/hra',
        component: HRAPage
    },
    {
        path: '/services/lifestyle',
        component: LifestylePage
    },
    {
        path: '/services/rnr',
        component: RNRPage
    },

]
