<template>
    <div>
        <Header />
        <Slot />
        <Footer />
    </div>
</template>

<script>

import Header from "./Headar.vue";
import Footer from "./Footer.vue";

export default {
    components: {
        Header,
        Footer
    }
};
</script>

<style scoped></style>
