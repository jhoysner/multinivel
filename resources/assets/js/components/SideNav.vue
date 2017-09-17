<template>
    <div class="phone-viewport">
        <md-toolbar>
            <md-button class="md-icon-button" @click="toggleLeftSidenav">
            <md-icon>menu</md-icon>
            </md-button>
            <h2 class="md-title">{{ name }}</h2>
        </md-toolbar>
        <md-sidenav class="md-left" ref="leftSidenav" @open="open('Left')" @close="close('Left')">
            <md-toolbar class="md-large profile-user">
                <div class="md-toolbar-container">
                    <md-avatar class="md-avatar-icon md-large">
                        <md-icon>home</md-icon>
                    </md-avatar>
                </div>
                <span class="md-subheading">Subheading</span>
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
        data() {
            return {
                name: config.application.name
            }
        }
    };
</script>

<style>
    .profile-user{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>
