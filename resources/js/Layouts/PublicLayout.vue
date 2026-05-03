<script setup>
import Footer from '../Components/Footer.vue';
import Navbar from '../Components/Navbar.vue';

</script>

<template >

   <div class="md:container md:mx-auto ">
 <Navbar/>
     <main >
        <slot v-if="$slots.default" />
     </main>

    <!-- footer -->
     <Footer/>
   </div>
</template>
