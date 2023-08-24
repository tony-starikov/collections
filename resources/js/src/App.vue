<template>
    <Nav/>
    <main>
        <router-view/>
    </main>
</template>

<script>
import {defineComponent} from "vue";
import Nav from "./components/Nav.vue";

export default defineComponent({
    name: 'App',
    components: {Nav}
});
</script>
