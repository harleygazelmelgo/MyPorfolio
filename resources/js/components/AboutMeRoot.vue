<template>
  <div id='app' >
    <Header />
    <AboutMe />
    <Footer />

  </div>
</template>

<script>
import Header from '../components/Header.vue'
import AboutMe from '../components/AboutMe.vue'
import Footer from '../components/Footer.vue'


export default {
  name: 'AboutMeRoot',
  components: {
    Header,
    AboutMe,
    Footer,
  },

  mounted() {
      console.log('');
  }
}

</script>
