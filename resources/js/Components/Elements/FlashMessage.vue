<template>
    <div class="flex py-[32px] w-fit min-w-[600px]" v-show="sendedMessage">
        <slot></slot>
    </div>
</template>

<script setup>
// Imports
import {ref} from 'vue';

// Refs
const sendedMessage = ref(false);



</script>