<template>
    <div class="alert">{{ message }}</div>
</template>

<script>
export default {
    data() {
        return {
            message: 'Hello World!'
        }
    }
}
</script>

<style>
.alert {
    background: red;
}
</style>
