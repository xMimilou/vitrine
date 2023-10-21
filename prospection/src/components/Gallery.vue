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
    <div class="box-gallery">
        <div class="icon-gallery">
            <img class="icon" src="./icons/folder-fill.svg">
        </div>
        <p class="subtitle">
            {{ galleryname }}
        </p>
    </div>
  
</template>

<style scoped>
/* align hr center and width 60% */



.box-gallery{
    animation: arrive 1s ease-in-out;
    animation-fill-mode: forwards;
    width: 200px;
    min-height: 200px;
    

}

.icon{
    width: 200px;
    height: 200px;

    object-fit: cover;
    color: #c4ba39;
}

.icon-gallery{
    width: 100%;
    height: 90%;
    background-color: #fff;
    align-items: center;
    display: flex;
    justify-content: center;

}
.subtitle{
    width: 100%;
    height: 10%;
    text-align: center;
    color: #fff;
    padding: 5px;
    line-height: 1;
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
