<script setup lang="ts">

</script>

<template>
    <nav>
        <ul>
        <li>
            <RouterLink to="/" exact>Home</RouterLink>
        </li>
        <li>
            <RouterLink to="/about">About</RouterLink>
        </li>
        <li>
            <RouterLink to="/Annonce">Annonce</RouterLink>
        </li>
        <li>
            <RouterLink to="/Gallery">Gallery</RouterLink>
        </li>
        </ul>
    </nav>
  
</template>

<style scoped>
/* make effect on the active page */
nav {
  background-color: #29336bbb;
  padding: 1rem;
  
  width: 100%;
  height: 50px;
  text-align: center;
  /* vertical align center */
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color:white;

}
ul {
  list-style: none;
  padding: 0;
  margin: 0;
  display: flex;
  gap: 1rem;
}
li {
  font-size: 1.5rem;
}
li a {
  text-decoration: none;
  color: #fff;
}
li a:hover {
  color: #fff;
  text-decoration: underline;
}
li a.active {
  color: #fff;
  text-decoration: underline;
}



</style>
