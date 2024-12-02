<script setup lang="ts">
import router from '../router';
</script>

<template>
    <div class="sidebar">
        <div class="sidebar__cont">
            <div class="sidebar__cont__content">
                <div class="sidebar__row">
                    <div class="sidebar__row__items">
                        <nav>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-house"></i></span>
                                <span class="name">Home</span>
                            </RouterLink>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-calendar-check"></i></span>
                                <span class="name">Appointments</span>
                            </RouterLink>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-people-group"></i></span>
                                <span class="name">Patients</span>
                            </RouterLink>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-user"></i></span>
                                <span class="name">Profile</span>
                            </RouterLink>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-gears"></i></span>
                                <span class="name">Settings</span>
                            </RouterLink>
                            <RouterLink to="/">
                                <span class="logo"><i class="fa-solid fa-right-from-bracket"></i></span>
                                <span class="name">Logout</span>
                            </RouterLink>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
