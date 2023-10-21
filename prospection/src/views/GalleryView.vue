<script setup lang="ts">
import { defineProps } from 'vue'
const props = defineProps({
  galleryname: {
    type: String,
    required: true
  }

})
</script>

<template>
    
  
</template>

<style scoped>
/* align hr center and width 60% */


.box-gallery{
    animation: arrive 1s ease-in-out;
    animation-fill-mode: forwards;
    width: 60%;
    min-height: 100px;
    margin: 5px auto;
    background-color: #29336b48;
    padding: 10px;
    border-radius: 5px;
    
    /* vertical align center */
    display: flex;
    flex-direction: column;
    /* make box shadow bottom right 2px 0.5 #000 */
    box-shadow: 2px 0.5px #000;

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
