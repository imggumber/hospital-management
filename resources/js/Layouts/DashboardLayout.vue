<template>
    <div class="dashboard">
        <div class="dashboard__cont">
            <div class="dashboard__cont__content">
                <div class="dashboard__row">
                    <div class="dashboard__row__items border sidebar">
                        <div class="inner-content p-3">
                            <Sidebar />
                        </div>
                    </div>
                    <div class="dashboard__row__items border topbar">
                        <div class="inner-content p-3">
                            <Topbar />
                        </div>
                    </div>
                    <div class="dashboard__row__items border content">
                        <div class="inner-content p-3">
                            <slot/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
    import Sidebar from '../Components/Sidebar.vue';
    import Topbar from '../Components/Topbar.vue';
</script>
