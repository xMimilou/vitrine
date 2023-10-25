<script setup lang="ts">

</script>

<template>
    <div class="flex flex-col h-screen bg-[#29336bbb] text-white">
        <div class="flex flex-row justify-between items-center p-4 ">
            <div class="flex flex-row items-center">
                <h1 class="text-2xl ">Administration</h1>
            </div>
        </div>

        <ul class="p-4">
            <li class="mb-4 animate-fadeInDown">
                <a href="/admin" class="hover:text-gray-300">Home</a>
            </li>
            <li class="mb-4 animate-fadeInDown" style="animation-delay: 0.1s;">
                <a href="/admin/gallery" class="hover:text-gray-300">Gallery</a>
            </li>
            <li class="mb-4 animate-fadeInDown" style="animation-delay: 0.2s;">
                <a href="/admin/announce" class="hover:text-gray-300">Annonce</a>
            </li>
            <li class="mb-4 animate-fadeInDown" style="animation-delay: 0.3s;">
                <a href="/admin/calendrier" class="hover:text-gray-300">Calendrier</a>
            </li>
        </ul>
    </div>
</template>

<style scoped>

li {
    transition: all 0.5s ease;
}
li:hover {
    transform: translateX(10px);
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-200px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fadeInDown {
    animation: fadeInDown 0.5s ease-out forwards;
}

</style>
