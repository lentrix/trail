<template>

    <div class="row">
        <div class="col-md-2">
            <img src="img/icon_colored.png" alt="Logo" class="logo" /> <br>
            <Link href="/registration" class="btn btn-primary mt-5">Register Now!!!</Link>
        </div>
        <div class="col-md-10">
            <h1>Rules & Guideliness</h1>
            <hr>
            <div class="row">
                <div class="col-md-7">
                    <ol>
                        <li>Each participant is required to sign a WAIVER and RELEASE OF LIABILITY form prior to the race</li>
                        <li>Any valid ID, scanned receipt of payment must be presented upon claiming the race kit a day before the race</li>
                        <li>Only running sports attire and running shoes are allowed</li>
                        <li>Race bib number must be worn on the fron of the body from start to finish</li>
                        <li>Music devices are not allowed during the race</li>
                        <li>Short-cutting the race may result to disqualification</li>
                        <li>The event will take place RAIN or SHINE unless declared cancelled or postponed by the organizers</li>
                        <li>The course will be marked with trail signs, ribbons, and cautions to be followed by every runner</li>
                        <li>No time credits will be given to any runner who get lost</li>
                        <li>Medics/Marshalls/Photographers are stationed at all critical/technical sections of the course</li>
                        <li>Aid and water stations are assigned at certain points of the course</li>
                        <li>Turning ribbons will be given to every participant. No turning ribbon at the finish line may result to disqualification</li>
                        <li>The organizers reserve the right to modify the rules and the race route at any time for safety and welfare of the participants</li>
                        <li>Any verbal abuse, misconduct, and repeated violations of the rules may lead to disqualification and expulsion from future races</li>
                        <li>The race Director's decision is final and cannot be appealed in case dispute/protest arise before the awarding of prizes</li>
                    </ol>
                </div>
                <div class="col-md-5">
                    <h4>Assembly Time/Briefing</h4>
                    <p>5:00 AM</p>
                    <h4>Gun Start</h4>
                    <ul>
                        <li>21 Km - 5:30 AM</li>
                        <li>12 Km - 5:40 AM</li>
                        <li>7 Km - 5:50 AM</li>
                    </ul>

                    <h4>Cut-off Time</h4>
                    <ul>
                        <li>21 Km - 8 hours</li>
                        <li>12 Km - 6 hours</li>
                        <li>7 Km - 4 hours</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>
.logo {
    width: 100%;
}
</style>

<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout
}
</script>
