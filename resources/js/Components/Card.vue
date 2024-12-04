<template>
    <div :class="'card ' + (backgroundColor ? backgroundColor : '') + ' bg-gradient bg-opacity-75' ">
        <div class="card__cont d-flex align-items-center p-3">
            <div class="icon">
                <span><i class="fa-solid fa-users"></i></span>
            </div>
            <div class="content mt-2 ms-4">
                <p v-if="title">{{ title }}</p>
                <h4 v-if="count">{{ count }}</h4>
            </div>
        </div>
        <div class="icon-bg">
            <span><i class="fa-solid fa-users"></i></span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            title: {
                type: String,
                default: ''
            },
            count: {
                type: String,
                default: ''
            },
            backgroundColor: {
                type: String,
                default: 'bg-warning-subtle'
            }
        }
    }
</script>

