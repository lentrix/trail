<template>
     <div class="row">

        <div class="col-md-2">
            <img src="img/icon_colored.png" alt="Logo" class="logo" /> <br>
            <Link href="/registration" class="btn btn-primary mt-5">Register Now!!!</Link>
        </div>
        <div class="col-md-10">
            <h1>Check My Participation</h1>
            <p>This section allows you to check the status and details of your Registration/Participation.</p>
        </div>

    </div>
</template>

<style scoped>
.logo {
    width: 100%;
}
</style>

<script>
import Layout from '../Shared/Layout.vue'

export default {
    layout: Layout
}
</script>
