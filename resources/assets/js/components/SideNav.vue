<template>
    <div class="phone-viewport">
        <md-toolbar>
            <md-button class="md-icon-button" @click="toggleLeftSidenav">
            <md-icon>menu</md-icon>
            </md-button>
            <h2 class="md-title">{{ application_name }}</h2>
        </md-toolbar>
        <md-sidenav class="md-left" ref="leftSidenav" @open="open('Left')" @close="close('Left')">
            <md-toolbar class="md-large flex-vertical-center">
                <div class="md-toolbar-container flex-vertical-center">
                    <md-avatar class="md-large">
                        <img :src="avatar" :alt="name">
                    </md-avatar>
                    <span class="md-subheading">{{ name }}</span>
                </div>
            </md-toolbar>
        </md-sidenav>
    </div>
</template>

<script>
import config from '../config';
    export default {
        methods: {
            toggleLeftSidenav() {
                this.$refs.leftSidenav.toggle();
            },
            toggleRightSidenav() {
                this.$refs.rightSidenav.toggle();
            },
            open(ref) {
                console.log('Opened: ' + ref);
            },
            close(ref) {
                console.log('Closed: ' + ref);
            }
        },
        props: ['user'],
        data() {
            return {
                application_name: config.application.name,
                name: JSON.parse(this.user).name,
                avatar: JSON.parse(this.user).avatar
            }
        },
        mounted: function () {
            this.$nextTick(function () {
            })
        },
        components: {
        }
    };
</script>

<style>
</style>
