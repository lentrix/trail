<template>

    <div class="row">
        <div class="col-md-5 text-center">
            <img src="img/logo.png" alt="Logo" class="logo" /> <br><br>

            <Link href="/registration" class="btn btn-primary btn-lg">Register Now!!!</Link>
        </div>
        <div class="col-md-7">
            <h4>Clarin Centennial Celebration</h4>
            <p>
                In coordination with Saint Michael the Archangel Parish and the Local Government of Clarin, proudly presents:<br />
                <strong>"RUN FOR A CAUSE: MOUNT ALIMONO TRAIL RUN CHALLENGE 2022"</strong> <br />

            </p>
            <p>
                <i class="fa fa-calendar"></i> <strong>September 24, 2022</strong> <br>
                <i class="fa-solid fa-location-pin"></i> Clarin, Bohol, Philippines <br> <br>
                <strong>Race Distance & Registration Fee</strong>
                <ul>
                    <li>21 Kilometer Trail Run - PhP 1,500</li>
                    <li>12 Kilometer Trail Run - PhP 1,000</li>
                    <li>7 Kilometer Trail Run - PhP 600</li>
                </ul>
            </p>
        </div>
    </div>

</template>

<style scoped>
.logo {
    width: 100%;
}
</style>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>

<script>
export default {
    layout: Layout
}
</script>
