<script setup lang="ts">
// define props title
import { defineProps } from 'vue'
const props = defineProps({
  title: {
    type: String,
    required: true
  }
})
</script>

<template>
  <header>
    <h1>{{ title }}</h1>
  </header>
  
</template>

<style scoped>
header {
  background-color: #f0f0f0;
  padding: 1rem;
  
  width: 100%;
  height: 300px;
  text-align: center;
  /* vertical align center */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;

}
h1 {
  /* arriving effect */
  animation: arrive 1s ease-in-out;
  animation-fill-mode: forwards;
  opacity: 0;
  transform: translateY(-100px);
  /* bold */
  font-weight: 700;
  font-size: 3rem;

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
</style>
