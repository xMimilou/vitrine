<script setup lang="ts">
import { defineProps } from 'vue'
const props = defineProps({
  title: {
    type: String,
    required: true
  },
    description: {
        type: String,
        required: true
}
})
</script>

<template>
    <div class="box-annonce">
        <h3>{{ title }}</h3>
        <p>{{ description }}</p>
    </div>
  
</template>

<style scoped>
/* align hr center and width 60% */


.box-annonce{
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

.box-annonce:hover{
    background-color: #29336b;
    color: white;
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
