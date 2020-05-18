<template>
  <div id='app' >
    <Header />
    <Contact />
    <Footer />

  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Contact from '../components/Contact.vue'
import Footer from '../components/Footer.vue'


export default {
  name: 'ContactRoot',
  components: {
    Header,
    Contact,
    Footer,
  },

  mounted() {
      console.log('');
  }
}

</script>
