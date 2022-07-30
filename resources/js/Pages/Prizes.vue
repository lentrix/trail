<template>
    <div class="row">

        <div class="col-md-2">
            <img src="img/icon_colored.png" alt="Logo" class="logo" /> <br>
            <Link href="/registration" class="btn btn-primary mt-5">Register Now!!!</Link>
        </div>
        <div class="col-md-10">
            <h1>Prizes</h1>
            <br>
            <h3>Awards & Cash Prizes</h3>
            <table class="table table-bordered">
                <tr>
                    <th>&nbsp;</th>
                    <th>21 Km</th>
                    <th>12 Km</th>
                    <th>7 Km</th>
                </tr>
                <tr>
                    <th>1st Prize</th>
                    <td>PhP 10,000</td>
                    <td>PhP 7,000</td>
                    <td>PhP 5,000</td>
                </tr>
                <tr>
                    <th>2nd Prize</th>
                    <td>PhP 8,000</td>
                    <td>PhP 5,000</td>
                    <td>PhP 3,000</td>
                </tr>
                <tr>
                    <th>3rd Prize</th>
                    <td>PhP 5,000</td>
                    <td>PhP 3,000</td>
                    <td>PhP 2,000</td>
                </tr>
                <tr>
                    <th>4th Prize</th>
                    <td>PhP 3,000</td>
                    <td>PhP 3,000</td>
                    <td>PhP 1,000</td>
                </tr>
                <tr>
                    <th>5th Prize</th>
                    <td>PhP 2,000</td>
                    <td>PhP 1,000</td>
                    <td>PhP 800</td>
                </tr>

            </table>

            <h3>Race Kit & Inclusions</h3>
            <p>
                Event Singlet, Bib Number, Finisher Shirt, Finisher Cetennial Medal, Finisher Certificate, Whistle, WAIVER and RELEASE OF LIABILITY
            </p>
        </div>

    </div>

</template>

<style>
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
