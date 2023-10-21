<script setup lang="ts">
import Heading from '../components/heading.vue'
import Navbar from '../components/navbar.vue'
import AnnounceSection from '../components/AnnounceSection.vue'
import Gallery from '../components/Gallery.vue'
</script>

<template>
  <Heading title="Welcome"></Heading>
  <Navbar></Navbar>
  <div class="white">
    <h2>Annonces</h2>
    <AnnounceSection title="Match de mardi" description="Rendez-vous mardi prochain pour un match de pétanque"></AnnounceSection>
    <AnnounceSection title="Match de mardi" description="Rendez-vous mardi prochain pour un match de pétanque"></AnnounceSection>
    <AnnounceSection title="Match de mardi" description="Rendez-vous mardi prochain pour un match de pétanque"></AnnounceSection>
    <AnnounceSection title="Match de mardi" description="Rendez-vous mardi prochain pour un match de pétanque"></AnnounceSection>
    <p class="subtitle"><a href="/Annonce">voir plus </a></p>
  </div>
  <div class="blue">
    <h2>Gallery</h2>
    <div class="gallery-container">
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
      <Gallery galleryname="Match de mardi"></Gallery>
    </div>
    <p class="subtitle" style="color:white"><a href="/gallery">voir plus >>></a></p>
  </div>
</template>

<style scoped>
h2 {
  text-align: center;
  margin: 2rem;
  /* bold */
  font-weight: 400;
  font-size: 2rem;
  animation: arrive 1s ease-in-out;
  animation-fill-mode: forwards;
}

@keyframes arrive {
  0% {
    opacity: 0;
    transform: translateY(-100px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.blue {
  background-color: #29336b;
  padding: 1rem;
  color: white;
}

.subtitle {
  text-align: center;
  margin: 2rem;
  /* bold */
  font-weight: 400;
  font-size: 1rem;
}

.gallery-container{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  width: 60%;
  margin: 0 auto;
}
.gallery-container > * {
  flex: 1 1 200px;
  margin: 5px;
}

a {
  color: #fff;
  text-decoration: none;
}
</style>