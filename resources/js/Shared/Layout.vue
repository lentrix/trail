<template>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/alimono_trail_run_icon_white.png" alt="" width="30" height="24" class="d-inline-block align-text-top" />
                Alimono Trail Run
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <Link class="nav-link" :class="{'active': $page.component=='Landing'}" href="/">Home</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :class="{'active': $page.component=='Guidelines'}" href="/guidelines">Guidelines</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :class="{'active': $page.component=='Prizes'}" href="/prizes">Prizes &amp; Inclusions</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :class="{'active': $page.component=='Rgistration'}" href="/registration">Registration</Link>
                </li>
                <li class="nav-item">
                    <Link class="nav-link" :class="{'active': $page.component=='Participation'}" href="/participation">Participation</Link>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <section class="container mt-4 content p-5 shadow-sm">
        <slot />
    </section>
    <footer>
        Copyright &copy; 2022. All rights reserved.
    </footer>
</template>

<style scoped>
.active {
    border-bottom: 1px solid;
}
.content {
    background-color: #ddd;
    -webkit-backdrop-filter: blur(15px);
    backdrop-filter: blur(15px);
    border-radius: 18px;
    opacity: 0.9;
}
footer {
    text-align: center;
    color: #444;
    font-size: 0.9em;
    padding: 10px;
}
</style>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
</script>
