<script setup lang="ts">
import Navbar from '../../components/Admin/navbar.vue'
import LineChart from '../../components/Admin/LineChart.vue'
</script>

<template>
    <div class="flex flex-row h-screen">
        <div class="w-1/6">
            <Navbar></Navbar>
        </div>
        <div class="w-5/6 bg-gray-100 p-4">
            
            <LineChart></LineChart>
        </div>
    </div>
</template>

<style scoped>
</style>
