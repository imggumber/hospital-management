<template>
    <DashboardLayout>
        <div class="contentarea">
            <section class="cards">
                <div class="cards__cont">
                    <div class="cards__cont__content">
                        <Card title="OPD" count="54" backgroundColor="bg-warning" />
                        <Card title="Current Patient" count="3" backgroundColor="bg-primary" />
                        <Card title="Admission" count="74" backgroundColor="bg-success-subtle" />
                        <Card title="On Leaves" count="6" backgroundColor="bg-success" />
                    </div>
                </div>
            </section>
        </div>
    </DashboardLayout>
</template>

<script>
    import DashboardLayout from '../Layouts/DashboardLayout.vue';
    import Card from '../Components/Card.vue';

    export default {
        components : {
            DashboardLayout,
            Card
        }
    }
</script>
