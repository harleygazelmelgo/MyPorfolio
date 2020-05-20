<template>
  <div id='app' >
    <Header />
    <Project />
    <Footer />

  </div>
</template>

<script>
import Header from '../components/Header.vue'
import Project from '../components/Project.vue'
import Footer from '../components/Footer.vue'


export default {
  name: 'AboutMeRoot',
  components: {
    Header,
    Project,
    Footer,
  },

  mounted() {
      console.log('');
  }
}

</script>
